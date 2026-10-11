<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\ReportCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ReportController extends Controller
{
    // Menampilkan laporan milik warga yang sedang login.
    public function index()
    {
        $reports = Report::where('user_id', auth()->id())
            ->with('category')
            ->latest()
            ->paginate(10);

        return view('warga.reports.index', compact('reports'));
    }

    // Menampilkan formulir laporan baru.
    public function create()
    {
        $categories = ReportCategory::where('is_active', true)
            ->orderBy('name')
            ->get();

        return view('warga.reports.create', compact('categories'));
    }

    // Menyimpan laporan baru.
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => [
                'required',
                Rule::exists('report_categories', 'id')
                    ->where('is_active', true),
            ],
            'title' => ['required', 'string', 'max:150'],
            'description' => ['required', 'string', 'max:5000'],
            'location' => ['required', 'string', 'max:255'],
            'photo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $photoPath = null;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('reports', 'public');
        }

        $report = new Report();
        $report->user_id = auth()->id();
        $report->category_id = $validated['category_id'];
        $report->title = $validated['title'];
        $report->description = $validated['description'];
        $report->location = $validated['location'];
        $report->photo_path = $photoPath;
        $report->save();

        return redirect()
            ->route('warga.reports.index')
            ->with('success', 'Laporan berhasil dikirim.');
    }

    // Menampilkan detail laporan milik warga.
    public function show(Report $report)
    {
        abort_unless(
            (int) $report->user_id === (int) auth()->id(),
            403
        );

        $report->load('category');

        return view('warga.reports.show', compact('report'));
    }

    // Menghapus laporan milik warga.
    public function destroy(Report $report)
    {
        abort_unless($report->user_id === auth()->id(), 403);

        if ($report->status !== 'pending') {
            return back()->with('error', 'Laporan hanya dapat dihapus saat masih menunggu.');
        }

        if ($report->photo_path) {
            Storage::disk('public')->delete($report->photo_path);
        }

        $report->delete();

        return redirect()
            ->route('warga.reports.index')
            ->with('success', 'Laporan berhasil dihapus.');
    }
}


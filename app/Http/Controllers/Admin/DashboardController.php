<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Http\Controllers\Controller;
use App\Models\Report;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        
        $totalReports = Report::count();

        $pendingReports = Report::where('status', 'pending')->count();

        $inProgressReports = Report::where('status', 'in_progress')->count();

        $resolvedReports = Report::where('status', 'resolved')->count();

        $rejectedReports = Report::where('status', 'rejected')->count();

        $reports = Report::with(['user', 'category'])
            ->latest()
            ->paginate(10);

        return view('admin.dashboard', compact(
            'totalReports',
            'pendingReports',
            'inProgressReports',
            'resolvedReports',
            'rejectedReports',
            'reports'
        ));

        
    }


    public function showReport(Report $report)
    {
        $report->load(['user', 'category']);

        return view('admin.reports.show', compact('report'));
    }


    public function updateReport(Request $request, Report $report): RedirectResponse
    {
        $validated = $request->validate([
            'status' => [
                'required',
                Rule::in(['pending', 'in_progress', 'resolved', 'rejected']),
            ],
            'admin_note' => ['nullable', 'string', 'max:2000'],
        ]);

        $report->status = $validated['status'];
        $report->admin_note = $validated['admin_note'] ?? null;
        $report->save();

        return redirect()
            ->route('admin.reports.show', $report)
            ->with('success', 'Laporan berhasil diperbarui.');
    }


}

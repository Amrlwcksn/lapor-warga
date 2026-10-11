<?php

namespace Database\Seeders;

use App\Models\ReportCategory;
use Illuminate\Database\Seeder;

class ReportCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Infrastruktur Jalan',
                'description' => 'Jalan rusak, berlubang, atau akses jalan bermasalah.',
            ],
            [
                'name' => 'Sampah dan Kebersihan',
                'description' => 'Sampah menumpuk dan masalah kebersihan lingkungan.',
            ],
            [
                'name' => 'Drainase dan Banjir',
                'description' => 'Saluran air tersumbat atau genangan air.',
            ],
            [
                'name' => 'Lampu Jalan',
                'description' => 'Lampu penerangan jalan rusak atau mati.',
            ],
            [
                'name' => 'Fasilitas Umum',
                'description' => 'Kerusakan fasilitas umum milik desa.',
            ],
            [
                'name' => 'Lainnya',
                'description' => 'Permasalahan lain di lingkungan desa.',
            ],
        ];

        foreach ($categories as $category) {
            ReportCategory::updateOrCreate(
                ['name' => $category['name']],
                [
                    'description' => $category['description'],
                    'is_active' => true,
                ]
            );
        }
    }
}


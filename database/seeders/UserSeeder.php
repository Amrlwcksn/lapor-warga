<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin LaporWarga',
                'email' => 'admin@laporwarga.test',
                'password' => 'Admin123!',
                'role' => 'admin',
                'phone' => '081234567890',
            ],
            [
                'name' => 'subagyo',
                'email' => 'subagyo@laporwarga.test',
                'password' => 'Warga123!',
                'role' => 'warga',
                'phone' => '081234567891',
            ],
            [
                'name' => 'slamet',
                'email' => 'slamet@laporwarga.test',
                'password' => 'Warga123!',
                'role' => 'warga',
                'phone' => '081234567892',
            ],
            [
                'name' => 'sri',
                'email' => 'sri@laporwarga.test',
                'password' => 'Warga123!',
                'role' => 'warga',
                'phone' => '081234567893',
            ],
        ];

        foreach ($users as $data) {
            User::updateOrCreate(
                ['email' => $data['email']],
                [
                    'name' => $data['name'],
                    'password' => Hash::make($data['password']),
                    'role' => $data['role'],
                    'phone' => $data['phone'],
                ]
            );
        }
    }
}

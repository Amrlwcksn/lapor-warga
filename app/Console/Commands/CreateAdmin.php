<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    protected $signature = 'app:create-admin';

    protected $description = 'Membuat akun admin LaporWarga';

    public function handle(): int
    {
        $name = $this->ask('Nama admin');
        $email = $this->ask('Email admin');
        $password = $this->secret('Password admin');

        if (! $name || ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error('Nama dan format email harus valid.');

            return self::FAILURE;
        }

        if (! $password || strlen($password) < 8) {
            $this->error('Password minimal 8 karakter.');

            return self::FAILURE;
        }

        if (User::where('email', $email)->exists()) {
            $this->error('Email tersebut sudah terdaftar.');

            return self::FAILURE;
        }

        $admin = new User();
        $admin->name = $name;
        $admin->email = $email;
        $admin->password = Hash::make($password);
        $admin->role = 'admin';
        $admin->save();

        $this->info('Akun admin berhasil dibuat.');

        return self::SUCCESS;
    }
}


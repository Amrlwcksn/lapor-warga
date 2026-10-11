<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('category_id')
                ->constrained('report_categories')
                ->restrictOnDelete();

            $table->string('title', 150);
            $table->text('description');
            $table->string('location');
            $table->string('photo_path')->nullable();

            $table->enum('status', [
                'pending',
                'in_progress',
                'resolved',
                'rejected',
            ])->default('pending');

            $table->text('admin_note')->nullable();

            $table->timestamps();

            $table->index(['user_id', 'created_at']);
            $table->index(['category_id', 'status']);
            $table->index(['status', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};

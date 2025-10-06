<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Название группы
            $table->date('start_from'); // Дата начала обучения
            $table->boolean('is_active')->default(false); // Начала ли группа своё обучение
            $table->timestamp('created_at')->useCurrent(); // Дата создания
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate(); // Дата обновления
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};

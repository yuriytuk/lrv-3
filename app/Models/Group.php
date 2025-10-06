<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'start_from',
        'is_active',
    ];

    protected $casts = [
        'start_from' => 'date',
        'is_active' => 'boolean',
    ];

    public function students()
    {
        // Одна группа можеть иметь много студентов
        return $this->hasMany(Student::class);
    }
}
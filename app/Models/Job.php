<?php

namespace App\Models;

use Illuminate\Support\Arr; // ✅ Ensure Arr is imported

class Job
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'title' => 'Director', 'salary' => '$10,000'],
            ['id' => 2, 'title' => 'Programmer', 'salary' => '$30,000'],
            ['id' => 3, 'title' => 'Teacher', 'salary' => '$5,000']
        ];
    }

    public static function find(int $id): ?array
    {
        return Arr::first(static::all(), fn($job) => $job['id'] == $id); // ✅ Fix arrow function syntax and comparison
    }
}

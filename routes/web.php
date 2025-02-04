<?php

use Illuminate\Support\Arr; // ✅ Fix capitalization
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            ['id' => 1, 'title' => 'Director', 'salary' => '$10,000'],
            ['id' => 2, 'title' => 'Programmer', 'salary' => '$30,000'],
            ['id' => 3, 'title' => 'Teacher', 'salary' => '$5,000']
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    // ✅ Fix assignment (use `=` instead of `=>`)
    $jobs = [
        ['id' => 1, 'title' => 'Director', 'salary' => '$10,000'],
        ['id' => 2, 'title' => 'Programmer', 'salary' => '$30,000'],
        ['id' => 3, 'title' => 'Teacher', 'salary' => '$5,000']
    ];

    // ✅ Fix variable name mismatch and arrow function syntax
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    // ✅ Fix incorrect `→` symbol (use `=>` instead)
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

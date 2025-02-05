<?php

use Illuminate\Support\Arr; // ✅ Fix capitalization
use Illuminate\Support\Facades\Route;
use App\Models\Job; // ✅ Fix missing semicolon

Route::get('/', function () {
   return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all() // ✅ Fix incorrect capitalization
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    // ✅ Fix incorrect variable assignment
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

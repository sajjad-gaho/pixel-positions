<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\http\Controllers\Adminmiddleware;
use App\Http\Controllers\Admin\AdminController;
// use App\http\Controllers\Middleware\Adminmiddleware;

// this open for all (Guest & Login both)
Route::get('/', [JobController::class, 'index']);

// only for Login Users(Profile etc)

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('auth.profile');
});

// Just for ADMIN (Job Posting)
// We 'auth' & 'admin' both middleware lagaye hain

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::post('/jobs', [JobController::class, 'store']);
});

// Route::get('/', [JobController::class, 'index']);
// Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
// Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);

Route::middleware('guest')->group( function (){
//User Register
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

// User Login
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']); 
});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');

// Pages
Route::get('/jobs', [PageController::class, 'jobs'])->name('pages.jobs');
Route::get('/careers', [PageController::class, 'careers'])->name('pages.careers');
Route::get('/salaries', [PageController::class, 'salaries'])->name('pages.salaries');
Route::get('/companies', [PageController::class, 'companies'])->name('pages.companies');

// View Salary Detail Show Page Route
Route::get('/salaries/{job}', [PageController::class, 'showSalary'])->name('pages.detail');


// Agar ye aapka main page hai
Route::get('/', [JobController::class, 'index'])->name('/');

// Login User Profile
// Route::get('/profile', [ProfileController::class, 'show'])
    // ->middleware('auth')
    // ->name('auth.profile');


// Route::get('/job{job: $job}', AdminController::class);

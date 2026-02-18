<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;

class AdminController extends Controller
{
    public function index() 
    {
    $totalJobs = Job::count();
    $totalUsers = User::count();
    $recentJobs = Job::latest()->take(5)->get();

    return view('admin.dashboard', compact('totalJobs', 'totalUsers', 'recentJobs'));

    }
}

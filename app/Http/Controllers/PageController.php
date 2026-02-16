<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\Job;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    public function jobs()
    {
        return view('pages.jobs');
    }

    public function careers()
    {
        $stats = [
            'totalJobs' => Job::count(),
            'companies' => Employer::count(),
        ];
        return view('pages.careers',compact('stats'));
    }

    public function salaries()
    {
        // Variable ka name $jobs rakha hy taake blade mein masla na ho
        $jobs = Job::latest()->get();
        return view('pages.salaries', compact('jobs'));
    }

    public function showSalary(Job $job)
    {
        return view('pages.salaries.show', compact('job'));
    }
    

    public function companies()
    {
        // $employers = Employer::withCount('jobs')->get();
        $employers = Employer::all();
        return view('pages.companies', compact('employers'));
    }
}

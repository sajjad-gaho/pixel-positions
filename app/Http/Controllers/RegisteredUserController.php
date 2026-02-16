<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\File;


class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        // validation
        $userAttributes = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);

        //User Create
        $user = User::create($userAttributes);

        // Employer validation
        $employerAttributes = request()->validate([
            'employer' => ['required'],
            'logo' => ['required', File::types('png', 'jpg', 'webp', 'jpeg')],
        ]);

        // 'logos' folder ka naam hai, aur 'public' disk ka naam
        $logoPath = $request->logo->store('logos','public');



        // Employer Create 
        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath,
        ]);

        //Log in
        Auth::login($user);

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Registry'
        ]);
    }

    public function store(Request $request)
    {
        $validatedUsers = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'confirm-password' => 'required_with:password|same:password|min:5|max:255',
            'terms' => 'required',
        ]);

        $validatedUsers['password'] = Hash::make($validatedUsers['password']);
        //kirim ke models user database
        User::create($validatedUsers);

        // $request->session()->flash('success', 'Registration successful! Please Login');

        return redirect('/')->with('success', 'Registration successful! Please Login');
        
    }
}

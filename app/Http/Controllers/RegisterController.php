<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register');
    }

    public function store(Request $request)
    {
        dd($request);
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'fullname' => 'required|max:255',
            'phone' => 'required|',
            'password' => 'required|min:3|max:255|confirmed',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('message', 'Register berhasil, silahkan login!');
    }
}

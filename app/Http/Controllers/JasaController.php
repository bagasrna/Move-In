<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jasa;

class JasaController extends Controller
{
    public function movein(){
        $user = auth()->user();

        return view('feature.bookMovin', [
            'user' => $user
        ]);
    }

    public function packin(){
        $user = auth()->user();

        return view('feature.bookPackin', [
            'user' => $user
        ]);
    }

    public function checkout(){
        $user = auth()->user();

        return view('feature.date', [
            'user' => $user
        ]);
    }

    public function payment(){
        $user = auth()->user();

        return view('feature.payment', [
            'user' => $user
        ]);
    }

    public function store(Request $request){
        $user = auth()->user();

        
    }
}

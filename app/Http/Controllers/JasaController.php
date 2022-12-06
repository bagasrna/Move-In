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

    public function paymentMovein(){
        $user = auth()->user();

        return view('feature.paymentMovein', [
            'user' => $user
        ]);
    }

    public function paymentPackin(){
        $user = auth()->user();

        return view('feature.paymentPackin', [
            'user' => $user
        ]);
    }

    public function store(Request $request){
        $user = auth()->user();

        Jasa::create([
           'user_id' => $user->id,
           'total' => 300000,
           'quantity' => 1,
           'date' => '2022-12-06',
        ]);

        return redirect('/history');
    }

    public function history(){
        $user = auth()->user();
        $histories = Jasa::where('user_id', $user->id)->get();;

        return view('pages.riwayat', [
            'user' => $user,
            'histories' => $histories
        ]);
    }
}

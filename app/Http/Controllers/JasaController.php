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

        return view('feature.validatePayment', [
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

    public function edit(){
        $user = auth()->user();

        return view('feature.editPesanan', [
            'user' => $user
        ]);
    }

    public function delete(Request $request)
    {
        Jasa::where('id', $request->id)->delete();
     
        return redirect('/history')->with('message', 'Pesanan berhasil dihapus!');
    }

    public function store(Request $request){
        $user = auth()->user();

        $validatedData = $request->validate([
            'date' => 'required',
            'total' => 'required',
            'quantity' => 'required',
        ]);

        $validatedData['user_id'] = $user->id;

        Jasa::create($validatedData);

        return redirect('/checkout');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $token = $request->session()->get('token', 'default');
        $kategori = Http::withHeaders([
            'Authorization' => "Bearer $token"
        ])->get('http://gis-drainase.pocari.id/api/kategori');

        return view('menu', ['kategori' => $kategori->json()]);
    }

    public function tambahTipeDrainase(Request $request)
    {
        $token = $request->session()->get('token', 'default');
        $tipe = $request->post('tipe_baru');
        Http::withHeaders([
            'accept' => 'application/json',
            'Authorization' => "Bearer $token"
        ])->post('http://gis-drainase.pocari.id/api/kategori', [
            'kategori' => $tipe
        ]);
        return redirect('/menu');
    }

    public function deleteTipeDrainase(Request $request, $id)
    {
        $token = $request->session()->get('token', 'default');
        Http::withHeaders([
            'accept' => 'application/json',
            'Authorization' => "Bearer $token"
        ])->post('http://gis-drainase.pocari.id/api/kategori/' . $id, [
            '_method' => 'delete'
        ]);
        return redirect('/menu');
    }
}
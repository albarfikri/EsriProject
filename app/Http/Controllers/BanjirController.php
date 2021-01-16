<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BanjirController extends Controller
{
    public function index(Request $request)
    {
        $token = $request->session()->get('token', 'default');
        $data = Http::withHeaders([
            'Authorization' => "Bearer $token"
        ])->get('http://gis-drainase.pocari.id/api/titik_banjir');
        return view('banjir', ['data' => $data->json()]);
    }

    public function addBanjir(Request $request)
    {
        $token = $request->session()->get('token', 'default');
        $id_admin = $request->session()->get('id_admin', 'default');
        $geo = $request->post('geometry');
        $point = '{"type": "Point", "coordinates": [ ' . $geo . '] }';
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'Authorization' => "Bearer $token"
        ])->post('http://gis-drainase.pocari.id/api/titik_banjir', [
            'id_admin' => $id_admin,
            'nama_jalan' => $request->post('nama_jalan'),
            'kondisi_kerusakan' => $request->post('kondisi'),
            'foto' => $_FILES['foto']['name'],
            'keterangan' => $request->post('keterangan'),
            'geometry' => $point,
        ]);

        // dd($response->json());
        return redirect('/banjir');
    }
}
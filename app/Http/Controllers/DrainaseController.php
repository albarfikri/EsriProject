<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DrainaseController extends Controller
{
    private $token;
    private $id_admin;

    public function __construct(Request $request)
    {
        $this->token = $request->session()->get('token', 'default');
        $this->id_admin = $request->session()->get('id_admin', 'default');
    }
    public function index()
    {
        $data = Http::withHeaders([
            'Authorization' => "Bearer $this->token"
            ])->get('http://gis-drainase.pocari.id/api/drainase');
        return view('drainase', ['data' => $data->json()]);
    }

    public function addDrainase(Request $request) {
        $geo = $request->post('geometry');
        $point = '{"type": "Point", "coordinates": [ ' . $geo . '] }';
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'Authorization' => "Bearer $this->token"
            ])->post('http://gis-drainase.pocari.id/api/register/petugas', [
            'id_admin' => $this->id_admin,
            'nama_jalan' => $request->post('nama_jalan'),
            'lebar' => $request->post('lebar'),
            'panjang' => $request->post('panjang'),
            'kedalaman' => $request->post('kedalaman'),
            'foto' => $_FILES['foto']['name'],
            'bahan' => $request->post('bahan'),
            'kondisi' => $request->post('kondisi'),
            'akhir_pembuangan' => $request->post('akhir_pembuangan'),
            'arah_alir' => $request->post('arah_alir'),
            'tipe_drainase' => $request->post('tipe_drainase'),
            'geometry' => $point,
        ]);
        
        dd($response->json());
        // return redirect('/petugas');
    }
}

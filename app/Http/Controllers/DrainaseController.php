<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DrainaseController extends Controller
{
    public function index(Request $request)
    {
        $token = $request->session()->get('token', 'default');
        $data = Http::withHeaders([
            'Authorization' => "Bearer $token"
        ])->get('http://gis-drainase.pocari.id/api/drainase');
        return view('drainase', ['data' => $data->json()]);
    }

    public function detail(Request $request, $id)
    {
        $token = $request->session()->get('token', 'default');
        $data = Http::withHeaders([
            'Authorization' => "Bearer $token"
        ])->get('http://gis-drainase.pocari.id/api/drainase/' . $id);

        $drainase = $data->json();
        
        // dd($drainase);

        $point = [
            "type" => "Feature",
            "properties" => [
                "name" => "Coors Field",
                "amenity" => "Baseball Stadium",
                "popupContent" => "This is where the Rockies play!"
            ],
            "geometry" => json_decode($drainase['geometry'], true),
        ];

        $point['view'] = $point['geometry']['coordinates'];

        // dd($point['geometry']->{'coordinates'});

        return view('detailDrainase', ['data' => json_encode($point), 'item' => $drainase]);
    }

    public function addDrainase(Request $request)
    {
        $token = $request->session()->get('token', 'default');
        $id_admin = $request->session()->get('id_admin', 'default');
        $geo = $request->post('geometry');
        $point = '{"type": "Point", "coordinates": [ ' . $geo . '] }';
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'Authorization' => "Bearer $token"
        ])->post('http://gis-drainase.pocari.id/api/drainase', [
            'id_admin' => $id_admin,
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

        // dd($response->json());
        return redirect('/drainase');
    }
}

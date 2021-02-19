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
            "geometry" => json_decode($drainase['geometry'], true),
        ];

        $point['view'] = $point['geometry']['coordinates'][0];
        // dd(json_encode($point));
        // dd($point['geometry']->{'coordinates'});
        // dd($point['view']);

        return view('detailDrainase', ['data' => json_encode($point), 'item' => $drainase]);
    }

    public function addDrainase(Request $request)
    {
        $token = $request->session()->get('token', 'default');
        $id_admin = $request->session()->get('id_admin', 'default');
        // dd($request->post('geometry'));
        // dd($request->file('foto'));
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
            'geometry' => $request->post('geometry'),
        ]);

        dd($response->json());
        return redirect('/drainase');
    }

    public function delete(Request $request, $id)
    {
        $token = $request->session()->get('token', 'default');
        $id_admin = $request->session()->get('id_admin', 'default');
        // dd($request->post('geometry'));
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'Authorization' => "Bearer $token"
        ])->post('http://gis-drainase.pocari.id/api/drainase/' . $id, [
            '_method' => 'delete'
        ]);

        // dd($response->json());
        return redirect('/drainase');
    }

    public function update(Request $request, $id)
    {
        $token = $request->session()->get('token', 'default');
        $id_admin = $request->session()->get('id_admin', 'default');
        // dd($request->post('geometry'));
        // dd($request->file('foto'));
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'Authorization' => "Bearer $token"
        ])->post('http://gis-drainase.pocari.id/api/drainase/' . $id, [
            '_method' => 'put',
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
            'geometry' => $request->post('geometry'),
        ]);

        dd($response->json());
        return redirect('/drainase/detail/'. $id);
    }
}

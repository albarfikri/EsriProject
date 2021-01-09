<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PetugasController extends Controller
{
    public function index(Request $request)
    {
        $token = $request->session()->get('token', 'default');
        $data = Http::withHeaders([
            'Authorization' => "Bearer $token"
            ])->get('http://gis-drainase.pocari.id/api/petugas');
        return view('petugas', ['data' => $data->json()]);
    }

    public function addPetugas(Request $request) {
        $token = $request->session()->get('token', 'default');
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'Authorization' => "Bearer $token"
            ])->post('http://gis-drainase.pocari.id/api/register/petugas', [
            'email' => $request->post('email'),
            'password' => $request->post('password'),
            'password_confirmation' => $request->post('password2'),
            'nama' => $request->post('nama'),
            'foto' => $_FILES['foto']['name'],
            'no_hp' => $request->post('no_hp'),
            'posisi_petugas' => $request->post('posisi_petugas'),
            'tempat_lahir' => $request->post('tempat_lahir'),
            'tgl_lahir' => $request->post('tgl_lahir'),
            'alamat' => $request->post('alamat')
        ]);
        
        // dd($response->json());
        return redirect('/petugas');
    }

    public function deletePetugas(Request $request, $id_petugas)
    {
        $token = $request->session()->get('token', 'default');
        $data = Http::withHeaders([
            'Authorization' => "Bearer $token"
            ])->delete('http://gis-drainase.pocari.id/api/petugas/' . $id_petugas);
        
        dd($data);
    }
}

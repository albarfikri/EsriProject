<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PetugasController extends Controller
{

    public function index()
    {
        $data = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMGE5M2VjZjZmNzZhNmRjNTc1OGZiYmNjNTZhMDc5NDliMjllMjVlNzNlNjVmMzU1MTZkNWI1MTMwZWNhMGU1OGM2OGY2MGYzYTUwMTE2ODQiLCJpYXQiOjE2MTAxMTQ5NTksIm5iZiI6MTYxMDExNDk1OSwiZXhwIjoxNjQxNjUwOTU5LCJzdWIiOiIyNzk0MDYwYS1kMzY3LTQzMTktOGE0NS03NTdiZmU2OTIxMGIiLCJzY29wZXMiOltdfQ.Ibzz_MkQyE_vU__WWqL5Jd0hz85Gd8YW38A3B3imQRLvfccgz6Suv6yMdPU_Yh51B9HwoP3eUXXf5XxkcG7sjJKDjegsiXmll3eGm8dVpQBjnPBr2940rCYcsmDWi4byG2tK71TKFRcY8T7LbZPyGdR-SdYBpn6amee8J5tAXic5EXP5bZlrVSUv4MG29jZ4Sl1KzleaQU7a3xy-va9sLnIOO5H3oR22CRv2qQ-j7USdLVoJY9Vq-KJ9KP-GPhepZjPmMFiBuowWxwLD48ZqcnxS1AaqNVwIFwM1abEvWI7BFruwv-UM8vpjdCRi11OBcSdSWxFzNrISKcIvWnb1WfD2mOJPrGNxnCxPqwQwnTUymDr_LynJIVpNUSp_Ji6F2OqbcJ-vp4Em1KDEiJl-CFB70GjzVcRUcrGnM1FqCWDeBwRFk9MyEDCaILjw0bTr3vm8b2pItUQcEwn_14a1ZL2qkuAaEhKDiboAUmgUujQsf6MrA87I_kC_gcgD3tgWoBK0Er1i1WwQv_z5RzWsFITlqTszlrq9zmVmx3z-0TDfpBVswvrQESm10PhhBvvfFRfBM8ZgbPb2XW-j11iH8YDmUpCGxXIGGufjhUFTlgV_TsVgJtve7iH6WYjXl9PATIC_h1ykDRVrEUaE7UaVkRdw9GX35CC0d59grT3627I',
        ])->get('http://gis-drainase.pocari.id/api/petugas');
        return view('petugas', ['data' => $data]);
    }

    public function addPetugas() {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMGE5M2VjZjZmNzZhNmRjNTc1OGZiYmNjNTZhMDc5NDliMjllMjVlNzNlNjVmMzU1MTZkNWI1MTMwZWNhMGU1OGM2OGY2MGYzYTUwMTE2ODQiLCJpYXQiOjE2MTAxMTQ5NTksIm5iZiI6MTYxMDExNDk1OSwiZXhwIjoxNjQxNjUwOTU5LCJzdWIiOiIyNzk0MDYwYS1kMzY3LTQzMTktOGE0NS03NTdiZmU2OTIxMGIiLCJzY29wZXMiOltdfQ.Ibzz_MkQyE_vU__WWqL5Jd0hz85Gd8YW38A3B3imQRLvfccgz6Suv6yMdPU_Yh51B9HwoP3eUXXf5XxkcG7sjJKDjegsiXmll3eGm8dVpQBjnPBr2940rCYcsmDWi4byG2tK71TKFRcY8T7LbZPyGdR-SdYBpn6amee8J5tAXic5EXP5bZlrVSUv4MG29jZ4Sl1KzleaQU7a3xy-va9sLnIOO5H3oR22CRv2qQ-j7USdLVoJY9Vq-KJ9KP-GPhepZjPmMFiBuowWxwLD48ZqcnxS1AaqNVwIFwM1abEvWI7BFruwv-UM8vpjdCRi11OBcSdSWxFzNrISKcIvWnb1WfD2mOJPrGNxnCxPqwQwnTUymDr_LynJIVpNUSp_Ji6F2OqbcJ-vp4Em1KDEiJl-CFB70GjzVcRUcrGnM1FqCWDeBwRFk9MyEDCaILjw0bTr3vm8b2pItUQcEwn_14a1ZL2qkuAaEhKDiboAUmgUujQsf6MrA87I_kC_gcgD3tgWoBK0Er1i1WwQv_z5RzWsFITlqTszlrq9zmVmx3z-0TDfpBVswvrQESm10PhhBvvfFRfBM8ZgbPb2XW-j11iH8YDmUpCGxXIGGufjhUFTlgV_TsVgJtve7iH6WYjXl9PATIC_h1ykDRVrEUaE7UaVkRdw9GX35CC0d59grT3627I',
        ])->post('http://gis-drainase.pocari.id/api/register/petugas', [
            'email' => 'petugas3@gmail.com',
            'password' => '123',
            'password_confirmation' => '123',
            'nama' => 'udin',
            'no_hp' => '08120302323',
            'posisi_petugas' => 'Supervisor',
            'tempat_lahir' => 'Pekanbaru',
            'tgl_lahir' => '2000-04-21',
            'alamat' => 'Umban Sari'
        ]);

        dd($response);
    }
}

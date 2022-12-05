<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetaKehadiran;

class PetaKehadiranController extends Controller
{
    public function lihatData()
    {
        $data = PetaKehadiran::all();
        return $data;
    }

    public function ambilData($id)
    {
        $data = PetaKehadiran::find($id);
        return $data;
    }

    public function simpanData(Request $request)
    {
        PetaKehadiran::create([
            'no_hari' => $request->no_hari,
            'jam_masuk' => $request->jam_masuk,
            'jam_pulang' => $request->jam_keluar,
        ]);
    }

    public function hapusData($id)
    {
        PetaKehadiran::find($id)->delete();
    }
}

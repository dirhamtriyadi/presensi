<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PresensiHarian;

class PresensiHarianController extends Controller
{
    public function lihatData()
    {
        $data = PresensiHarian::all();
        return $data;
    }

    public function ambilData($id)
    {
        $data = PresensiHarian::find($id);
        return $data;
    }

    public function simpanData(Request $request)
    {
        PresensiHarian::create([
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_pulang' => $request->tgl_keluar,
            'ket_hari' => $request->ket_hari,
            'nip' => $request->nip,
            'ip_masuk' => $request->ip_masuk,
            'ip_keluar' => $request->ip_keluar,
            'peta_kehadiran_id' => $request->peta_kehadiran_id,
            'jam_harus_masuk' => $request->jam_harus_masuk,
            'jam_harus_keluar' => $request->jam_harus_keluar,
        ]);
    }

    public function hapusData($id)
    {
        PresensiHarian::find($id)->delete();
    }
}

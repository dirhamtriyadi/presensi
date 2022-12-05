<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function lihatdata()
    {
        $r = Pengguna::all();
        return ['count' => $r->count(), 'data' => $r];
    }

    public function ambilData($nip='')
    {
        return (new Pengguna())->find($nip, ['nip', 'nama', 'level']);
    }

    public function simpanData()
    {
        $nip = request('nip');

        // dapatkan objek model Pengguna berdasarkan primary key, yaitu $nip
        $r = (new Pengguna())->find($nip);

        if ($r == null || $nip = '') {
            $r = new Pengguna();
        }

        $r->nip = request('nip');
        $r->nama = request('nama');
        $r->level = request('level');
        $r->sandi = bcrypt(request('sandi'));
        $ret = $r->save();

        return ['result' => $ret];
    }

    public function hapusData($nip='')
    {
        $r = (new Pengguna())->find($nip);
        $ret = $r->delete();

        return ['result' => $ret];
    }
}

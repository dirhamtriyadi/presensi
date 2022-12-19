<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('pengguna', ['pengguna'=>$pengguna]);
    }

    public function create()
    {

        return view('tambahpengguna');
    }

    public function store(Request $request)
    {
        Pengguna::updateOrCreate([
            'nip' => $request->nip
        ], [
            'nama' => $request->nama,
            'level' => $request->level,
            'sandi' => bcrypt($request->sandi)
        ]);

        return redirect()->route('pengguna');
    }

    public function edit($nip)
    {
        $pengguna = Pengguna::find($nip);
        return view('editpengguna', ['pengguna'=>$pengguna]);
    }

    public function destroy($nip)
    {
        Pengguna::destroy($nip);
        return redirect('/pengguna');
    }

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

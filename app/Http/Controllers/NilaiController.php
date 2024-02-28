<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NilaiController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function convert(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'partisipasi' => 'required|numeric',
            'tugas' => 'required|numeric',
            'uts' => 'required|numeric',
            'uas' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        // Ambil nilai dari request
        $partisipasi = $request->input('partisipasi');
        $tugas = $request->input('tugas');
        $uts = $request->input('uts');
        $uas = $request->input('uas');

        // Hitung nilai akhir
        $na = ($partisipasi + $tugas + $uts + $uas) / 4;

        // Konversi nilai huruf
        $nh = $this->konversiNilaiHuruf($na);

        // Tampilkan hasil
        return view('hasil', ['na' => $na, 'nh' => $nh]);
    }

    private function konversiNilaiHuruf($na)
    {
        if ($na >= 85) {
            return 'A';
        } elseif ($na >= 80) {
            return 'A-';
        } elseif ($na >= 75) {
            return 'B+';
        } elseif ($na >= 70) {
            return 'B';
        } elseif ($na >= 65) {
            return 'B-';
        } elseif ($na >= 60) {
            return 'C+';
        } elseif ($na >= 55) {
            return 'C';
        } elseif ($na >= 40) {
            return 'D';
        } else {
            return 'E';
        }
    }
}

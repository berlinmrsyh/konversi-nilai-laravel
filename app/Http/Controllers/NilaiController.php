<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        return view('nilai.index');
    }

    public function konversi(Request $request)
    {
        $validatedData = $request->validate([
            'partisipasi' => 'required|numeric|between:0,100',
            'tugas' => 'required|numeric|between:0,100',
            'uts' => 'required|numeric|between:0,100',
            'uas' => 'required|numeric|between:0,100',
        ]);

        $nilaiAkhir = ($validatedData['partisipasi'] * 0.1) +
            ($validatedData['tugas'] * 0.2) +
            ($validatedData['uts'] * 0.3) +
            ($validatedData['uas'] * 0.4);

        $nilaiHuruf = $this->getNilaiHuruf($nilaiAkhir);

        return view('nilai.hasil', [
            'nilaiAkhir' => $nilaiAkhir,
            'nilaiHuruf' => $nilaiHuruf,
        ]);
    }

    private function getNilaiHuruf($nilaiAkhir)
    {
        if ($nilaiAkhir >= 85) {
            return 'A';
        } elseif ($nilaiAkhir >= 80) {
            return 'A-';
        } elseif ($nilaiAkhir >= 75) {
            return 'B+';
        } elseif ($nilaiAkhir >= 70) {
            return 'B';
        } elseif ($nilaiAkhir >= 65) {
            return 'B-';
        } elseif ($nilaiAkhir >= 60) {
            return 'C+';
        } elseif ($nilaiAkhir >= 55) {
            return 'C';
        } elseif ($nilaiAkhir >= 50) {
            return 'C-';
        } elseif ($nilaiAkhir >= 40) {
            return 'D';
        } else {
            return 'E';
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class PembelianController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = new DateTime();
        $hariIni = $date->format('l'); // Mendapatkan nama hari

        return view('project.crud.php.2', compact('hariIni'));
    }

    public function proses(Request $request)
    {
        $request->validate([
            'inputText' => 'required|numeric|min:0',
        ]);
        

        $inputText = $request->input('inputText');
        date_default_timezone_set('Asia/Jakarta');
        $date = new DateTime();
        $waktu = $date->format('l');
        $diskon = 0;

        if ($inputText > 100000 && $waktu === "Tuesday") {
            $diskon = 0.12;
        } elseif ($waktu === "Tuesday") {
            $diskon = 0.05;
        } elseif ($inputText > 100000) {
            $diskon = 0.07;
        }

        $totalSetelahDiskon = $inputText - ($inputText * $diskon);

        return view('project.crud.php.2', [
            'hariIni' => $waktu,
            'totalPembelian' => number_format($inputText, 0, ',', '.'),
            'diskon' => $diskon * 100,
            'totalBayar' => number_format($totalSetelahDiskon, 0, ',', '.'),
        ]);
    }
}

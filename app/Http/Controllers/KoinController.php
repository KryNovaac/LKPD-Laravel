<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KoinController extends Controller
{
    public function index()
    {
        return view('project/crud/php/9');
    }

    public function calculate(Request $request)
    {
        $uang = $request->input('input');
        $coins = $this->cariJenisKoin($uang);

        return view('project/crud/php/9', ['coins' => $coins, 'uang' => $uang]);
    }

    private function cariJenisKoin($jumlahUang)
    {
        $jenisKoin = [];

        if ($jumlahUang >= 1000) {
            $jenisKoin[] = '1.000';
            $jumlahUang -= 1000;
        }
        if ($jumlahUang >= 500) {
            $jenisKoin[] = '500';
            $jumlahUang -= 500;
        }
        if ($jumlahUang >= 200) {
            $jenisKoin[] = '200';
            $jumlahUang -= 200;
        }
        if ($jumlahUang >= 100) {
            $jenisKoin[] = '100';
            $jumlahUang -= 100;
        }

        return $jenisKoin;
    }
}

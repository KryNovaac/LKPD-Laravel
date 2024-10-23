<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialCharacterController extends Controller
{
    public function index()
    {
        return view('project/crud/php/1');
    }

    public function check(Request $request)
    {
        $inputText = $request->input('inputText');
        $matches = [];
        $specialCharacters = preg_match_all('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $inputText, $matches);
        
        if ($specialCharacters > 0) {
            $message = "Karakter yang mengandung simbol: " . implode(", ", $matches[0]);
        } else {
            $message = "Tidak terdapat simbol dalam kalimat.";
        }

        return view('project/crud/php/1', ['message' => $message]);
    }
}

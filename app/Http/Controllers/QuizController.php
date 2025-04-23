<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function submit(Request $request)
    {
        // Validasi agar pilihan tidak kosong
        $request->validate([
            'quiz_option' => 'required',
        ]);

        // Ambil nilai pilihan
        $quizOption = $request->input('quiz_option');

        // Lakukan logika sesuai pilihan yang dipilih
        // Sebagai contoh, bisa mengarahkan ke halaman tertentu:
        return redirect()->route('blank-page'); // Ganti dengan tujuan yang sesuai
    }
}



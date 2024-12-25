<?php

namespace App\Http\Controllers\User;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    public function index()
    {
        // Ambil data film yang sedang tayang
        $movies = Movie::all(); // Atau jika ingin filter film yang tayang, sesuaikan dengan kondisi yang ada

        // Kirim data film ke view
        return view('user.userhome', compact('movies'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about', ['nama' => 'Safitri Herdian R']);
    }

    public function mahasiswa()
    {
        $mahasiswa = DB::table('mahasiswa')->get();

        return view('mahasiswa',['mahasiswa' => $mahasiswa]);
    }
}
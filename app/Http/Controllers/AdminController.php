<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        echo "Hai!.. selamat Datang ";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout >> </a>";
    }

    public function operator(){
        echo "Hai!.. selamat Datang halaman OPERATOR";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout >> </a>";
    }

    public function keuangan(){
        echo "Hai!.. selamat Datang halaman KEUANGAN";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout >> </a>";
    }

    public function marketing(){
        echo "Hai!.. selamat Datang halaman MARKETING";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout >> </a>";
    }
}

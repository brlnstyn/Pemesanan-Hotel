<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        return view('dashboards.users.index');
    }

    function fasilitas()
    {
        return view('dashboards.users.fasilitas');
    }

    function kamar(){
        return view('dashboards.users.kamar');
    }

    function booking(){
        return view('dashboards.users.booking');
    }
}

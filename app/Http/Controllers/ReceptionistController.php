<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceptionistController extends Controller
{
    function index()
    {
        return view('dashboards.receptionist.index');
    }
}

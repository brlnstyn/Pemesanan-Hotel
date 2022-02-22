<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UFasilitasController extends Controller
{
    function index(){
        return view('uFasilitas.index');
    }
}

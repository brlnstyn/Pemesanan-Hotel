<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cetak;

class CetakController extends Controller
{
    function index()
    {
        $cetaks = Cetak::latest()->paginate(1);
        return view('cetaks.index',compact('cetaks'))
            ->with('i', (request()->input('page', 1) - 1) * 1);
    }
}

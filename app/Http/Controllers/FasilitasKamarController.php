<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class FasilitasKamarController extends Controller
{
    public function index()
    {
        $rooms = Room::latest()->paginate(20);
        return view('fasilitasKamar.index', compact('rooms'));
    }
}

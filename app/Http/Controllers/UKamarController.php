<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class UKamarController extends Controller
{
    public function index(){
        $rooms = Room::latest()->paginate(20);
        return view('uKamar.index', compact('rooms'));
    }
}

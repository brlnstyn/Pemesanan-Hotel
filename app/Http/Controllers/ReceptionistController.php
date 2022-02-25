<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReceptionistController extends Controller
{
    function index()
    {
        $reservations = Reservation::latest()->paginate(10);
        return view('dashboards.receptionist.index', compact('reservations'));
    }
}

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
    function filter(Request $request, Reservation $reservation)
    {
        $keyword = $request->filter;
        $reservations = Reservation::where('tgl_check_in', 'like', "%" . $keyword . "%")->paginate(10);
        return view('dashboards.receptionist.index', compact('reservations'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
}

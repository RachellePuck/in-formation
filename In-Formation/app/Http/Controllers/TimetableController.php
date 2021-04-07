<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function home() {
        $shifts = Shift::all();
        return view('home', compact('shifts'));
    }

    public function index() {
        $shifts = Shift::all();
        return view('schedule', compact('shifts'));
    }
}

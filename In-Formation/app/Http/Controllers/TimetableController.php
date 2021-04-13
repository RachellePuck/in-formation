<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimetableController extends Controller
{
    public function home() {
        $shifts = Shift::where('employee_id', '=', Auth::id())->get();
        return view('home', compact('shifts'));
    }

    public function index() {
        $shifts = Shift::where('employee_id', '=', Auth::id())->get();
        return view('schedule', compact('shifts'));
    }
}

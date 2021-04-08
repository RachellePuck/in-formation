<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function trade(Shift $shift) {
        $employees = Employee::all();
        return view('shift.trade', compact('employees', 'shift'));
    }
}

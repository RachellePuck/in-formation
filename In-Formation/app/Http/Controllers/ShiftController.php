<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Shift;
use App\Models\TradeRequest;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function trade(Shift $shift) {
        $employees = Employee::all();
        return view('shift.trade', compact('employees', 'shift'));
    }

    public function tradeRequest(Shift $shift, Employee $employee) {
        $tradeRequest = TradeRequest::firstOrCreate([
            'shift_id' => $shift->id,
            'employee_id' => $employee->id,
            'status' => 1,
        ]);
        return view('shift.traderequest', compact('tradeRequest'));
    }
}

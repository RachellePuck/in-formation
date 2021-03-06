<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Models\TradeRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShiftController extends Controller
{
    public function trade(Shift $shift) {
        $employees = User::all()->where('role', 1)->except(Auth::id());
        return view('shift.trade', compact('employees', 'shift'));
    }

    public function tradeRequest(Shift $shift, User $employee) {
        $tradeRequest = TradeRequest::firstOrCreate([
            'shift_id' => $shift->id,
            'employee_id' => $employee->id,
            'status' => 1,
        ]);
        return view('shift.traderequest', compact('tradeRequest'));
    }
}

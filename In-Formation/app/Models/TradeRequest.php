<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'shift_id',
        'employee_id',
        'status',
    ];

    const STATUS = [
        1 => 'Pending',
        2 => 'Accepted',
        3 => 'Rejected'
    ];

    public function shift() {
        return $this->belongsTo(Shift::class);
    }

    public function employee() {
        return $this->belongsTo(User::class);
    }
}

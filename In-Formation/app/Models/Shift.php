<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Shift extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time',
        'end_time',
        'employee_id',
        'department',
    ];

    public function employee() {
        return $this->hasOne(User::class, 'employee_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shift;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'user_id',
    ];

    public function shifts() {
        return $this->hasMany(Shift::class);
    }

    public function getFullNameAttribute() {
        $full_name = $this->first_name . " " . $this->last_name;
        return $full_name;
    }
}

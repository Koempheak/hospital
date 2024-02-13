<?php

namespace App\Models;

use App\Models\Appointment;
use App\Models\Receptionist;
use Psy\CodeCleaner\ReturnTypePass;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diseas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function receptionistes()
    {
        return $this->hasMany(Receptionist::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}

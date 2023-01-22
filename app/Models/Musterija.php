<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Frizer;
use App\Models\Termin;

class Musterija extends Model
{
    use HasFactory;

    public function frizer()
    {
        return $this->belongsTo(Frizer::class);
    }

    public function termini()
    {
        return $this->hasMany(Termin::class);
    }
}

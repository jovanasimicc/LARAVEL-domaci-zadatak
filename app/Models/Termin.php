<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Frizer;
use App\Models\Musterija;

class Termin extends Model
{
    use HasFactory;

    public function frizer()
    {
        return $this->belongsTo(Frizer::class);
    }

    public function musterija()
    {
        return $this->belongsTo(Musterija::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Musterija;
use App\Models\Termin;

class Frizer extends Model
{
    use HasFactory;



    public function musterije()
    {

        return $this->hasMany(Musterija::class);
    }


    public function termini()
    {

        return $this->hasMany(Termin::class);
    }
}

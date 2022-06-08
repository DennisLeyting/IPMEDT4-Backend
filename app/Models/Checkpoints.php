<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkpoints extends Model
{
    use HasFactory;

    public function WelkeActiviteit(){
        return $this->belongsTo('\App\Models\Activiteit', 'activiteitID', 'activiteitID')
    }

    public function WelkeRoute(){
        return $this->belongsTo('\App\Models\Routes', 'routenummer', 'routenummer')
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activiteit extends Model
{

    protected $table = "activiteit";

    public function AllCheckpoints(){
        return $this->hasMany('\App\Models\Checkpoints', 'activiteitID', 'activiteitID');
    }

    public function ActiviteitSoort() {
        return $this->belongsTo('\App\Models\Soortenactiviteiten', 'soort_activiteit', 'naam');
    }
}

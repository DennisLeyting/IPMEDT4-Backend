<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activiteit extends Model
{
    use HasFactory;

    protected $table = "Activiteit";

    public function AllCheckpoints(){
        return $this->hasMany('\App\Models\Checkpoints', 'activiteitID', 'activiteitID');
    }

    public function ActiviteitSoort() {
        return $this-belongsTo('\App\Models\soorten_activiteiten', 'soort_activiteit', 'naam');
    }
}

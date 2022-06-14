<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    protected $table = "routes";
    
    public function WelkeGebruiker(){
        return $this->belongsTo('\App\Models\Routes', 'creatorID', 'id');
    }

    public function AllCheckpoints(){
        return $this->hasMany('\App\Models\Checkpoints', 'routenummer', 'routenummer');
    }

    public function WelkeMoeilijkheid(){
        return $this->belongsTo('\App\Models\Routes', 'moeilijkheidsniveau', 'niveau');
    }
}

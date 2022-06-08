<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soortenactiviteiten extends Model
{
    protected $table = "soorten_activiteiten";
    
    public function AllActiviteiten(){
        return $this->hasMany('\App\Models\Activiteit', 'soort_activiteit', 'naam');
    }
}

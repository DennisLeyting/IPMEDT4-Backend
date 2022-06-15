<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gebruiker;

class GebruikerController extends Controller
{
    public function index(){
        return Gebruiker::all();
    }
}

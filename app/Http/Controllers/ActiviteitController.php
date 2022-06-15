<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activiteit;

class ActiviteitController extends Controller
{
    public function index(){
        return Activiteit::all();
    }
}

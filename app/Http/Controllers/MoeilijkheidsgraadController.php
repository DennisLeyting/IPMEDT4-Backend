<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moeilijkheidsgraad;


class MoeilijkheidsgraadController extends Controller
{
    public function index(){
        return Moeilijkheidsgraad::all();
    }
}

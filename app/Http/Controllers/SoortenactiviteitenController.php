<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soortenactiviteiten;


class SoortenactiviteitenController extends Controller
{
    public function index(){
        return Soortenactiviteiten::all();
    }
}

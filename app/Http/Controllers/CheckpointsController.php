<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkpoints;

class CheckpointsController extends Controller
{
    public function index(){
        return Checkpoints::all();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkpoint;

class CheckpointController extends Controller
{
    public function index(){
        return Checkpoint::all();
    }
    public function addCheckpoint(Request $request) {

        // verander deze waardes op basis van je eigen informatie
        // anders gaat het niet werken
        $servername = "localhost";
        $username = "laravel";
        $password = "laravel";
        $dbname = "ipmedt4";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        
        //prepare the insert into statement with variables that we can change
        $stmt = $conn->prepare("INSERT INTO checkpoints (
            routename,
            pointnumber,
            latitude,
            longitude,
            activity_title,
            activity_header,
            activity_awnser

        ) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", 
            $routename, 
            $pointnumber,
            $latitude,
            $longitude,
            $activity_title,
            $activity_header,
            $activity_awnser
        );

        $routename = $request->input('routename');
        $pointnumber = $request->input('pointnumber');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $activity_title = $request->input('activity_title');
        $activity_header = $request->input('activity_header');
        $activity_awnser = $request->input('activity_awnser');

        $stmt->execute();

        return redirect('http://localhost:3000/create/'.$routename.'/'.$pointnumber);
    }
}
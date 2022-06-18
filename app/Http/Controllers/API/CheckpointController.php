<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testaddgebruikerController extends Controller
{
    public function addingGebruiker(Request $request) {

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
            Longitude,
            activity_title,
            activity_header,
            activity_awnser,
            activity_false1,
            activity_false2,
            activity_false3
        
        ) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", 
            $routename, 
            $pointnumber, 
            $latitude, 
            $Longitude,
            $activity_title,
            $activity_header,
            $activity_awnser,
            $activity_false1,
            $activity_false2,
            $activity_false3
        );

        $routename = $request->input('routename');
        $pointnumber = $request->input('pointnumber');
        $latitude = $request->input('latitude');
        $Longitude = $request->input('Longitude');
        $activity_title = $request->input('activity_title');
        $activity_header = $request->input('activity_header');
        $activity_awnser = $request->input('activity_awnser');
        $activity_false1 = $request->input('activity_false1');
        $activity_false2 = $request->input('activity_false2');
        $activity_false3 = $request->input('activity_false3');

        $stmt->execute();

        return redirect()->back();
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routes;


class RoutesController extends Controller
{
    public function index(){
        return Routes::all();
    }
    public function addRoute(Request $request) {

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
        $stmt = $conn->prepare("INSERT INTO routes (
            routename,
            regio

        ) VALUES (?, ?)");
        $stmt->bind_param("ss", 
            $routename, 
            $regio
        );

        $routename = $request->input('routename');
        $regio = $request->input('regio');

        $stmt->execute();

        return redirect('http://localhost:3000/create/'.$routename.'/0');
    }
}

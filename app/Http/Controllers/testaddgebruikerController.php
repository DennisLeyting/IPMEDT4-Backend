<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testaddgebruikerController extends Controller
{
    public function addingGebruiker(Request $request) {

        $servername = "localhost";
        $username = "jad";
        $password = "jad";
        $dbname = "ipmedt4";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        
        //prepare the insert into statement with variables that we can change
        $stmt = $conn->prepare("INSERT INTO gebruiker (voornaam, achternaam, email, woonplaats) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $voornaam, $achternaam, $email, $woonplaats);

        $voornaam = $request->input('voornaam');
        $achternaam = $request->input('achternaam');
        $email = $request->input('email');
        $woonplaats = $request->input('woonplaats');

        $stmt->execute();

        return redirect()->back();
    }
}

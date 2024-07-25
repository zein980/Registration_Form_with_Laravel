<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getID($month, $day)
    {
        $curl = curl_init();
    
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=" . $month . "&day=" . $day,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
                "X-RapidAPI-Key: fd5f795acfmshd0cfd0f6654c66dp13fbcbjsn6d16f3818802"


            ],
        ]);
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
    
        curl_close($curl);
    
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            
            return $response;
    
        }
    }
    
    public function getName($code)
    {
        $curl = curl_init();
    
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst=" . $code,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
                "X-RapidAPI-Key: fd5f795acfmshd0cfd0f6654c66dp13fbcbjsn6d16f3818802"

            ],
        ]);
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
    
        curl_close($curl);
    
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
    


    public function API(Request $request)
{   
    
    
    $k = $request->input('q');

    $month = date("m", strtotime($k));
    $day = date("d", strtotime($k));
    
    
    $response = $this->getID($month, $day);
    
    $response = substr($response, 1, strlen($response) - 1);
    
    $array = explode(",", $response);
    
    for ($i = 0; $i < sizeof($array); $i++) {
        $array[$i] = substr($array[$i], 7, 9); 
        
    }
    
    for ($i = 0; $i < sizeof($array); $i++) {
        
        $str = $this->getName($array[$i]);
        $x = strpos($str, '"name":"');
        $y = strpos($str, '"birthDate":');
        $result_array[$i] = substr($str, $x + 8, $y - $x - 10);
        usleep(3000);
    }
    
    for ($i = 0; $i < sizeof($result_array); $i++) {
        echo $result_array[$i] . " ,";
    }




}



}

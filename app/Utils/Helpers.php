<?php

    //Helper method to call api from anywhere in the project
    function callAPI($method, $url, $data = false){
        //Currently only handles get method
        $curl = curl_init();

        switch ($method)
        {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
    
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }
    
        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); 

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    
        $result = curl_exec($curl);
        curl_close($curl);
    
        return $result;
    }

    //Get full Zipcode api url
    function getZipcodeURL($zip1, $zip2, $distance){

        $zip1 = fixZipCode($zip1);
        $zip2 = fixZipCode($zip2);
        $api = $_ENV["ZIPCODE_API_KEY"];
        $url = "http://www.zipcodeapi.com/rest/{$api}/match-close.json/{$zip1},{$zip2}/{$distance}/mile";

        return $url;
    }

    //Fill 0 in front of zipcodes that isn't 5 numbers long
    function fixZipCode($zipcode){
        $updatedZip = strval($zipcode);
        while(strlen($updatedZip) < 5){
            $updatedZip = "0$updatedZip";
        }

        return $updatedZip;
    }
?>
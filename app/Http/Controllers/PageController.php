<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zipcode;

class PageController extends Controller
{
    //
    function main(){
        return view('pages.main');
    }

    function query(){
        return view('pages.query', ['error' => false, 'data' => null]);
    }

    function queryAPI(Request $req){
        
        if ($req->distance && $req->zip1 && $req->zip2){
            $url = getZipCodeURL($req->zip1,$req->zip2,$req->distance);
            $res = callAPI("GET", $url);

            return view("pages.query", ['error' => false, 'data' => json_decode($res)]);
        }
        else return view("pages.query", ['error' => true, 'data' => null]);
    }

    function search(Request $req){
        $query = $req->query();
        if (!$query){
            return view('pages.search', ['zipcodes' => []]);
        }
        else {
            //Parse query string 
            $zipcodes = Zipcode::where($query)->get();
            return view('pages.search', ['zipcodes' => $zipcodes]);
        }
        return view('pages.search', ['zipcodes' => []]);
    }

    function searchDB(Request $req){
        $queries = Array();
        if ($req->zip){
            $queries["ZipCode"] = $req->zip;
        }

        if ($req->city){
            $queries["MixedCity"] = $req->city;
        }

        if ($req->state && $req->state != "ANY"){
            $queries["StateCode"] = $req->state;
        }

        //print_r($queries);
        
        return redirect()->route('search', $queries);
    }

}

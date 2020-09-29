<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

            //print_r($res);
            return view("pages.query", ['error' => false, 'data' => json_decode($res)]);
        }
        else return view("pages.query", ['error' => true, 'data' => null]);
    }

    function search(){
        return view('pages.search');
    }

}

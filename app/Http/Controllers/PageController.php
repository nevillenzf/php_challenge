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
        return view('pages.query');
    }

    function search(){
        return view('pages.search');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class FileController extends Controller
{
    //
    public function parseFile(Request $req){
        $file = $req->file();
        $allowed = array('csv', 'xml');
        //make sure that there's a file
        if (!$file){
            return view("pages.main");
        }


        $ext = pathinfo($file["zipcodes"]->getClientOriginalName(), PATHINFO_EXTENSION);
        header('Refresh: 3;url=/');
        
        //echo $ext;
        if ($ext == $allowed[0] || $ext == $allowed[1]){
            print_r($_ENV);
        }
        else {
            print_r($_ENV);
        }
        echo "Redirecting to Main Page in 3 seconds...";

    }

    private function addFileContent(){

    }
}

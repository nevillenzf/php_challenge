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
            return back();
            //return redirect()->route("main") //WORKS TOO
        }


        //$ext = pathinfo($file["zipcodes"]->getClientOriginalName(), PATHINFO_EXTENSION);
        $ext = $file["zipcodes"]->extension();
        
        header('Refresh: 3;url=/');
        
        //echo $ext;
        if ($ext == $allowed[0] || $ext == $allowed[1]){
            print_r($ext);
        }
        else {
            print_r($ext);
        }
        echo "Redirecting to Main Page in 3 seconds...";

    }

    private function addFileContent(){

    }
}

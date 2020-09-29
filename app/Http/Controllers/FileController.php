<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Zipcode;

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

        $ext = pathinfo($file["zipcodes"]->getClientOriginalName(), PATHINFO_EXTENSION);
        //$ext = $file["zipcodes"]->extension();

        //Return to main page after upload success/ fail.
        header('Refresh: 3;url=/');

        
        //echo $ext;
        if ($ext == $allowed[0]){
            //Parse Csv to an array
            $data = $this->csvToArray($file["zipcodes"]);
            foreach ($data as $row){
                //Check if exist in table, if not, insert into table
                $item = Zipcode::firstOrNew(
                    ["ZipCode" => $row["ZipCode"]]
                );
                $item->City = $row["City"];
                $item->MixedCity = $row["MixedCity"];
                $item->StateCode = $row["StateCode"];

                $item->County = $row["County"];
                $item->MixedCounty = $row["MixedCounty"];
                if (!$row["StateFIPS"]){
                    $item->StateFIPS = null;
                }
                else {
                    $item->StateFIPS = $row["StateFIPS"];
                }

                if (!$row["CountyFIPS"]){
                    $item->CountyFIPS = null;
                }
                else {
                    $item->CountyFIPS = $row["CountyFIPS"];
                }

                $item->Latitude = $row["Latitude"];
                $item->Longitude = $row["Longitude"];
                $item->GMT = $row["GMT"];
                if ($row["DST"] == "Y"){
                    $item->DST = true;
                }
                else {
                    $item->DST = false;
                }
    
                $item->save();
            };

            print_r("ok cool");
        }
        else if ($ext == $allowed[1]){
            //Parse xml to an array
            //$data = $this->namespacedXMLToArray($file["zipcodes"]);
            print_r("donions");
        }
        else {

            return view("pages.redirect", ["failed" => true]);
        }
        
        return view("pages.redirect");

    }

    private function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }

    private function namespacedXMLToArray($xml)
    {
        // One function to both clean the XML string and return an array
        return json_decode(json_encode(simplexml_load_string(file_get_contents($xml))), true);
    }

    private function addFileContent(){

    }
}

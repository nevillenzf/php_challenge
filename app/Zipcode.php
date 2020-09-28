<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zipcode extends Model
{
    //table
    protected $table = 'zipcodes';
    //primary key
    protected $primaryKey = 'ZipCode';
    //timestamp
    public $timestamps = false;
}

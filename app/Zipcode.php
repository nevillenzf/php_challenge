<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zipcode extends Model
{
    //table used
    protected $table = 'zipcodes';

    //primary key
    protected $primaryKey = 'ZipCode';
    public $incrementing = false;

    //allows mass insertion
    protected $fillable = array('ZipCode', 'MixedCity');

    //timestamp
    public $timestamps = false;
}

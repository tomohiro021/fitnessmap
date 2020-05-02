<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    // public $timestamps = false; //timesatampを利用しない
    protected $fillable = [
        'id', 'name', 'zip_code', 'address1', 'address2', 'lat', 'lng',
        'summary', 'detail', 'created_at', 'updated_at'];
    protected $table = 'gyms';
}

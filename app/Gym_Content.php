<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gym_Content extends Model
{
    protected $fillable = [
        'id', 'gym_id', 'user_id', 'name', 'zip_code', 'address', 'address1',
        'address2', 'lat', 'lng','summary', 'detail', 'status',
        'created_at', 'updated_at'];
    protected $table = 'gym_contents';
}

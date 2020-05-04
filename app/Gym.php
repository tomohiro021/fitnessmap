<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    protected $fillable = [
        'id', 'gym_content_id', 'publication_status', 'created_at', 'updated_at'];
    protected $table = 'gyms';
}

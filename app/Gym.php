<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Enums\PublictaionStatus;

class Gym extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'publication_status',
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'publication_status' => 'int',
    ];
    
    protected $enumCasts = [
        'publication_status' => PublicationStatus::class,
    ];
}

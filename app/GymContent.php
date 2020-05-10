<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use BenSampo\Enum\Traits\CastsEnums;
use App\Enums\Status;

class GymContent extends Model
{
    use Notifiable;
    use CastsEnums;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'gym_id', 'user_id', 'name', 'zip_code', 'address', 'address1',
        'address2', 'lat', 'lng','summary', 'detail', 'status',
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'int',
    ];
    
    protected $enumCasts = [
        'status' => Status::class,
    ];
}

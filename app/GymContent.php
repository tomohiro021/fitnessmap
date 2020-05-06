<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use BenSampo\Enum\Traits\CastsEnums;
use App\Enums\Status;

class GymContent extends Model
{
    protected $fillable = [
        'id', 'gym_id', 'user_id', 'name', 'zip_code', 'address', 'address1',
        'address2', 'lat', 'lng','summary', 'detail', 'status',
        'created_at', 'updated_at'];
    protected $table = 'gym_contents';
    
    protected $attributes = [
    "status" => "(0)",
    ];
    
    use CastsEnums;
    
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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use BenSampo\Enum\Traits\CastsEnums;
use App\Enums\Status;
use App\Enums\Address;
use App\User;
use App\Gym;
use App\Keyword;

class GymContent extends Model
{
    use CastsEnums;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gym_id', 'user_id', 'name', 'zip_code', 'address', 'address1',
        'address2', 'lat', 'lng','summary', 'detail', 'status',
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'int',
        'address' => 'int',
    ];
    
    protected $enumCasts = [
        'status' => Status::class,
        'address' => Address::class,
    ];
    
    public function gym()
    {
        return $this->belongsTo(Gym::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'keyword_gym_content');
    }
}

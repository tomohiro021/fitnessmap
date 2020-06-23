<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use BenSampo\Enum\Traits\CastsEnums;
use Illuminate\Support\Facades\DB;
use App\GymContent;

class Keyword extends Model
{
    use CastsEnums;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'keywords',
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];
    
    protected $enumCasts = [
    ];
    
    public function gymContents()
    {
        return $this->belongsToMany(GymContent::class, 'keyword_gym_content');
    }
}

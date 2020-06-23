<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use BenSampo\Enum\Traits\CastsEnums;
use App\Enums\PublicationStatus;
use App\Enums\Status;
use App\GymContent;
use Illuminate\Support\Facades\Auth;


class Gym extends Model
{
    use CastsEnums;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
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
    
    public function gymContents()
    {
        return $this->hasMany(GymContent::class);
    }
    
    public function publicatedGymContent()
    {
        return $this->gymContents()->where('gym_contents.status', Status::Approved)->orderByRaw('gym_contents.updated_at DESC')->first();
    }
    
    public function noapprovedGymContent()
    {
        $user_id = Auth::id();
        
        return $this->gymContents()->where('gym_contents.user_id', $user_id)
        ->where('gym_contents.status', [
            Status::Editting,
            Status::Applying,
        ])
        ->orderByRaw('gym_contents.updated_at DESC')
        ->first();
    }
}

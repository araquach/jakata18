<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class CampaignRespondant extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];

    public function campaign()
    {
        return $this->hasOne('App\Campaign');
    }
}

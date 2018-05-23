<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Campaign extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];

    protected $with = ['respondants'];

    public function respondants()
    {
        return $this->hasMany('App\CampaignRespondant');
    }
}

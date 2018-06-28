<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premiums extends Model
{
    public $table = "premiums";
    protected $fillable = ['insurance_company','date','policy_number','premium','expiry_date','agent_id','client_id'];

//    protected $dates = ['date'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function client()
    {
        return $this->belongsTo('App\Client');
    }
}

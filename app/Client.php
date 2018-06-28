<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    public $table = "clients";
    protected $fillable = ['first_name','last_name','email','phone','insurance_company','policy_type','date','duration','policy_number','premium','sum_insured','expiry_date','agent_id'];

//    protected $dates = ['date'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

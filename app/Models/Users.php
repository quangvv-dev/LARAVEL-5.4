<?php

namespace App\Models;
use App\Models\Teams;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table 		= 'user';
    protected $fillable 	= ['name','email','email_personal','password','remember_token','image','gender','date_of_birth','identify_id','phone_number','current_address','permanent_addres','graduate_from','salary','bank_account_number','hobby','family_description','language_skills','leave_days','role_id','team_id','status'];
    public $timestamps 		= false;
    public function comments()
    {
        return $this->belongsTo(Teams::class,'team_id','id');
    }
}

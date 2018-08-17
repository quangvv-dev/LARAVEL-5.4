<?php

namespace App\Models;
use App\Models\Users;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $table 		= 'teams';
    protected $fillable 	= ['name','description','logo','leader'];
    public $timestamps 		= false;

    public function TeamRelationship()
    {
        return $this->hasMany(Users::class,'teams_id');
    }
}

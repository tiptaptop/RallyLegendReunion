<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{

    protected $fillable = ['titre','contenu','user_id'];

	public function user() 
	{
		return $this->belongsTo('App\User');
	}

}

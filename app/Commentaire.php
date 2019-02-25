<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table = "commentaire";
    public timestamps = false; 

    public function photo()
    {
        return $this->belongsTo('App\Photo', 'idPhoto');
    }

    public function posts()
    {
        return $this->belongsTo('App\Posts', 'idPosts');
    }
    public function users()
    {
        return $this->belongsTo('App\User', 'idUser');
    }
    
}

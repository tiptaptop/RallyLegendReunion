<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = "photo"; 


    public function users()
    {
        return $this->belongsTo('User', 'idUser');
    }

    public function commentaire()
    {
        return $this->hasMany('Commentaire');
    }

    public function evenement()
    {
        return $this->belongsTo('Evenement', 'idEvenement');
    }

}

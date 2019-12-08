<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = 'atsiliepimai';

    protected $fillable = ['id', 'zvaigzdutes', 'komentaras', 'data', 'knyga', 'vardas'];

    public $timestamps = false;

    public function book(){

        return $this->belongsTo('App\Books', 'knyga');

    }
}

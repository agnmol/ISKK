<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BooksGroups extends Model
{
    protected $table = 'knygos_grupes';

    protected $fillable = ['grupe', 'knyga'];

    public $timestamps = false;
   // protected $primaryKey = ['grupe', 'knyga'];
    protected $primaryKey = 'knyga';

    public function books(){

            return $this->belongsTo('App\Books', 'knyga');

    }
    public function group(){

        return $this->belongsTo('App\Groups', 'grupe');

    }
}

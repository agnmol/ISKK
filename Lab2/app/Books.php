<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'knygos';

    protected $fillable = ['id', 'pavadinimas', 'aprasymas', 'data', 'puslapiai', 'autorius'];

    public $timestamps = false;

    public function booksGroups()
    {
        return $this->hasMany('App\BooksGroups', 'knyga');
    }

    public function reviews()
    {
        return $this->hasMany('App\Reviews', 'knyga');
    }

    public function author(){

        return $this->belongsTo('App\Authors', 'autorius');

    }

}

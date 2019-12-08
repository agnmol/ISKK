<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $table = 'grupes';
    protected $fillable = ['id', 'pavadinimas'];



    public $timestamps = false;

    public function booksGroups()
    {
        return $this->hasMany('App\BooksGroups', 'grupe');
    }
}

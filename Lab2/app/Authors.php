<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    protected $table = 'autoriai';

    protected $fillable = ['id', 'vardas_pavarde'];

    public $timestamps = false;

    public function books()
    {
        return $this->hasMany('App\Books', 'autorius');
    }
}

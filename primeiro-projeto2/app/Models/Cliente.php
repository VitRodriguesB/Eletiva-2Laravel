<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $teble = "clientes";
    public $increment = true;

    protected $fillable= ['nome', 'email'];

}

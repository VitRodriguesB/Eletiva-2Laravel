<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "clientes";
    public $incrementing = true;

    protected $fillable = ['nome', 'email', 'cateoria_id'];

    public function categoria(){
        return $this ->belongsTo(Categoria::class,'categoria_id', 'id');
    }

}

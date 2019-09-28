<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table="articles";
    protected $connection="pgsql";

    public function resources(){
      return $this->hasMany(Resouces::class,'article_id','id');
      //relación de articulo con resources
      //retorna la colección
    }
}
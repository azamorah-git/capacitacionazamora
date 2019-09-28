<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    protected $table="resources";
    protected $connection="pgsql";

    public function article(){
        return $this->belongTo(Article::class,'article_id','id');
        //Aqui relacion que un articulo va a tener muchos recursos
    }
}

<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Request;
use Illuminate\Database\Eloquent\Model;

class MdPrincipal extends Model
{
    public function CarregaLista(){

        $db = DB::select("select * from eventos order by id desc limit 20 offset 0");

        return $db;   
    }

    public function ListaAcrescentada($limite){

        $db = DB::select("select * from eventos order by id desc limit 20 offset $limite");

        return $db;
    }

    public function quantidadeDados(){

        $db = DB::select("select count(id) as contar from eventos");

        return $db;   
    }

    public function Search($where, $limite){

        $db = DB::select("select * from eventos where id like '%$where%' or nome like '%$where%' order by id desc ");

        return $db;
    }
}

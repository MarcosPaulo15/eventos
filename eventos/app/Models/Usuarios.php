<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Request;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
     protected $fillable = ['id, nome, telefone, email, usuario, senha, ativos'];

     public function getId($value){

        return ucfirst($value);
    }

    public function setId($value){

        $this->attributes['id'] = strtolower($value);
    }

    public function getNome($value){

        return ucfirst($value);
    }

    public function setNome($value){

        $this->attributes['nome'] = strtolower($value);
    }

    public function getTelefone($value){

        return ucfirst($value);
    }

    public function setTelefone($value){

        $this->attributes['telefone'] = strtolower($value);
    }
    public function getEmail($value){

        return ucfirst($value);
    }

    public function setEmail($value){

        $this->attributes['email'] = strtolower($value);
    }

    public function getUsuario($value){

        return ucfirst($value);
    }

    public function setUsuario($value){

        $this->attributes['usuario'] = strtolower($value);
    }

    public function getSenha($value){

        return ucfirst($value);
    }

    public function setSenha($value){

        $this->attributes['senha'] = strtolower($value);
    }

    public function getAtivo($value){

        return ucfirst($value);
    }

    public function setAtivo($value){

        $this->attributes['ativo'] = strtolower($value);
    }

    public function verificaUser($user, $pass){

        $eventos = DB::select("select id, nome, usuario, senha from usuarios where usuario = '$user' and senha = MD5('$pass')");
        
        //return DB::table('usuarios') ->where('usuario', $user) ->where(DB::raw('MD5(senha)'), MD5($pass)) ->first();
        return $eventos;
    }

    public function LoadAllUsers(){

        $bd = DB::select("select * from usuarios where ativos = 'S' order by nome asc");

        return $bd;
    }

    


}

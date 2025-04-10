<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Request;
use Illuminate\Database\Eloquent\Model;

class MdNewUser extends Model
{
    private $id;
    private $nome;
    private $telefone; 
    private $email;
    private $usuario;
    private $senha;
    private $ativo;


    public function get_id(){

        return $this->$id;
    }

    public function set_id($id){

        $this->id = $id;
    }

    public function get_nome(){

        return $this->nome;
    }

    public function set_nome($nome){

        $this->nome = $nome;
    }

    public function get_telefone(){

        return $this->telefone;
    }

    public function set_telefone($telefone){

        $this->telefone = $telefone;
    }

    public function get_email(){

        return $this->email;
    }

    public function set_email($email){

        $this->email = $email;
    }

    public function get_usuario(){

        return $this->usuario;
    }

    public function set_usuario($usuario){

        $this->usuario = $usuario;
    }

    public function get_senha(){

        return $this->senha;
    }

    public function set_senha($senha){

        $this->senha = $senha;
    }
    public function get_ativo(){

        return $this->ativo;
    }

    public function set_ativo($ativo){

        $this->ativo = $ativo;
    }

    public function Insert() {

        $nome = $this->get_nome();
        $telefone = $this->get_telefone();
        $email = $this->get_email();
        $usuario = $this->get_usuario();
        $senha = $this->get_senha();
        $ativo = $this->get_ativo();

        $query = " insert into usuarios values(NULL, '$nome', '$telefone', '$email', '$usuario', MD5('$senha'), '$ativo')";

        DB::statement($query);

        return redirect()->back()->with('success', 'Query executada com sucesso!');
    }
}

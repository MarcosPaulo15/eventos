<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MdNewUser;
use App\Models\MdPrincipal;
use Illuminate\Support\Facades\DB;

class CtNewUser extends Controller
{

    public function NewUSer(){
    
        if(isset($_POST['btnInsert'])){

            $md = new MdNewUser(); 

            $md->set_nome(isset($_POST['nome']) ? $_POST['nome'] :  'NULL');
            $md->set_telefone(isset($_POST['telefone']) ? $_POST['telefone'] : 'NULL');
            $md->set_email(isset($_POST['email']) ? $_POST['email'] : 'NULL');
            $md->set_usuario(isset($_POST['user']) ? $_POST['user'] : 'NULL');
            $md->set_senha(isset($_POST['senha']) ? $_POST['senha'] : 'NULL');
            $md->set_ativo(isset($_POST['ckbAtivo']) ? 'S' : 'N');

            if($md->Insert()){

                echo "<script>alert('Inserido com sucesso!')</script>";

                return redirect()->route('novo_evento.principal');
                exit();
            }
            else{

                echo "<script>alert('Falha ao inserir, favor procure o administrador do sistema!')</script>";

            }

        }
        else if(isset($_POST['btnNewVoltar'])){

            return redirect()->route('novo_evento.principal');
            exit();
            
        }

        return view('newUSer');
    }
}
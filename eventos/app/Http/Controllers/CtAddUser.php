<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Usuarios;
use App\Models\MdCriar;
use Illuminate\Support\Facades\DB;

class CtAddUser extends Controller
{

    public function Initialize($id){

        $md = new Usuarios();
        $mdEvent = new MdCriar();

        $user = Request::input('user_id');
        $perfil = Request::input('usrPerfil');

        $resultEvent = $mdEvent->LoadData($id);
        $result = $md->LoadAllUsers();

        if(isset($_POST['btnAddUserEv'])){

            if($user == '0' || $perfil == '0'){

                echo "<script>alert('Favor preencher campo usuário e perfil!') </script>";
            
            }
            else if(count($mdEvent->VerificaDados($user, $id)) == 0 ){

                if($mdEvent->InsertUserEvent($user, $id, $perfil)){

                    echo "<script>alert('SUCESSO : Usuário inserido no evento!') </script>";
                }
                else{
                    echo "<script> alert('Falha ao inserir!) </script>";
                }
            }
            else {

                echo "<script>alert('Usuário já inserido neste evento!') </script>";
            } 
        }
        else if(isset($_POST['btnBackEv'])){

            return view('seeScreen', ['result' => $resultEvent, 'id' => $id]);
        }

        return view('addUserEvent', ['result' => $result, 'resultEvent' => $resultEvent, 'id' => $id]);
    }
    
}
<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Usuarios;
use App\Models\MdPrincipal;
use Illuminate\Support\Facades\DB;

class CtLogin extends Controller
{

    public function exibeIndex(){
        session_start();

        $login = Request::input('usuario');
        $senha = Request::input('senha');
        

        $usuarioModel = new Usuarios; 
        $usuarioVerificado = $usuarioModel->verificaUser($login, $senha);

        foreach($usuarioVerificado as $p){

            $_POST['id'] = $p->id;
        }
        //$verificaUsu = $p->id;
        
        if(isset($_POST['btn-acess'])){
            if(count($usuarioVerificado) > 0) {

                $lista = new MdPrincipal;     
                

                $verificaUsu = $p->id;


                if($verificaUsu == 531 || $verificaUsu == 545){

                    $result = $lista->CarregaLista(); 
                    $numeroLista = $this->contarLista();  
                    
                    $_SESSION['teste'] = $verificaUsu;

                    //return view('principal', ['result' => $result, 'numeroLista' => $numeroLista])->with('result', $result);
                    //return view('novo_evento/principal', ['result' => $result, 'numeroLista' => $numeroLista]);
                    return redirect()->route('novo_evento.principal');
                    exit();
                }                
            }
            else {
                echo "<script>alert('Usuário ou senha incorretos, favor digite novamente!') </script>";
            }
        }
        

        return view('login');
    }
 
    public function ValidaLogin(){

        $result = new Usuarios; 
        $teste = $result->verificaUser($login, $senha);
        if($teste > 0) {
            
            return redirect()->route('principal')->with('success', 'Login bem-sucedido!');
        }
        else {
            echo "<script>alert('Usuário ou senha incorretos, favor digite novamente!') </script>";
        }
       
    }

    public function contarLista(){

        $query = DB::select('select count(id) as contar from eventos');

        foreach($query as $p){

        }
        $valor = $p->contar;

        $result = intdiv($valor, 20);

        return $result; 
    }
  
}

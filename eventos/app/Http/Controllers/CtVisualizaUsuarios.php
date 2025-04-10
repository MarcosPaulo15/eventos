<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MdCriar;
use Illuminate\Support\Facades\DB;

class CtVisualizaUsuarios extends Controller
{

    public function CarregaDadosVisualiza($id){

        $md = new MdCriar();

        $result = $md->LoadData($id);

        $resultado = $md->VerificaUsuariosEvento($id);

        $evento = $md->RetornaEvento($id);

        if(isset($_POST['btnVoltarUsu'])){

            return view('seeScreen', ['result' => $result, 'id' => $id]);

        }
        
        return view('VizualizaUsuario', ['resultado' => $resultado, 'id' => $id, 'nome' => $evento]);
    }

}
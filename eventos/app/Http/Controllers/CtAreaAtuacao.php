<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Usuarios;
use App\Models\MdCriar;
use Illuminate\Support\Facades\DB;

class CtAreaAtuacao extends Controller
{

    public function CarregaDadosArea($id){

        $area = Request::input('area');


        $md = new MdCriar();

        if(isset($_POST['btnArea'])){

            if($md->InsertArea($area)){

                if($md->PegaUltimaArea($id)){
    
                    echo "<script>alert('Evento inserido com sucesso!')</script>";
    
                }
                else{
    
                    echo "<script>alert('Falha ao inserir evento - linha 29!')</script>";
                }
            }
            else{
    
                echo "<script>alert('Falha ao inserir evento - linha 35!')</script>";
            }
        }
        else if(isset($_POST['btnVoltarArea'])){

            $result = $md->LoadData($id);
            return view('seeScreen', ['result' => $result, 'id' => $id]);

        }

        return view('areaAtuacao', [ 'id' => $id]);
    }
}
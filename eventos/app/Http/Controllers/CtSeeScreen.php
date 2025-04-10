<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MdCriar;
use Illuminate\Support\Facades\DB;

class CtSeeScreen extends Controller
{

    public function CarregaDadosSee($id){


        $bd = new MdCriar();

        $result = $bd->LoadData($id);

        $nome = $bd->nome;
        $email = $bd->email_organizador;

        return view('seeScreen', ['result' => $result, 'id' => $id]);

    }
    
}
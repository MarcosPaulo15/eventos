<?php

namespace App\Http\Controllers;

use Request;
use App\Models\MdNewPalestra;
use App\Models\MdCriar;
use Illuminate\Support\Facades\DB;

class CtNewPalestra extends Controller
{
    
    public function CarregaDadosPalestra($id){

        $md = new MdNewPalestra();

        if(isset($_POST['btnConfirm'])){

            $cmbTipo = Request::input('cmbTipo');
            if($cmbTipo == '0'){

                echo '<script>alert("Favor preencher o campo Tipo de palestra");</script>';
            }
            else if($this->validaData()){

                //dados que vai para a tabela palestrantes
                $titulacao = Request::input('titulacao');
                $nome = Request::input('nome');
                $apresentacao = Request::input('apresentacao');
                
                //dados que vão para a tabela palestras
                
                $palestra = Request::input('nomePalestra');
                $dataPalestra = Request::input('dataPalestra');
                $horaInicio = Request::input('horaInicio');
                $horaIntervalo = Request::input('horaIntervalo');
                $horaTermino = Request::input('horaTermino');
                $local = Request::input('local');
                $qtdVagas = Request::input('qtdVagas');
                $resumo = Request::input('resumo');

                
                if($md->InsertPalestrante($titulacao, $nome, $apresentacao)){

                    if($md->InsertPalestra($cmbTipo, $palestra, $dataPalestra, $horaInicio, $horaIntervalo, $horaTermino, $local, $qtdVagas, $resumo, $id)){

                        if($md->VincularPalestrantePalestra()){
                            echo "<script> alert('Palestra inserida com sucesso!') </script>";
                        }
                        else{

                            echo "<script> alert('Falha ao inserir palestra, na validação palestrante x palestra, favor procure o adiministrador do sistema!) </script>";
                        }
                    }

                    else{
                        echo "<script> alert('Falha ao inserir palestra, favor procure o adiministrador do sistema!) </script>";
                    }
                }
                else{
                    echo "<script> alert('Falha ao inserir palestrante, favor procure o adiministrador do sistema!) </script>";
                }
            }
            
        }

        else if(isset($_POST['btnCancel'])){

            $p = new MdCriar();
            $result = $p->LoadData($id);
            return view('seeScreen', ['result' => $result, 'id' => $id]);

        }

        return view('newPalestra', ['id' => $id]);
    }

    public function validaData(){ 

        if(isset($_POST['btnConfirm'])){

            switch(true){
                case empty($_POST['titulacao']):
                    echo '<script>alert("Favor preencher o campo Nome da titulação");</script>';
                break;  

                case empty($_POST['nome']):
                    echo '<script>alert("Favor preencher o campo Nome");</script>';
                break;   
                case empty($_POST['apresentacao']):
                    echo '<script>alert("Favor preencher o campo Apresentação");</script>';
                break;  
                
                case empty($_POST['nomePalestra']):
                    echo '<script>alert("Favor preencher o campo Nome da palestra1");</script>';
                break;      
                case empty($_POST['dataPalestra']):
                    echo '<script>alert("Favor preencher o campo Data da palestra");</script>';
                break;
                case empty($_POST['horaInicio']):
                    echo '<script>alert("Favor preencher o campo Horário de inicio");</script>';
                break;
                case empty($_POST['horaIntervalo']):
                    echo '<script>alert("Favor preencher o campo Horário do intervalo");</script>';
                break;
                case empty($_POST['horaTermino']):
                    echo '<script>alert("Favor preencher o campo Carga Horário de Término");</script>';
                break;
                case empty($_POST['local']):
                    echo '<script>alert("Favor preencher o campo Local");</script>';
                break;
                case empty($_POST['qtdVagas']):
                    echo '<script>alert("Favor preencher o campo Carga Qtd. Vagas");</script>';
                break;
                case empty($_POST['resumo']):
                    echo '<script>alert("Favor preencher o campo Resumo");</script>';
                break;
                default: 
                    return true;
                break;
            }
            return false;             
        }
            

    }
}
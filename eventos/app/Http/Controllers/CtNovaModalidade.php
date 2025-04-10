<?php

namespace App\Http\Controllers;

use Request;
use App\Models\MdCriar;
use Illuminate\Support\Facades\DB;

class CtNovaModalidade extends Controller
{

    public function CarregaDadosModalidade($id){ 

        $md = new MdCriar();

        if(isset($_POST['btnInserir'])){

            if(!isset($_POST['subEvento'])){

                echo "<script>alert('Campo sub-evento vazio, favor inserir o nome!')</script>";
            }else if(!isset($_POST['dtIniInscricoes'])){
            
                echo "<script>alert('Campo Inicio das inscrições vazio, favor inserir a data!')</script>";
            }
            else if(!isset($_POST['dtLimIscricoes'])){
            
                echo "<script>alert('Campo Limite das inscrições vazio, favor inserir a data!')</script>";
            }
            else if(!isset($_POST['valor'])){
            
                echo "<script>alert('Campo valor vazio, favor inserir um valor!')</script>";
            }
            else{            
    
                $dtIniInscricoes = $_POST['dtIniInscricoes'];
                $dtLimIscricoes = $_POST['dtLimIscricoes'];
                $valor = $_POST['valor'];
    
                $t = $_POST['selectSube'];
                $valueOpt = ""; 
    
                switch($t){
    
                    case '0' :
                        echo "<script>alert('Favor escolha algo no campo Sub-Evento!')</script>";
                    break;
                    
                    case '1' : 
                        $valueOpt = 'Ouvinte';
                    break;
                
                    case '2' : 
                        $valueOpt =  'Apresentação de Trabalho';
                    break;
                
                    case '3' : 
                        $valueOpt = 'Ouvinte e Apresentação de Trabalhos';
                    break; 
                
                    case '4' : 
                
                        if(!isset($_POST['subEvento'])){
                            echo "<script>alert('Campo Sub-Evento Vazio, favor insira algo para validarmos a inserção!')</script>";
                        }
                        else { 
                            $valueOpt = $_POST['subEvento'];
                        } 
                        
                    break;
                
                }
    
                if($md->InsertModalidade($valueOpt)){
    
                    if($md->LigaMod($id, $dtIniInscricoes, $dtLimIscricoes, $valor)){
    
                        echo "<script>alert('Nova modalidade inserida com sucesso!')</script>";
                    }
                    else {
                        echo "<script>alert('Falha para inserir Nova modalidade!')</script>";
                    }
                }
                else {
                    echo "<script>alert('Falha para inserir Nova modalidade!')</script>";
                }
    
                    
            }

        }
        else if(isset($_POST['btnVoltar'])){

            $result = $md->LoadData($id);
            return view('seeScreen', ['result' => $result, 'id' => $id]);

        }
        
        return view('novaModalidade', ['id' => $id]);

    }

}
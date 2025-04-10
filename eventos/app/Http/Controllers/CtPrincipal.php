<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\MdPrincipal;
use Illuminate\Support\Facades\DB;

class CtPrincipal extends Controller
{

    public function carregaDadosPrincipal(Request $request){

        session_start();

        $lista = new MdPrincipal;
        $isnt = new MdPrincipal;

        $lista = $isnt->CarregaLista();
        
        $result = $isnt->CarregaLista();

        //$id = isset($_SESSION['teste']) ? $_SESSION['teste'] : 0;

        $primeira = 1;
        
        $_POST['page'] = 1;
        //$numeroLista = $_POST['page'];

        $contar = $isnt->quantidadeDados();

        foreach($contar as $p){

        }
        
        $valorTotal = $p->contar;

        $filterPage = intdiv($valorTotal, 20);

        // Inicializa o valor de 'primeira' na sessão se não estiver definido 
        if (!$request->session()->has('primeira')) { 
            $request->session()->put('primeira', 1); 
        } 
        // Verifica se o botão 'btnNext' foi pressionado 
        if ($request->has('btnNext')) { 
            // Recupera o valor da sessão 
            $primeira = $request->session()->get('primeira'); 
            // Calcula o limite com base no valor da sessão 
            $limite = $primeira * 20;
            // Chama a função para obter os dados 
            $result = $isnt->ListaAcrescentada($limite); 
            // Incrementa o valor de 'primeira' na sessão 
            $t = $request->session()->put('primeira', $primeira + 1);
            // Renderiza a view com os dados 
            return view('principal', ['result' => $result, 'primeira' => $primeira, 'filterPage' => $filterPage]);

        }

        // Lógica para o botão 'btnBack' 
        else if ($request->has('btnBack')) { 
            // Recupera o valor da sessão 
            $primeira = $request->session()->get('primeira'); 
            // Garante que 'primeira' não fique abaixo de 1 
            if ($primeira > 0) { 
                // Decrementa o valor de 'primeira' na sessão 
                $request->session()->put('primeira', $primeira - 1); 
                $primeira = $request->session()->get('primeira'); 
                // Calcula o limite com base no valor atualizado da sessão 
                $limite = $primeira * 20; 
                // Chama a função para obter os dados 
                
                $result = $isnt->ListaAcrescentada($limite); 
                // Renderiza a view com os dados 
                return view('principal', ['result' => $result, 'primeira' => $primeira, 'filterPage' => $filterPage]); 
            }

            
        }

        else if($request->has('btnBuscar')){

            $search = isset($_POST['search']) ? $_POST['search'] : 'vazio';

            if($search != 'vazio'){

                $result = $isnt->Search($search, $primeira); 

                return view('principal', ['result' => $result, 'primeira' => $primeira, 'filterPage' => $filterPage]); 
            }

        }
        
        return view('principal', ['result' => $result, 'primeira' => $primeira, 'filterPage' => $filterPage]);
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
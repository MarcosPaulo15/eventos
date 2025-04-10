<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Request;
use Illuminate\Database\Eloquent\Model;

class MdNewPalestra extends Model
{
    public function InsertPalestrante($titulacao, $nome, $apresentacao){

        $query = "insert into palestrantes values(null, '$titulacao', '$nome', '$apresentacao')";

        DB::statement($query);

        return redirect()->back()->with('success', 'Query executada com sucesso!');

    }

    public function InsertPalestra($tipoPalestra, $nome, $data, $horaIni, $horaInt, $horaFim, $local, $vagas, $resumo, $idEvento){

        $query = "insert into palestras values(null, 
                                                $tipoPalestra, 
                                                '$nome', 
                                                '$data', 
                                                '$horaIni', 
                                                '$horaFim', 
                                                 $horaInt, 
                                                '$local', 
                                                 $vagas, 
                                                '$resumo', 
                                                '$idEvento')";

        
        DB::statement($query);

        return redirect()->back()->with('success', 'Query executada com sucesso!');

    }

    public function VincularPalestrantePalestra(){

        $query = "insert into palestrantes_palestras select (select id from palestrantes order by id desc limit 1) as id_palestrante,
                  (select id from palestras order by id desc limit 1) as  id_palestra from palestrantes_palestras limit 1";


        DB::statement($query);

        return redirect()->back()->with('success', 'Query executada com sucesso!');
    }
}

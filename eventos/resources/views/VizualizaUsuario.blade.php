
@extends('modeloGenerico')
@section('header')
    

@endsection

@section('main')

<?php
    foreach($nome as $q){

    }
?>
    <div class="container">
                <center>
                    <label><b><?php echo $q->nome?></b></label>
                </center>

                <br>
                <br>
        
        <form action="{{ route('usuariosVinculados', ['id' => $id]) }}" method="post">
            @csrf
            <div>
                <div class="tables">

                    <table>
                        <div class="tableTitle">
                            <th>
                                <th>usuarios Vinculados</th>
                            </th>
                        </div>
                        <br>
                        <br>

                        <?php

                                foreach($resultado as $p){
                        ?>
                            <tr>                                
                                <td> <?php echo $p->nome; ?> </td>
                            </tr>
                        

                        <?php
                        }
                        
                        ?>
                    </table>
                </div>
                
                <br>
                <div>
                    <center>
                        <input type="submit" value="Voltar" class="btnBack" name="btnVoltarUsu">
                    </center>
                </div>                                
            </div>
        </form>
    </div>

@endsection
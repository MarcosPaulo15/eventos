
@extends('modeloGenerico')
@section('header')
    

@endsection

@section('main')


<?php
foreach($resultEvent as $q){

    //$nome = $p->nome;
}
?>
   
   <div class="container">       
        
        <center>
            <label for="nome" ><B>Evento : <?php echo $q->nome; ?></B></label>
        </center>
    
        <br>
        <br>
        <form action="{{ route('addUser', ['id' => $id]) }}" method="post">                
            @csrf
            <div class="form-group">
                <label for="nome"><b>usuarios</b><span style="color: red;">*</span> :</label>
                <select name="user_id">
                <option value="0">-</option>
                <?php 
                    foreach($result as $p){

                        //$nome = $p->nome;
                     ?>
                    <option value="<?php echo $p->id?>"><?php echo $p->nome ?></option>
                    <?php
                    }
                    //}?>                
                </select>
            </div>
            <div class="form-group">
                <label for="email"><b>Perfil</b><span style="color: red;">*</span> :</label>
                <select name="usrPerfil" id="">
                    <option value="0">-</option>
                    <option value="1">Administrador</option>
                    <option value="2">Financeiro</option>
                    <option value="3">Coordenação Comissão Científica</option>
                    <option value="4">Avaliador</option>
                    <option value="5">Monitor</option>
                    <option value="6">Coordenação Inscrições</option>
                    <option value="7">Coordenação de Monitores</option>
                    <option value="8">Coordenação Geral de Evento</option>
                </select>
            </div>

            <!-- Adicione mais campos conforme necessário -->
            <div class="dvbtn">
                <input type="submit" value="Adicionar" class="btnAddUserEv" name="btnAddUserEv">
                <input type="submit" value="Cancelar" class="btnBackEv" name="btnBackEv">                
            </div>
        </form>
    </div>
        
@endsection
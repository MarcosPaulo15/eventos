@extends('modelo')
@section('header')
    

@endsection

@section('main')
<div class="container">

<div class="componentes">
    <div class="dvTitle">
        <img src="{{ asset('images/logo_imepac_geral.png') }}" alt="Logo ImePACP">
    </div> 
</div>

    <form id="formInscricao" method="POST" class="form-horizontal">
        <div class="form-group">
            
            <div class="col-sm-4">
                <b><label class="control-label col-sm-2" for="usuario">Usuário:</label></b>
                <input type="text" class="form-control" name="usuario" required="" value="">
            </div>

            
            <div class="col-sm-5">
                <b><label class="control-label col-sm-2" for="senha">Senha:</label></b>
                <input type="password" class="form-control" name="senha" value="" required="">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-12 text-right footerForm">
                <center>
                    <button type="submit" class="btn-acess" name="btn-acess">ACESSAR</button>
                </center>
                
            </div>    
        </div>

    </form>
</div>

@endsection
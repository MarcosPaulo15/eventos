@extends('modeloGenerico')
@section('header')
    

@endsection

@section('main')
<div class="container">        

        
        
        <form action="/novo_evento/newUser" method="post">

            @csrf
            <div class="form-group">
                <label for="nome">Nome :</label>
                <input type="text" id="nome" name="nome" placeholder="Nome Completo do Usuário" value="<?php echo isset($_POST['nome']) ? $_POST['nome'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="nome">Telefone :</label>
                <input type="tel" name="telefone" placeholder="Telefone do Usuário" value="<?php echo isset($_POST['telefone']) ? $_POST['telefone'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="nome">email :</label>
                <input type="email" id="email" name="email" placeholder="Apresentação do palestrante (Ex: Engenheiro civil, reitor da Imepac, Mestre em Ads...)" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="nome">Usuário :</label>
                <input type="text" id="user" name="user" placeholder="Usuário." value="<?php echo isset($_POST['user']) ? $_POST['user'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="nome">Senha :</label>
                <input type="text" id="senha" name="senha" placeholder="Senha." value="<?php echo isset($_POST['senha']) ? $_POST['senha'] : ''; ?>">
            </div>

            <div class="form-group-check">
                <label for="lblAtivo" class= "lblEnvTrab">Ativo: </label>
                <input type="checkbox" id="Ativo" name="ckbAtivo[]" value="Ativo" <?php echo (isset($_POST['ckbAtivo']) && in_array('Ativo', $_POST['ckbAtivo'])) ? 'checked' : ''; ?>>   
            </div>

            <!-- Adicione mais campos conforme necessário -->
            <div class="dvbtn5">
                <input type="submit" value="Voltar" class="btnVoltar" name="btnNewVoltar">
                <input type="submit" value="Inserir" class="btnConfirm" name="btnInsert">
            </div>
        </form>
    </div>
@endsection
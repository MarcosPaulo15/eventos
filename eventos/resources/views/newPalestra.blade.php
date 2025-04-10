
@extends('modeloGenerico')
@section('header')
    

@endsection

@section('main')

<div class="container">        
        
        <form action="{{ route('addPalestras', ['id' => $id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Titulação :</label>
                <input type="text" id="nome" name="titulacao" placeholder="Titulação do palestrante (Ex: Prof, Dr, Me, Dra...)" value="<?php echo isset($_POST['titulacao']) ? $_POST['titulacao'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="nome">Nome :</label>
                <input type="text" id="nome" name="nome" placeholder="Nome do Palestrante" value="<?php echo isset($_POST['nome']) ? $_POST['nome'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="nome">Apresentação :</label>
                <input type="text" id="nome" name="apresentacao" placeholder="Apresentação do palestrante (Ex: Engenheiro civil, reitor da Imepac, Mestre em Ads...)" value="<?php echo isset($_POST['apresentacao']) ? $_POST['apresentacao'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="nome">Tipo de palestra :</label>
                <select  id="cmbTipo" name="cmbTipo">
                    <option value="0"></option>
                    <option value="1">Palestra</option>
                    <option value="7">Conferencia</option>
                    <option value="8">Mostra de Trabalhos</option>
                    <option value="9">Mesa Redonda</option>
                    <option value="14">Apresentação de Trabalho 4º Período</option>
                    <option value="10">Apresentação de Trabalho 5º Período</option>
                    <option value="11">Apresentação de Trabalho 6º Período</option>
                    <option value="15">Apresentação de Trabalho 7º Período</option>
                    <option value="12">Apresentação de Trabalho 8º Período</option>
                    <option value="13">Mini-Curso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nome">Nome da palestra :</label>
                <input type="text" id="nome" name="nomePalestra" placeholder="Nome da palestra." >
            </div>

            <div class="form-group">
                <label for="nome">Data da palestra :</label>
                <input type="date" id="nome" name="dataPalestra" placeholder="Nome da palestra." >
            </div>

            <div class="form-group">
                <label for="nome">Horário de inicio:</label>
                <input type="time" id="nome" name="horaInicio" >
            </div>

            <div class="form-group">
                <label for="nome">Horário do intervalo:</label>
                <input type="number" id="nome" name="horaIntervalo" >
            </div>


            <div class="form-group">
                <label for="nome">Horário de Término:</label>
                <input type="time" id="nome" name="horaTermino"  >
            </div>

            <div class="form-group">
                <label for="nome">Local :</label>
                <input type="text" id="nome" name="local" placeholder="Local da palestra." >
            </div>

            <div class="form-group">
                <label for="nome">Qtd. Vagas :</label>
                <input type="number" id="nome" name="qtdVagas" >
            </div>

            <div class="form-group">
                <label for="nome">Resumo :</label>
                <input type="text" id="nome" name="resumo" >
            </div>

            <!-- Adicione mais campos conforme necessário -->
            <div class="dvbtn5">
                <input type="submit" value="Voltar" class="btnBack" name="btnCancel">
                <input type="submit" value="Inserir" class="btnConfirm" name="btnConfirm">
            </div>
        </form>
    </div>

@endsection

@extends('modeloGenerico')
@section('header')
    
    <script>
        function mostrarCheckboxes() {
            //div
            var optSubEve = document.getElementById("optSubEve");
            //select
            var selectSub = document.getElementById("selectSub");
            //input text oculto
            var dvSubEve = document.getElementById("dvSubEve");
            

            if (selectSub.value == "4") {
                optSubEve.style.display = "none";
                dvSubEve.style.display = "block";
            } 
            
        }
    </script>

@endsection

@section('main')

    <div class="container">        
        
        <form action="{{ route('novaModalidade', ['id' => $id]) }}" method="post">

            @csrf
            <div class="form-group" id="optSubEve">
                <label for="nome">Sub-Evento :</label>
                <select id="selectSub" name="selectSube" onchange="mostrarCheckboxes()">
                    <option value="0">-</option>
                    <option value="1">Ouvinte</option>
                    <option value="2">Apresentação de Trabalhos</option>
                    <option value="3">Ouvinte e Apresentação de Trabalhos</option>
                    <option value="4">outro</option>
                </select>
            </div>

            <div class="form-group"  id="dvSubEve"  style="display:none;">
                <label for="nome">Sub-Evento :</label>
                <input type="text" id="subEvento" name="subEvento" placeholder="Adicione o Sub-Evento" value="<?php echo isset($_POST['subEvento']) ? $_POST['subEvento'] : ''; ?>">
            </div>     
            <div class="form-group">
                <label for="nome">Inicio das Inscrições:</label>
                <input type="date" id="dtIniInscricoes" name="dtIniInscricoes" value="<?php echo isset($_POST['dtIniInscricoes']) ? $_POST['dtIniInscricoes'] : ''; ?>">
            </div>  
            <div class="form-group">
                <label for="nome">Data Limite :</label>
                <input type="date" id="dtLimIscricoes" name="dtLimIscricoes" value="<?php echo isset($_POST['dtLimIscricoes']) ? $_POST['dtLimIscricoes'] : ''; ?>">
            </div>     
            <div class="form-group">
                <label for="nome">Valor :</label>
                <input type="number" id="valor" name="valor" placeholder="Adicione o valor." value="<?php echo isset($_POST['valor']) ? $_POST['valor'] : ''; ?>">
            </div>     

            <!-- Adicione mais campos conforme necessário -->
            <div class="dvbtn5">
                <input type="submit" value="Voltar" class="btnVoltar" name="btnVoltar">
                <input type="submit" value="Inserir" class="btnConfirm" name="btnInserir">
            </div>
        </form>
    </div>
@endsection
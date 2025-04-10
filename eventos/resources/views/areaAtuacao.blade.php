
@extends('modeloGenerico')
@section('header')
    

@endsection

@section('main')

    <div class="container">
        
        <form action="{{ route('areaAtuacao', ['id' => $id]) }}" method="post">        
            @csrf
            <div class="form-group">
                <label for="nome">Area de conhecimento :</label>
                <input type="text" id="area" name="area" placeholder="Adicione a Area de Conhecimento" value="<?php echo isset($_POST['area']) ? $_POST['area'] : ''; ?>">
            </div>           

            <!-- Adicione mais campos conforme necessário -->
            <div class="dvbtn5">
                <input type="submit" value="Voltar" class="btnVoltar" name="btnVoltarArea">
                <input type="submit" value="Inserir" class="btnConfirm" name="btnArea">
            </div>
        </form>
    </div>

@endsection
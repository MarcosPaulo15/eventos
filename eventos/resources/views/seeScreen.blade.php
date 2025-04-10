<?php
foreach($result as $p){

    $nome = $p->nome;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/update.css">
    <title>Document</title>
</head>
<body>
<div class="toolbar"> 
<img src="{{ asset('images/logo_imepac_geral.png') }}" alt="Logo IMEPAC" class="logo">

    <div class="dropdown"> 
        <div class="menu-icon">...</div> 
        <div class="dropdown-content"> 
            <a href="{{ route('update', ['id' => $id]) }}">Editar</a> 
            <a href="{{ route('addUser', ['id' => $id]) }}">Adc Usuario no Evento</a> 
            <a href="{{ route('usuariosVinculados', ['id' => $id]) }}">Viz Usuario no Evento</a> 
            <a href="{{ route('addPalestras', ['id' => $id]) }}">Adc Palestra ao Evento</a> 
            <a href="{{ route('areaAtuacao', ['id' => $id]) }}">Nova Area de Conhecimento</a> 
            <a href="{{ route('novaModalidade', ['id' => $id]) }}">Inserir Sub-Evento</a> 
            <a href="{{ route('novo_evento.principal') }}">Voltar</a> 
        </div>
    </div>

</div>
    <div class="container">        
        
    <form id="fileForm" action="/novo_evento/criar" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nome">Nome<span style="color: red;">*</span> :</label>
                <input type="text" id="nome" name="nome" placeholder="Nome do evento" value="<?php echo $p->nome; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="email">E-mail<span style="color: red;">*</span> :</label>
                <input type="email" id="email" name="email" placeholder="E-mail do organizador" value="<?php echo $p->email_organizador; ?>" readonly>
            </div>
            <div class="form-group1">
                <label for="dataInicio" class= "teste">Data Início<span style="color: red;">*</span> :</label>
                <input type="date" id="dataInicio" class= "teste" name="dataInicio" value="<?php echo $p->data_inicio; ?>" readonly>                    

                <label for="dataFim" class= "teste1">Data Fim<span style="color: red;">*</span> :</label>
                <input type="date" id="dataFim" name="dataFim" value="<?php echo $p->data_fim; ?>" readonly>              
            </div>

            <div class="form-group">
                <label for="lblChMin" class="teste">Carga Horaria Min<span style="color: red;">*</span> :</label>
                <input type="number" class="teste" id="edtChMin" name="edtChMin" placeholder="Carga horária minima" value="<?php echo $p->ch_palestra; ?>" readonly>

                <label for="lblChMax" class= "teste1">Carga Horaria Max<span style="color: red;">*</span>:</label>
                <input type="number" id="edtChMax" name="edtChMax" placeholder="Carga horária máxima" value="<?php echo $p->ch_max; ?>" readonly>                

            </div>

            <div class="form-group-check">
                <label for="lblModIns" class= "lblModIns">Mod. Inscrição : </label>
                <input type="checkbox" id="ModIns" name="ckbModIns[]" value="S" {{ $p->modalidades_inscricao == 'S' ? 'checked' : ''}} readonly >

            </div>
            <div class="form-group1">
                <label for="lblDtInicioIns" class= "teste">Data Início Inscrições<span style="color: red;">*</span> :</label>
                <input type="date" id="edtDtInicioIns" class= "teste" name="edtDtInicioIns" value="<?php echo $p->data_inicio_inscricoes; ?>" readonly>    

                <label for="lblDtLimite" class= "teste1">Data Liminte Insc<span style="color: red;">*</span> :</label>
                <input type="date" id="edtDtLimite" name="edtDtLimite" value="<?php echo $p->data_limite_inscricoes_palestras; ?>" readonly>  
            </div>

            <div class="form-group-check">
                <label for="pago" class= "pago">Pago:</label>
                <input type="checkbox" id="pago" name="paga[]" onclick="mostrarCheckboxes()"  value="S" {{$p->pago == 'S' ? 'checked' : ''}} readonly>
                
                <label for="lblCartãoNac" id="cartaoNacional" class= "lblCartãoNac" style="display:none;" >Cartão Nacional: </label>
                <input type="checkbox" id="CartãoNac1" name="ckbCartãoNac[]" style="display:none;" value="S" {{$p->cartao_nacional == 'S' ? 'checked' : ''}} readonly>

                <label for="lblCartãoEst" id="cartaoEstrangeiro" class= "lblCartãoEst" style="display:none;" >Cartão Estrangeiro: </label>
                <input type="checkbox" id="cartaoEstrangeiro1" name="ckbCartãoEst[]" style="display:none;" value="S" {{$p->cartao_estrangeiro == 'S' ? 'checked' : ''}}>
                    
            </div>

            <div class="form-group-check">
                <label for="lblArCon" class= "lblArCon">Ar. Conhecimento: </label>
                <input type="checkbox" id="ArCon" name="ckbArCon[]" onclick="mostrarCheckboxes()" value="S" {{$p->areas_conhecimento == 'S' ? 'checked' : ''}} >

            </div>

            <div class="form-group-check">
                <label for="lblPalestras" class= "lblPalestras">Palestras: </label> 
                <input type="checkbox" id="Palestras" name="ckbPalestras[]" value="S" {{$p->palestras == 'S' ? 'checked' : ''}} >

            </div>

            <div class="form-group-check">
                <label for="lblModApr" class= "lblModApr">Mod. Apresentação: </label>
                <input type="checkbox" id="ModApr" name="ckbModApr[]" value="S" {{$p->modalidades_apresentacao == 'S' ? 'checked' : ''}}>

            </div>

            <div class="form-group-check">
                <label for="lblSubTrab" class= "lblSubTrab">Submissão Trabalhos: </label>
                <input type="checkbox" id="SubTrab" name="ckbSubTrab[]" value="S" {{$p->submissao_trabalhos == 'S' ? 'checked' : ''}}>

            </div>

            <div class="form-group-check">
                <label for="lblRes" class= "lblRes">Resumo: </label>
                <input type="checkbox" id="Res" name="ckbRes[]" value="S" {{$p->resumo == 'S' ? 'checked' : ''}} >

            </div>

            <div class="form-group-check">
                <label for="lblEnvTrab" class= "lblEnvTrab">Permite Envio de trabalho: </label>    
                <input type="checkbox" id="EnvTrab" name="ckbEnvTrab[]" value="S" {{$p->envio_arquivo_trabalho == 'S' ? 'checked' : ''}} >

            </div>

            <div class="form-group-check">
                <label for="lblAvOn" class= "lblEnvTrab">Avaliação Online: </label>
                <input type="checkbox" id="AvOn" name="ckbAvOn[]" value="S" {{$p->avaliacao_online == 'S' ? 'checked' : ''}} > 
            </div>


            <div class="form-group1">
                <label for="lblDtLimiteEnv" class= "teste">Data Limite de Envio<span style="color: red;">*</span> :</label>
                <input type="date" id="edtDtLimiteEnv" class= "teste" name="edtDtLimiteEnv" value="<?php echo $p->data_limite_envio_trabalhos; ?>">         
            </div>

            <div class="form-group1">
                <label for="lblTamMinRes" class="teste">Tamanho min do Resumo<span style="color: red;">*</span> :</label>
                <input type="number" class="teste" id="edtTamMinRes" name="edtTamMinRes" placeholder="Tamanho minimo do resumo" value="<?php echo $p->tamanho_min_resumo; ?>">

                <label for="lblTamMaxRes" class="teste1">Tamanho max do Resumo<span style="color: red;">*</span> :</label>
                <input type="number" id="edtTamMaxRes" name="edtTamMaxRes" placeholder="Tamanho máximo do resumo" value="<?php echo $p->tamanho_max_resumo; ?>">                
            </div>

            <div class="form-group1">
                <label for="lblMaxAutor" class="teste">Maximo Autores<span style="color: red;">*</span> :</label>
                <input type="number" class="teste" id="edtMaxAutor" name="edtMaxAutor" placeholder="máximo de autores" value="<?php echo $p->max_autores; ?>">          
            </div>

            <div class="form-group1">
                <label for="lblBgCertOuv" class="teste">Selecione o certificado de ouvinte<span style="color: red;">*</span> :</label>
                <input type="file" class="teste" id="BgCertOuv" name="BgCertOuv" accept="image/*"  value="<?php echo $p->bg_certificado_ouvinte; ?>">
            </div>

            <div class="form-group1">
                <label for="lblBgCertTrab" class="teste">Selecione Certificado Trabalhos<span style="color: red;">*</span> :</label>
                <input type="file" class="teste" id="edtBgCertTrab" name="edtBgCertTrab" accept="image/*" value="<?php echo $p->bg_certificado_trabalhos; ?>">          
            </div>

            <div class="form-group-check">
                <label for="lblAtivo" class= "lblEnvTrab">Ativo: </label>
                <input type="checkbox" id="Ativo" name="ckbAtivo[]" value="S" {{$p->ativo == 'S' ? 'checked' : ''}}>   
            </div>

            <div class="form-group-check">
                <label for="lblCertOnline" class= "lblCertOnline">Certificado Online: </label>
                <input type="checkbox" id="CertOnline" name="ckbCertOnline[]" value="S" {{$p->certificado_online == 'S' ? 'checked' : ''}} >
            </div>

            <div class="form-group">
                <label for="lblAssEmail">Assinatura Emails:</label>
                <textarea id="edtAssEmail" name="edtAssEmail" placeholder="Digite aqui a assinatura do email" value="<?php echo $p->assinatura_emails; ?>"></textarea>
            </div>

            <div class="form-group-check">
                <label for="lblMultMod" class= "lblMultMod">Multimodlidade: </label>    
                <input type="checkbox" id="MultMod" name="ckbMultMod[]" value="S" {{$p->multimodalidade == 'S' ? 'checked' : ''}} >
            </div>

            <div class="form-group-check">
                <label for="lblInternacional" class= "lblInternacional">Internacional: </label>  
                <input type="checkbox" id="Internacional" name="ckbInternacional[]" value="S" {{$p->internacional == 'S' ? 'checked' : ''}} >
            </div>


            <div class="form-group1">
                <label for="lblDtLimiteCorrecTrab" class= "teste">Data Limite Correção de Trabalhos<span style="color: red;">*</span> :</label>
                <input type="date" id="edtDtLimiteCorrecTrab" class= "teste" name="edtDtLimiteCorrecTrab" value="<?php $p->data_limite_correcao_trabalhos ?>">         
            </div>

            <div class="form-group1">
                <label for="" class= "qtdVagas">Quantidade de vagas :</label>
                <input type="number" id="edtVagas" class= "edtVagas" name="edtVagas" value="<?php echo $p->QTD_VAGAS; ?>">         
            </div>
        </form>
    </div>
    </div>
</body>
</html>
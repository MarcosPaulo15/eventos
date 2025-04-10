
@extends('modeloGenerico')
@section('header')
    

@endsection

@section('main')


<?php
foreach($result as $p){

    $nome = $p->nome;
}
?>
    <div class="container">        
        
        <form id="fileForm" action="{{ route('update', ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome<span style="color: red;">*</span> :</label>
                    <input type="text" id="nome" name="nome" placeholder="Nome do evento" value="<?php echo $p->nome; ?>" >
                </div>
                <div class="form-group">
                    <label for="email">E-mail<span style="color: red;">*</span> :</label>
                    <input type="email" id="email" name="email" placeholder="E-mail do organizador" value="<?php echo $p->email_organizador; ?>" >
                </div>
                <div class="form-group1">
                    <label for="dataInicio" class= "teste">Data Início<span style="color: red;">*</span> :</label>
                    <input type="date" id="dataInicio" class= "teste" name="dataInicio" value="<?php echo $p->data_inicio; ?>" >                    
    
                    <label for="dataFim" class= "teste1">Data Fim<span style="color: red;">*</span> :</label>
                    <input type="date" id="dataFim" name="dataFim" value="<?php echo $p->data_fim; ?>" >              
                </div>
    
                <div class="form-group">
                    <label for="lblChMin" class="teste">Carga Horaria Min<span style="color: red;">*</span> :</label>
                    <input type="number" class="teste" id="edtChMin" name="edtChMin" placeholder="Carga horária minima" value="<?php echo $p->ch_palestra; ?>" >
    
                    <label for="lblChMax" class= "teste1">Carga Horaria Max<span style="color: red;">*</span>:</label>
                    <input type="number" id="edtChMax" name="edtChMax" placeholder="Carga horária máxima" value="<?php echo $p->ch_max; ?>" >                
    
                </div>
    
                <div class="form-group-check">
                    <label for="lblModIns" class= "lblModIns">Mod. Inscrição : </label>
                    <input type="checkbox" id="ModIns" name="ckbModIns[]" value="S" {{ $p->modalidades_inscricao == 'S' ? 'checked' : ''}}  >
    
                </div>
                <div class="form-group1">
                    <label for="lblDtInicioIns" class= "teste">Data Início Inscrições<span style="color: red;">*</span> :</label>
                    <input type="date" id="edtDtInicioIns" class= "teste" name="edtDtInicioIns" value="<?php echo $p->data_inicio_inscricoes; ?>" >    
    
                    <label for="lblDtLimite" class= "teste1">Data Liminte Insc<span style="color: red;">*</span> :</label>
                    <input type="date" id="edtDtLimite" name="edtDtLimite" value="<?php echo $p->data_limite_inscricoes_palestras; ?>" >  
                </div>
    
                <div class="form-group-check">
                    <label for="pago" class= "pago">Pago:</label>
                    <input type="checkbox" id="pago" name="paga[]" onclick="mostrarCheckboxes()"  value="S" {{$p->pago == 'S' ? 'checked' : ''}} >
                    
                    <label for="lblCartãoNac" id="cartaoNacional" class= "lblCartãoNac" style="display:none;" >Cartão Nacional: </label>
                    <input type="checkbox" id="CartãoNac1" name="ckbCartãoNac[]" style="display:none;" value="S" {{$p->cartao_nacional == 'S' ? 'checked' : ''}} >
    
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
    
                <!-- Adicione mais campos conforme necessário -->
                <div class="dvbtn">
                    <input type="submit" value="Atualizar" class="btnadd" name="btnUpdt">
                    <input type="submit" value="Cancelar" class="btncancel" name="btnCancel">
                </div>
            </form>
        </div>
        </div>
        
@endsection
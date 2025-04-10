@extends('modeloGenerico')
@section('header')
    

@endsection

@section('main')
    <div class="container">

    <?php echo $certificadoOnline?> 

        <form id="fileForm" action="/novo_evento/criar" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nome">Nome<span style="color: red;">*</span> :</label>
                <input type="text" id="nome" name="nome" placeholder="Nome do evento" value="<?php echo $nome; ?>">
            </div>
            <div class="form-group">
                <label for="email">E-mail<span style="color: red;">*</span> :</label>
                <input type="email" id="email" name="email" placeholder="E-mail do organizador" value="<?php echo $email; ?>" >
            </div>
            <div class="form-group1">
                <label for="dataInicio" class= "teste">Data Início<span style="color: red;">*</span> :</label>
                <input type="date" id="dataInicio" class= "teste" name="dataInicio" value="<?php echo $dataInicio; ?>">                    

                <label for="dataFim" class= "teste1">Data Fim<span style="color: red;">*</span> :</label>
                <input type="date" id="dataFim" name="dataFim" value="<?php echo $dataFim; ?>">              
            </div>

            <div class="form-group">
                <label for="lblChMin" class="teste">Carga Horaria Min<span style="color: red;">*</span> :</label>
                <input type="number" class="teste" id="edtChMin" name="edtChMin" placeholder="Carga horária minima" value="<?php echo $cargaHorMin; ?>">

                <label for="lblChMax" class= "teste1">Carga Horaria Max<span style="color: red;">*</span>:</label>
                <input type="number" id="edtChMax" name="edtChMax" placeholder="Carga horária máxima" value="<?php echo $cargaHorMax; ?>">                

            </div>

            <div class="form-group-check">
                <label for="lblModIns" class= "lblModIns">Mod. Inscrição : </label>
                <input type="checkbox" id="ModIns" name="ckbModIns[]" value="<?php echo (isset($_POST['ckbModIns']) && in_array('ModIns', $_POST['ckbModIns'])) ? 'checked' : '';?>">

            </div>

            <div class="form-group1">
                <label for="lblDtInicioIns" class= "teste">Data Início Inscrições<span style="color: red;">*</span> :</label>
                <input type="date" id="edtDtInicioIns" class= "teste" name="edtDtInicioIns" value="<?php echo $dataIniInsc; ?>">    

                <label for="lblDtLimite" class= "teste1">Data Liminte Insc<span style="color: red;">*</span> :</label>
                <input type="date" id="edtDtLimite" name="edtDtLimite" value="<?php echo $dataLimInsc; ?>">  
            </div>

            <div class="form-group-check">
                <label for="pago" class= "pago">Pago:</label>
                <input type="checkbox" id="pago" name="paga[]" onclick="mostrarCheckboxes()"  value="<?php echo (isset($_POST['paga']) && in_array('pago', $_POST['paga'])) ? 'checked' : ''; ?>">
                
                <label for="lblCartãoNac" id="cartaoNacional" class= "lblCartãoNac" style="display:none;" >Cartão Nacional: </label>
                <input type="checkbox" id="CartãoNac1" name="ckbCartãoNac[]" style="display:none;" value="<?php echo (isset($_POST['ckbCartãoNac']) && in_array('CartãoNac', $_POST['ckbCartãoNac'])) ? 'checked' : ''; ?>" >

                <label for="lblCartãoEst" id="cartaoEstrangeiro" class= "lblCartãoEst" style="display:none;" >Cartão Estrangeiro: </label>
                <input type="checkbox" id="cartaoEstrangeiro1" name="ckbCartãoEst[]" style="display:none;" value="<?php echo (isset($_POST['ckbCartãoEst']) && in_array('CartãoEst', $_POST['ckbCartãoEst'])) ? 'checked' : ''; ?>" >
                    
            </div>

            <div class="form-group-check">
                <label for="lblArCon" class= "lblArCon">Ar. Conhecimento: </label>
                <input type="checkbox" id="ArCon" name="ckbArCon[]" onclick="mostrarCheckboxes()" value="<?php echo (isset($_POST['ckbArCon']) && in_array('ArCon', $_POST['ckbArCon'])) ? 'checked' : ''; ?>" >

            </div>

            <div class="form-group" id="cmbArCon1" style="display:none;">
                <input type="text" id="newApr" value="<?php echo $dataInicio; ?>" name="newApr" placeholder="Nova apresentação" >
                <button type="submit" value="Buscar" class="btnBuscar" name="btnInsertAre" onclick="teste()" > 
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>

            <div class="form-group-check">
                <label for="lblPalestras" class= "lblPalestras">Palestras: </label> 
                <input type="checkbox" id="Palestras" name="ckbPalestras[]" value="<?php echo (isset($_POST['ckbPalestras']) && in_array('Palestras', $_POST['ckbPalestras'])) ? 'checked' : ''; ?>" >

            </div>

            <div class="form-group-check">
                <label for="lblModApr" class= "lblModApr">Mod. Apresentação: </label>
                <input type="checkbox" id="ModApr" name="ckbModApr[]" value="<?php  echo (isset($_POST['ckbModApr']) && in_array('ModApr', $_POST['ckbModApr'])) ? 'checked' : ''; ?>" >

            </div>

            <div class="form-group-check">
                <label for="lblSubTrab" class= "lblSubTrab">Submissão Trabalhos: </label>
                <input type="checkbox" id="SubTrab" name="ckbSubTrab[]" value="<?php echo (isset($_POST['ckbSubTrab']) && in_array('SubTrab', $_POST['ckbSubTrab'])) ? 'checked' : ''; ?>" >

            </div>

            <div class="form-group-check">
                <label for="lblRes" class= "lblRes">Resumo: </label>
                <input type="checkbox" id="Res" name="ckbRes[]" value="<?php echo (isset($_POST['ckbRes']) && in_array('Res', $_POST['ckbRes'])) ? 'checked' : ''; ?>" >

            </div>

            <div class="form-group-check">
                <label for="lblEnvTrab" class= "lblEnvTrab">Permite Envio de trabalho: </label>    
                <input type="checkbox" id="EnvTrab" name="ckbEnvTrab[]" value="<?php echo (isset($_POST['ckbEnvTrab']) && in_array('EnvTrab', $_POST['ckbEnvTrab'])) ? 'checked' : ''; ?>" >

            </div>

            <div class="form-group-check">
                <label for="lblAvOn" class= "lblEnvTrab">Avaliação Online: </label>
                <input type="checkbox" id="AvOn" name="ckbAvOn[]" value="<?php echo (isset($_POST['ckbAvOn']) && in_array('AvOn', $_POST['ckbAvOn'])) ? 'checked' : ''; ?>" > 
            </div>


            <div class="form-group1">
                <label for="lblDtLimiteEnv" class= "teste">Data Limite de Envio<span style="color: red;">*</span> :</label>
                <input type="date" id="edtDtLimiteEnv" class= "teste" name="edtDtLimiteEnv" value="<?php echo $dataLimiteEnvio; ?>">         
            </div>

            <div class="form-group1">
                <label for="lblTamMinRes" class="teste">Tamanho min do Resumo<span style="color: red;">*</span> :</label>
                <input type="number" class="teste" id="edtTamMinRes" name="edtTamMinRes" placeholder="Tamanho minimo do resumo" value="<?php echo $tamanhoMinResumo; ?>">

                <label for="lblTamMaxRes" class="teste1">Tamanho max do Resumo<span style="color: red;">*</span> :</label>
                <input type="number" id="edtTamMaxRes" name="edtTamMaxRes" placeholder="Tamanho máximo do resumo" value="<?php echo $tamanhoMaxResumo; ?>">                
            </div>

            <div class="form-group1">
                <label for="lblMaxAutor" class="teste">Maximo Autores<span style="color: red;">*</span> :</label>
                <input type="number" class="teste" id="edtMaxAutor" name="edtMaxAutor" placeholder="máximo de autores" value="<?php echo $maximoAutores; ?>">          
            </div>

            <div class="form-group1">
                <label for="lblBgCertOuv" class="teste">Selecione o certificado de ouvinte<span style="color: red;">*</span> :</label>
                <input type="file" class="teste" id="BgCertOuv" name="BgCertOuv" accept="image/*"  value="<?php echo $certificadoOuvinte; ?>">
            </div>

            <div class="form-group1">
                <label for="lblBgCertTrab" class="teste">Selecione Certificado Trabalhos<span style="color: red;">*</span> :</label>
                <input type="file" class="teste" id="edtBgCertTrab" name="edtBgCertTrab" accept="image/*" value="<?php echo $certificadoTrabalhos; ?>">          
            </div>

            <div class="form-group-check">
                <label for="lblAtivo" class= "lblEnvTrab">Ativo: </label>
                <input type="checkbox" id="Ativo" name="ckbAtivo[]" value="<?php echo (isset($_POST['ckbAtivo']) && in_array('Ativo', $_POST['ckbAtivo'])) ? 'checked' : ''; ?>" >   
            </div>

            <div class="form-group-check">
                <label for="lblCertOnline" class= "lblCertOnline">Certificado Online: </label>
                <input type="checkbox" id="CertOnline" name="ckbCertOnline" value="<?php echo (isset($_POST['ckbCertOnline']) && in_array('CertOnline', $_POST['ckbCertOnline'])) ? 'checked' : ''; ?>" >
            </div>

            <div class="form-group1">
                <label for="lblDtLimiteIns" class= "teste">Data Limite da Inscrição<span style="color: red;">*</span> :</label>
                <input type="date" id="edtDtLimiteIns" class= "teste" name="edtDtLimiteIns" value="<?php echo $dataLimiteInscrição; ?>">         
            </div>

            <div class="form-group">
                <label for="lblAssEmail">Assinatura Emails:</label>
                <textarea id="edtAssEmail" name="edtAssEmail" placeholder="Digite aqui a assinatura do email" value="<?php echo $assinaturaEmails; ?>"></textarea>
            </div>

            <div class="form-group-check">
                <label for="lblMultMod" class= "lblMultMod">Multimodlidade: </label>    
                <input type="checkbox" id="MultMod" name="ckbMultMod[]" value="<?phpecho (isset($_POST['ckbMultMod']) && in_array('MultMod', $_POST['ckbMultMod'])) ? 'checked' : '';?>" >
            </div>

            <div class="form-group">
                <label for="lblInstEnvArq">Instrução envio de arquivo:</label>
                <textarea id="edtInstEnvArq" name="edtInstEnvArq" placeholder="Digite aqui a instrução do envio de arquivo" value="<?php echo $instruçãoEnvioArquivo; ?>"></textarea>
            </div>

            <div class="form-group-check">
                <label for="lblInternacional" class= "lblInternacional">Internacional: </label>  
                <input type="checkbox" id="Internacional" name="ckbInternacional[]" value="<?php echo (isset($_POST['ckbInternacional']) && in_array('Internacional', $_POST['ckbInternacional'])) ? 'checked' : ''; ?>" >
            </div>


            <div class="form-group1">
                <label for="lblDtLimiteCorrecTrab" class= "teste">Data Limite Correção de Trabalhos<span style="color: red;">*</span> :</label>
                <input type="date" id="edtDtLimiteCorrecTrab" class= "teste" name="edtDtLimiteCorrecTrab" value="<?php echo $dataLimiteCorreçãoTrabalhos; ?>">         
            </div>

            <div class="form-group1">
                <label for="" class= "qtdVagas">Quantidade de vagas :</label>
                <input type="number" id="edtVagas" class= "edtVagas" name="edtVagas" value="<?php echo $quantidadeVagas; ?>">         
            </div>
            
            <!-- Adicione mais campos conforme necessário -->
            <div class="dvbtn">
                <input type="submit" value="Adicionar" class="btnadd" name="btnAdd">
                <input type="submit" value="Cancelar" class="btncancel" name="btnCancel">
            </div>
        </form>
    </div>
    
@endsection
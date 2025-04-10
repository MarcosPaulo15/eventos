<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Usuarios;
use App\Models\MdCriar;
use Illuminate\Support\Facades\DB;

class CtCriarEvento extends Controller
{

     public function NovoEvento(){

        $nome = '';
        $email = '';
        $dataInicio = '';
        $dataFim = '';
        $cargaHorMin = '';
        $cargaHorMax = '';
        $modInsc = '';
        $dataIniInsc = '';
        $dataLimInsc = '';
        $pago = '';
        $cartãoNac = '';
        $cartãoEst = '';
        $areaConh = '';
        $palestra = '';
        $mod_Apresentação = '';
        $sub_Trabalhos = '';
        $resumo = '';
        $permiteEnvioTrabalho = '';
        $avaliaçãoOnline = '';
        $dataLimiteEnvio = '';
        $tamanhoMinResumo = '';
        $tamanhoMaxResumo = '';
        $maximoAutores = '';
        $certificadoOuvinte = '';
        $certificadoTrabalhos = '';
        $ativo = '';
        $certificadoOnline = '';
        $dataLimiteInscrição = '';
        $assinaturaEmails = '';
        $multimodlidade = '';
        $instruçãoEnvioArquivo = '';
        $internacional = '';
        $dataLimiteCorreçãoTrabalhos = '';
        $quantidadeVagas = '';
        
        if(isset($_POST['btnAdd'])){  

            $md = new MdCriar();

            $md->set_nome(isset($_POST['nome']) ? $_POST['nome'] : 'NULL');
            $md->set_email(isset($_POST['email']) ? $_POST['email'] : 'NULL');			
            $md->set_dataInicio(isset($_POST['dataInicio']) ? $_POST['dataInicio'] : 'NULL'); 			
            $md->set_dataFim(isset($_POST['dataFim']) ? $_POST['dataFim'] : 'NULL');		   
            $md->set_cargaHorMin(isset($_POST['edtChMin']) ? $_POST['edtChMin'] : 'NULL');			
            $md->set_cargaHorMax(isset($_POST['edtChMax']) ? $_POST['edtChMax'] : 'NULL');			
            $md->set_modInsc(isset($_POST['ckbModIns']) ? 'S' : 'N');
            $md->set_dataIniInsc(isset($_POST['edtDtInicioIns']) ? $_POST['edtDtInicioIns'] : 'NULL');			
            $md->set_dataLimInsc(isset($_POST['edtDtLimite']) ? $_POST['edtDtLimite'] : 'NULL');			
            $md->set_pago(isset($_POST['paga']) ? 'S': 'N');			
            $md->set_cartãoNac(isset($_POST['ckbCartãoNac']) ? 'S': 'N');
            $md->set_cartãoEst(isset($_POST['ckbCartãoEst']) ? 'S' : 'N');
            $md->set_areaConh(isset($_POST['ckbArCon']) ? 'S' : 'N');
            $md->set_palestra(isset($_POST['ckbPalestras']) ? 'S' : 'N');
            $md->set_mod_Apresentação(isset($_POST['ckbModApr']) ? 'S' : 'N');
            $md->set_sub_Trabalhos(isset($_POST['ckbSubTrab']) ? 'S' : 'N');
            $md->set_resumo(isset($_POST['ckbRes']) ? 'S' : 'N');
            $md->set_permiteEnvioTrabalho(isset($_POST['ckbEnvTrab']) ? 'S' : 'N');
            $md->set_avaliaçãoOnline(isset($_POST['ckbAvOn']) ? 'S' : 'N');
            $md->set_dataLimiteEnvio(isset($_POST['edtDtLimiteEnv']) ? $_POST['edtDtLimiteEnv'] : 'NULL');
            $md->set_tamanhoMinResumo(isset($_POST['edtTamMinRes']) ? $_POST['edtTamMinRes'] : 'NULL');
            $md->set_tamanhoMaxResumo(isset($_POST['edtTamMaxRes']) ? $_POST['edtTamMaxRes'] : 'NULL');
            $md->set_maximoAutores(isset($_POST['edtMaxAutor']) ? $_POST['edtMaxAutor'] : 'NULL');
            $md->set_certificadoOuvinte(isset($_POST['BgCertOuv']) ? $_POST['BgCertOuv'] : 'NULL'); 
            $md->set_certificadoTrabalhos(isset($_POST['edtBgCertTrab'])) ? $_POST['BgCertOuv'] : 'NULL';
            $md->set_ativo(isset($_POST['ckbAtivo']) ? 'S' : 'N');
            $md->set_certificadoOnline(isset($_POST['ckbCertOnline']) ? $_POST['ckbCertOnline'] : 'NULL');
            $md->set_dataLimiteInscrição(isset($_POST['edtDtLimiteIns']) ? $_POST['edtDtLimiteIns'] : 'NULL');
            $md->set_assinaturaEmails(isset($_POST['edtAssEmail']) ? $_POST['edtAssEmail'] : 'NULL');
            $md->set_multimodlidade(isset($_POST['ckbMultMod']) ? 'S' : 'N');
            $md->set_instruçãoEnvioArquivo(isset($_POST['edtInstEnvArq']) ? $_POST['edtInstEnvArq'] : 'NULL');
            $md->set_internacional(isset($_POST['ckbInternacional']) ? 'S' : 'N');
            $md->set_dataLimiteCorreçãoTrabalhos(isset($_POST['edtDtLimiteCorrecTrab']) ? $_POST['edtDtLimiteCorrecTrab'] : 'NULL');
            $md->set_quantidadeVagas(isset($_POST['edtVagas']) ? $_POST['edtVagas'] : NULL);

            if($md->Insert()){

                return redirect()->route('novo_evento.principal');
                    exit();
            }
            else{
                echo "<script> alert('Falha ao inserir!) </script>";
            }
        }

        $nome = Request::input('nome');
        $email = Request::input('email');
        $dataInicio = Request::input('dataInicio');
        $dataFim = Request::input('dataFim');
        $cargaHorMin = Request::input('edtChMin');
        $cargaHorMax = Request::input('edtChMax');
        $modInsc = Request::has('ckbModIns') ? 'S' : 'N';
        $dataIniInsc = Request::input('edtDtInicioIns');
        $dataLimInsc = Request::input('edtDtLimite');
        $pago = Request::has('paga') ? 'S' : 'N';
        $cartãoNac = Request::has('ckbCartãoNac') ? 'S' : 'N';
        $cartãoEst = Request::has('ckbCartãoEst') ? 'S' : 'N';
        $areaConh = Request::has('ckbArCon') ? 'S' : 'N';
        $palestra = Request::has('ckbPalestras') ? 'S' : 'N';
        $mod_Apresentação = Request::has('ckbModApr') ? 'S' : 'N';
        $sub_Trabalhos = Request::has('ckbSubTrab') ? 'S' : 'N';
        $resumo = Request::has('ckbRes') ? 'S' : 'N';
        $permiteEnvioTrabalho = Request::has('ckbEnvTrab') ? 'S' : 'N';
        $avaliaçãoOnline = Request::has('ckbAvOn') ? 'S' : 'N';
        $dataLimiteEnvio = Request::input('edtDtLimiteEnv');
        $tamanhoMinResumo = Request::input('edtTamMinRes');
        $tamanhoMaxResumo = Request::input('edtTamMaxRes');
        $maximoAutores = Request::input('edtMaxAutor');
        $certificadoOuvinte = Request::input('BgCertOuv');
        $certificadoTrabalhos = Request::input('edtBgCertTrab');
        $ativo = Request::has('ckbAtivo') ? 'S' : 'N';
        $certificadoOnline = Request::has('ckbCertOnline') ? 'S' : 'N';
        $dataLimiteInscrição = Request::input('edtDtLimiteIns');
        $assinaturaEmails = Request::input('edtAssEmail');
        $multimodlidade = Request::has('ckbMultMod') ? 'S' : 'N';
        $instruçãoEnvioArquivo = Request::input('edtInstEnvArq');
        $internacional = Request::has('ckbInternacional') ? 'S' : 'N';
        $dataLimiteCorreçãoTrabalhos = Request::input('edtDtLimiteCorrecTrab');
        $quantidadeVagas = Request::input('edtVagas');

        return view('criar', ['nome' => $nome,
        'email' => $email,
        'dataInicio' => $dataInicio,
        'dataFim' => $dataFim,
        'cargaHorMin' => $cargaHorMin, 
        'cargaHorMax' => $cargaHorMax, 
        'modInsc' => $modInsc, 
        'dataIniInsc' => $dataIniInsc,
        'dataLimInsc' => $dataLimInsc, 
        'pago' => $pago,
        'cartãoNac' => $cartãoNac,
        'cartãoEst' => $cartãoEst, 
        'areaConh' => $areaConh,
        'palestra' => $palestra,
        'mod_Apresentação' => $mod_Apresentação,
        'sub_Trabalhos' => $sub_Trabalhos,
        'resumo' => $resumo,
        'permiteEnvioTrabalho' => $permiteEnvioTrabalho,
        'avaliaçãoOnline' => $avaliaçãoOnline,
        'dataLimiteEnvio' => $dataLimiteEnvio,
        'tamanhoMinResumo' => $tamanhoMinResumo,
        'tamanhoMaxResumo' => $tamanhoMaxResumo,
        'maximoAutores' => $maximoAutores, 
        'certificadoOuvinte' => $certificadoOuvinte, 
        'certificadoTrabalhos' => $certificadoTrabalhos,
        'ativo' => $ativo,
        'certificadoOnline' => $certificadoOnline,
        'dataLimiteInscrição' => $dataLimiteInscrição,
        'assinaturaEmails' => $assinaturaEmails,
        'multimodlidade' => $multimodlidade,
        'instruçãoEnvioArquivo' => $instruçãoEnvioArquivo, 
        'internacional' => $internacional,
        'dataLimiteCorreçãoTrabalhos' => $dataLimiteCorreçãoTrabalhos,
        'quantidadeVagas' => $quantidadeVagas]);
    
    }

    public function Criar(){

        $nome = '';
        $email = '';
        $dataInicio = '';
        $dataFim = '';
        $cargaHorMin = '';
        $cargaHorMax = '';
        $modInsc = '';
        $dataIniInsc = '';
        $dataLimInsc = '';
        $pago = '';
        $cartãoNac = '';
        $cartãoEst = '';
        $areaConh = '';
        $palestra = '';
        $mod_Apresentação = '';
        $sub_Trabalhos = '';
        $resumo = '';
        $permiteEnvioTrabalho = '';
        $avaliaçãoOnline = '';
        $dataLimiteEnvio = '';
        $tamanhoMinResumo = '';
        $tamanhoMaxResumo = '';
        $maximoAutores = '';
        $certificadoOuvinte = '';
        $certificadoTrabalhos = '';
        $ativo = '';
        $certificadoOnline = '';
        $dataLimiteInscrição = '';
        $assinaturaEmails = '';
        $multimodlidade = '';
        $instruçãoEnvioArquivo = '';
        $internacional = '';
        $dataLimiteCorreçãoTrabalhos = '';
        $quantidadeVagas = '';

        if(isset($_POST['btnAdd'])){  

            $md = new MdCriar();

            $md->set_nome(isset($_POST['nome']) ? $_POST['nome'] : 'NULL');
            $md->set_email(isset($_POST['email']) ? $_POST['email'] : 'NULL');			
            $md->set_dataInicio(isset($_POST['dataInicio']) ? $_POST['dataInicio'] : 'NULL'); 			
            $md->set_dataFim(isset($_POST['dataFim']) ? $_POST['dataFim'] : 'NULL');		   
            $md->set_cargaHorMin(isset($_POST['edtChMin']) ? $_POST['edtChMin'] : 'NULL');			
            $md->set_cargaHorMax(isset($_POST['edtChMax']) ? $_POST['edtChMax'] : 'NULL');			
            $md->set_modInsc(isset($_POST['ckbModIns']) ? 'S' : 'N');
            $md->set_dataIniInsc(isset($_POST['edtDtInicioIns']) ? $_POST['edtDtInicioIns'] : 'NULL');			
            $md->set_dataLimInsc(isset($_POST['edtDtLimite']) ? $_POST['edtDtLimite'] : 'NULL');			
            $md->set_pago(isset($_POST['paga']) ? 'S': 'N');			
            $md->set_cartãoNac(isset($_POST['ckbCartãoNac']) ? 'S': 'N');
            $md->set_cartãoEst(isset($_POST['ckbCartãoEst']) ? 'S' : 'N');
            $md->set_areaConh(isset($_POST['ckbArCon']) ? 'S' : 'N');
            $md->set_palestra(isset($_POST['ckbPalestras']) ? 'S' : 'N');
            $md->set_mod_Apresentação(isset($_POST['ckbModApr']) ? 'S' : 'N');
            $md->set_sub_Trabalhos(isset($_POST['ckbSubTrab']) ? 'S' : 'N');
            $md->set_resumo(isset($_POST['ckbRes']) ? 'S' : 'N');
            $md->set_permiteEnvioTrabalho(isset($_POST['ckbEnvTrab']) ? 'S' : 'N');
            $md->set_avaliaçãoOnline(isset($_POST['ckbAvOn']) ? 'S' : 'N');
            $md->set_dataLimiteEnvio(isset($_POST['edtDtLimiteEnv']) ? $_POST['edtDtLimiteEnv'] : 'NULL');
            $md->set_tamanhoMinResumo(isset($_POST['edtTamMinRes']) ? $_POST['edtTamMinRes'] : 'NULL');
            $md->set_tamanhoMaxResumo(isset($_POST['edtTamMaxRes']) ? $_POST['edtTamMaxRes'] : 'NULL');
            $md->set_maximoAutores(isset($_POST['edtMaxAutor']) ? $_POST['edtMaxAutor'] : 'NULL');
            //$md->set_certificadoOuvinte(isset($_POST['BgCertOuv']) ? $_POST['BgCertOuv'] : 'NULL'); 
            //$md->set_certificadoTrabalhos(isset($_POST['edtBgCertTrab'])) ? $_POST['BgCertOuv'] : 'NULL';
            $md->set_certificadoOuvinte($this->insereImagemOuv());
            $md->set_certificadoTrabalhos($this->insereImagemTrab());
            $md->set_ativo(isset($_POST['ckbAtivo']) ? 'S' : 'N');
            $md->set_certificadoOnline(isset($_POST['ckbCertOnline']) ? $_POST['ckbCertOnline'] : 'NULL');
            $md->set_dataLimiteInscrição(isset($_POST['edtDtLimiteIns']) ? $_POST['edtDtLimiteIns'] : 'NULL');
            $md->set_assinaturaEmails(isset($_POST['edtAssEmail']) ? $_POST['edtAssEmail'] : 'NULL');
            $md->set_multimodlidade(isset($_POST['ckbMultMod']) ? 'S' : 'N');
            $md->set_instruçãoEnvioArquivo(isset($_POST['edtInstEnvArq']) ? $_POST['edtInstEnvArq'] : 'NULL');
            $md->set_internacional(isset($_POST['ckbInternacional']) ? 'S' : 'N');
            $md->set_dataLimiteCorreçãoTrabalhos(isset($_POST['edtDtLimiteCorrecTrab']) ? $_POST['edtDtLimiteCorrecTrab'] : 'NULL');
            $md->set_quantidadeVagas(isset($_POST['edtVagas']) ? $_POST['edtVagas'] : NULL);

            if($md->Insert()){

                return redirect()->route('novo_evento.principal');
                    exit();
            }
            else{
                echo "<script> alert('Falha ao inserir!) </script>";
            }

            $teste = Request::input('nome');

            $nome = $md->get_nome();
            $email = Request::input('email');
            $dataInicio = Request::input('dataInicio');
            $dataFim = Request::input('dataFim');
            $cargaHorMin = Request::input('edtChMin');
            $cargaHorMax = Request::input('edtChMax');
            $modInsc = Request::has('ckbModIns') ? 'S' : 'N';
            $dataIniInsc = Request::input('edtDtInicioIns');
            $dataLimInsc = Request::input('edtDtLimite');
            $pago = Request::has('paga') ? 'S' : 'N';
            $cartãoNac = Request::has('ckbCartãoNac') ? 'S' : 'N';
            $cartãoEst = Request::has('ckbCartãoEst') ? 'S' : 'N';
            $areaConh = Request::has('ckbArCon') ? 'S' : 'N';
            $palestra = Request::has('ckbPalestras') ? 'S' : 'N';
            $mod_Apresentação = Request::has('ckbModApr') ? 'S' : 'N';
            $sub_Trabalhos = Request::has('ckbSubTrab') ? 'S' : 'N';
            $resumo = Request::has('ckbRes') ? 'S' : 'N';
            $permiteEnvioTrabalho = Request::has('ckbEnvTrab') ? 'S' : 'N';
            $avaliaçãoOnline = Request::has('ckbAvOn') ? 'S' : 'N';
            $dataLimiteEnvio = Request::input('edtDtLimiteEnv');
            $tamanhoMinResumo = Request::input('edtTamMinRes');
            $tamanhoMaxResumo = Request::input('edtTamMaxRes');
            $maximoAutores = Request::input('edtMaxAutor');
            $certificadoOuvinte = Request::input('BgCertOuv');
            $certificadoTrabalhos = Request::input('edtBgCertTrab');
            $ativo = Request::has('ckbAtivo') ? 'S' : 'N';
            $certificadoOnline = Request::has('ckbCertOnline') ? 'S' : 'N';
            $dataLimiteInscrição = Request::input('edtDtLimiteIns');
            $assinaturaEmails = Request::input('edtAssEmail');
            $multimodlidade = Request::has('ckbMultMod') ? 'S' : 'N';
            $instruçãoEnvioArquivo = Request::input('edtInstEnvArq');
            $internacional = Request::has('ckbInternacional') ? 'S' : 'N';
            $dataLimiteCorreçãoTrabalhos = Request::input('edtDtLimiteCorrecTrab');
            $quantidadeVagas = Request::input('edtVagas');
    
            return view('criar', ['nome' => $nome,
            'email' => $email,
            'dataInicio' => $dataInicio,
            'dataFim' => $dataFim,
            'cargaHorMin' => $cargaHorMin, 
            'cargaHorMax' => $cargaHorMax, 
            'modInsc' => $modInsc, 
            'dataIniInsc' => $dataIniInsc,
            'dataLimInsc' => $dataLimInsc, 
            'pago' => $pago,
            'cartãoNac' => $cartãoNac,
            'cartãoEst' => $cartãoEst, 
            'areaConh' => $areaConh,
            'palestra' => $palestra,
            'mod_Apresentação' => $mod_Apresentação,
            'sub_Trabalhos' => $sub_Trabalhos,
            'resumo' => $resumo,
            'permiteEnvioTrabalho' => $permiteEnvioTrabalho,
            'avaliaçãoOnline' => $avaliaçãoOnline,
            'dataLimiteEnvio' => $dataLimiteEnvio,
            'tamanhoMinResumo' => $tamanhoMinResumo,
            'tamanhoMaxResumo' => $tamanhoMaxResumo,
            'maximoAutores' => $maximoAutores, 
            'certificadoOuvinte' => $certificadoOuvinte, 
            'certificadoTrabalhos' => $certificadoTrabalhos,
            'ativo' => $ativo,
            'certificadoOnline' => $certificadoOnline,
            'dataLimiteInscrição' => $dataLimiteInscrição,
            'assinaturaEmails' => $assinaturaEmails,
            'multimodlidade' => $multimodlidade,
            'instruçãoEnvioArquivo' => $instruçãoEnvioArquivo, 
            'internacional' => $internacional,
            'dataLimiteCorreçãoTrabalhos' => $dataLimiteCorreçãoTrabalhos,
            'quantidadeVagas' => $quantidadeVagas]);   

        }

        else if(isset($_POST['btnCancel'])){
            return redirect()->route('novo_evento.principal');
            exit();

        }
        return view('criar', ['nome' => $nome,
        'email' => $email,
        'dataInicio' => $dataInicio,
        'dataFim' => $dataFim,
        'cargaHorMin' => $cargaHorMin, 
        'cargaHorMax' => $cargaHorMax, 
        'modInsc' => $modInsc, 
        'dataIniInsc' => $dataIniInsc,
        'dataLimInsc' => $dataLimInsc, 
        'pago' => $pago,
        'cartãoNac' => $cartãoNac,
        'cartãoEst' => $cartãoEst, 
        'areaConh' => $areaConh,
        'palestra' => $palestra,
        'mod_Apresentação' => $mod_Apresentação,
        'sub_Trabalhos' => $sub_Trabalhos,
        'resumo' => $resumo,
        'permiteEnvioTrabalho' => $permiteEnvioTrabalho,
        'avaliaçãoOnline' => $avaliaçãoOnline,
        'dataLimiteEnvio' => $dataLimiteEnvio,
        'tamanhoMinResumo' => $tamanhoMinResumo,
        'tamanhoMaxResumo' => $tamanhoMaxResumo,
        'maximoAutores' => $maximoAutores, 
        'certificadoOuvinte' => $certificadoOuvinte, 
        'certificadoTrabalhos' => $certificadoTrabalhos,
        'ativo' => $ativo,
        'certificadoOnline' => $certificadoOnline,
        'dataLimiteInscrição' => $dataLimiteInscrição,
        'assinaturaEmails' => $assinaturaEmails,
        'multimodlidade' => $multimodlidade,
        'instruçãoEnvioArquivo' => $instruçãoEnvioArquivo, 
        'internacional' => $internacional,
        'dataLimiteCorreçãoTrabalhos' => $dataLimiteCorreçãoTrabalhos,
        'quantidadeVagas' => $quantidadeVagas]);
    }

    public function insereImagemOuv(){

        /* Marcos Codigo para tratativa de imagens */

        $targetDir = "C:/xampp/htdocs/inscricoes.imepac.edu.br/public/upload/certificados/"; 
        $nomeArquivo = isset($_FILES["BgCertOuv"]["name"]) ? $_FILES["BgCertOuv"]["name"] : "NULL";
        $targetFile = $targetDir . basename($_FILES["BgCertOuv"]["name"]); 
        $uploadOk = 1; 
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); 
        // Verifica se o arquivo é uma imagem real 
        $arqTemp = $_FILES["BgCertOuv"]["tmp_name"];
       /*$check = getimagesize($arqTemp); 

        if($check !== false) {
                echo "Arquivo é uma imagem - " . $check["mime"] . "."; $uploadOk = 1; 
        } 
        else {
            echo "Arquivo não é uma imagem."; $uploadOk = 0; 

        } */

        // Verifica se o arquivo já existe 
        if (file_exists($targetFile)) {
            $uploadOk = 0;
            } 

            // Verifica o tamanho do arquivo 
        if ($_FILES["BgCertOuv"]["size"] > 500000) {
            // Limite de 500KB 
            echo "Desculpe, o seu arquivo é muito grande."; 
            $uploadOk = 0; 
        } 

        // Permite apenas certos formatos de arquivo 
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
           
            $uploadOk = 0; 
        } // Verifica se $uploadOk está setado como 0 por causa de um erro 

        if ($uploadOk == 0) { 

            echo "<script>alert('Desculpe, seu arquivo não foi enviado.'</script>";

            // Se tudo estiver ok, tenta fazer o upload do arquivo 
        } 
        else { 
            if (move_uploaded_file($_FILES["BgCertOuv"]["tmp_name"], $targetFile)) {

                echo "O arquivo ". basename( $_FILES["BgCertOuv"]["name"]). " foi enviado com sucesso."; 

            } 
            else{                
                echo "Desculpe, houve um erro ao enviar seu arquivo."; 
            } 
        }
        
        return $nomeArquivo;
                    
    }

    public function insereImagemTrab(){

        session_start();

        /*Marcos Codigo para tratativa de imagens */    
        $targetDir = "C:/xampp/htdocs/inscricoes.imepac.edu.br/public/upload/certificados/"; 
        $nomeArquivo = isset($_FILES["edtBgCertTrab"]["name"]) ? $_FILES["edtBgCertTrab"]["name"] : "NULL";
        $targetFile = $targetDir . basename($_FILES["edtBgCertTrab"]["name"]); 
        $uploadOk = 1; 
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); 

        // Verifica se o arquivo já existe 
        if (file_exists($targetFile)) {
            $uploadOk = 0;
            } 

            // Verifica o tamanho do arquivo 
        if ($_FILES["edtBgCertTrab"]["size"] > 500000) {
            // Limite de 500KB 
            echo "Desculpe, o seu arquivo é muito grande."; 
            $uploadOk = 0; 
        } 

        // Permite apenas certos formatos de arquivo 
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            
            $uploadOk = 0; 
        } // Verifica se $uploadOk está setado como 0 por causa de um erro 

        if ($uploadOk == 0) { 

            echo "<script>alert('Desculpe, seu arquivo não foi enviado.'</script>";

            // Se tudo estiver ok, tenta fazer o upload do arquivo 
        } 
        else { 
            if (move_uploaded_file($_FILES["edtBgCertTrab"]["tmp_name"], $targetFile)) {

                echo "O arquivo ". basename( $_FILES["edtBgCertTrab"]["name"]). " foi enviado com sucesso."; 

            } 
            else{                
                echo "Desculpe, houve um erro ao enviar seu arquivo."; 
            } 
        }

        return $nomeArquivo;
                    
    }


   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MdCriar;
use Illuminate\Support\Facades\DB;

class CtUpdate extends Controller
{

    public function Initialize($id){

        $md = new MdCriar();

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
        $usuarios = '';
        $perfil =  '';
        
        if(isset($_POST['btnUpdt'])){

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
            $md->set_ativo(isset($_POST['ckbAtivo']) ? 'S' : 'N');
            $md->set_certificadoOnline(isset($_POST['ckbCertOnline']) ? $_POST['ckbCertOnline'] : 'NULL');
            $md->set_dataLimiteInscrição(isset($_POST['edtDtLimiteIns']) ? $_POST['edtDtLimiteIns'] : 'NULL');
            $md->set_assinaturaEmails(isset($_POST['edtAssEmail']) ? $_POST['edtAssEmail'] : 'NULL');
            $md->set_multimodlidade(isset($_POST['ckbMultMod']) ? 'S' : 'N');
            $md->set_instruçãoEnvioArquivo(isset($_POST['edtInstEnvArq']) ? $_POST['edtInstEnvArq'] : 'NULL');
            $md->set_internacional(isset($_POST['ckbInternacional']) ? 'S' : 'N');
            $md->set_dataLimiteCorreçãoTrabalhos(isset($_POST['edtDtLimiteCorrecTrab']) ? $_POST['edtDtLimiteCorrecTrab'] : 'NULL');
            $md->set_quantidadeVagas(isset($_POST['edtVagas']) ? $_POST['edtVagas'] : NULL);

            if($md->Atualiza($id)){

                $result = $md->LoadData($id);
                echo "<script> alert('Atualizado com sucesso!) </script>";
                //return view('seeScreen', ['result' => $result, 'id' => $id]);
                return redirect()->route('novo_evento.principal');
                exit();
            }
            else{
                echo "<script> alert('Falha ao inserir!) </script>";
            }
        }

        else if(isset($_POST['btnCancel'])){

            $result = $md->LoadData($id);
            return view('seeScreen', ['result' => $result, 'id' => $id]);

        }

        $result = $md->LoadData($id);

        return view('update', ['result' => $result, 'id' => $id]);

    }

}
<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Request;
use Illuminate\Database\Eloquent\Model;

class MdCriar extends Model
{

    public $nome= "";

    public $email= "";

    public $dataInicio= ""; 

    public $dataFim = "";

    public $cargaHorMin = "";

    public $cargaHorMax = "";

    public $modInsc = "";

    public $dataIniInsc= "";

    public $dataLimInsc = "";

    public $pago= "";

    public $cartãoNac= "";

    public $cartãoEst = "";

    public $areaConh= "";

    public $palestra= "";
    public $mod_Apresentação= "";

    public $sub_Trabalhos= "";

    public $resumo= "";

    public $permiteEnvioTrabalho= "";

    public $avaliaçãoOnline= "";

    public $dataLimiteEnvio= "";

    public $tamanhoMinResumo= "";

    public $tamanhoMaxResumo= "";

    public $maximoAutores = "";

    public $certificadoOuvinte= ""; 

    public $certificadoTrabalhos= "";

    public $ativo= "";

    public $certificadoOnline= "";

    public $dataLimiteInscrição= "";

    public $assinaturaEmails= "";

    public $multimodlidade= "";

    public $instruçãoEnvioArquivo = "";

    public $internacional= "";

    public $dataLimiteCorreçãoTrabalhos= "";

    public $quantidadeVagas= "";

    public $usuarios= "";

    public $perfil= "";

    public function get_nome(){

        return $this->nome;

    }

    public function set_nome($nome){

        $this->nome = $nome;

    }

    public function get_email(){

        return $this->email;

    }

    public function set_email($email){

        $this->email = $email;

    }

    public function get_dataInicio(){

        return $this->dataInicio; 

    } 

    public function set_dataInicio($dataInicio){

        $this->dataInicio = $dataInicio;

    } 

    public function get_dataFim(){

        return $this->dataFim;

    }

    public function set_dataFim($dataFim){

        $this->dataFim = $dataFim;

    }

    public function get_cargaHorMin(){

        return $this->cargaHorMin;

    }

    public function set_cargaHorMin($cargaHorMin){

        $this->cargaHorMin = $cargaHorMin;
    }

    public function get_cargaHorMax(){

        return $this->cargaHorMax;

    }

    public function set_cargaHorMax($cargaHorMax){

        $this->cargaHorMax = $cargaHorMax;

    }

    public function get_modInsc(){

        return $this->modInsc;

    }

    public function set_modInsc($modInsc){

        $this->modInsc = $modInsc;

    }

    public function get_dataIniInsc(){
        
        return $this->dataIniInsc;

    }

    public function set_dataIniInsc($dataIniInsc){

        $this->dataIniInsc = $dataIniInsc;

    }

    public function get_dataLimInsc(){

        return $this->dataLimInsc;

    }

    public function set_dataLimInsc($dataLimInsc){

        $this->dataLimInsc = $dataLimInsc;
    }

    public function get_pago(){

        return $this->pago;

    }

    public function set_pago($pago){
        
        $this->pago = $pago;

    }

    public function get_cartãoNac(){

        return $this->cartãoNac;

    }

    public function set_cartãoNac($cartãoNac){
        
        $this->cartãoNac = $cartãoNac;

    }

    public function get_cartãoEst(){

        return $this->cartãoEst;

    }

    public function set_cartãoEst($cartãoEst){

        $this->cartãoEst = $cartãoEst;

    }

    public function get_areaConh(){

        return $this->areaConh;

    }

    public function set_areaConh($areaConh){

        $this->areaConh = $areaConh;

    }

    public function get_palestra(){

        return $this->palestra;
    }

    public function set_palestra($palestra){

        $this->palestra = $palestra;
    }

    public function get_mod_Apresentação(){

        return $this->mod_Apresentação;

    }

    public function set_mod_Apresentação($mod_Apresentação){

        $this->mod_Apresentação = $mod_Apresentação;

    }
    public function get_sub_Trabalhos(){

        return $this->sub_Trabalhos;

    }

    public function set_sub_Trabalhos($sub_Trabalhos){

        $this->sub_Trabalhos = $sub_Trabalhos;

    }
    
    public function get_resumo(){

        return $this->resumo;

    }

    public function set_resumo($resumo){

        $this->resumo = $resumo; 

    }

    public function get_permiteEnvioTrabalho(){

        return $this->permiteEnvioTrabalho;

    }
    public function set_permiteEnvioTrabalho($permiteEnvioTrabalho){

        $this->permiteEnvioTrabalho = $permiteEnvioTrabalho;

    }
    
    public function get_avaliaçãoOnline(){

        return $this->avaliaçãoOnline;

    }
    public function set_avaliaçãoOnline($avaliaçãoOnline){

        $this->avaliaçãoOnline = $avaliaçãoOnline;

    }

    public function get_dataLimiteEnvio(){

        return $this->dataLimiteEnvio;
    
    }

    public function set_dataLimiteEnvio($dataLimiteEnvio){

        $this->dataLimiteEnvio = $dataLimiteEnvio;

    }

    public function get_tamanhoMinResumo(){

        return $this->tamanhoMinResumo;

    }

    public function set_tamanhoMinResumo($tamanhoMinResumo){

        $this->tamanhoMinResumo = $tamanhoMinResumo;

    }

    public function get_tamanhoMaxResumo(){

        return $this->tamanhoMaxResumo;
    }

    public function set_tamanhoMaxResumo($tamanhoMaxResumo){

        $this->tamanhoMaxResumo = $tamanhoMaxResumo;

    }

    public function get_maximoAutores(){

        return $this->maximoAutores;

    }

    public function set_maximoAutores($maximoAutores){

        $this->maximoAutores = $maximoAutores;

    }

    public function get_certificadoOuvinte(){

        return $this->certificadoOuvinte;

    } 

    public function set_certificadoOuvinte($certificadoOuvinte){

        $this->certificadoOuvinte = $certificadoOuvinte;

    }

    public function get_certificadoTrabalhos(){

        return $this->certificadoTrabalhos;

    }

    public function set_certificadoTrabalhos($certificadoTrabalhos){

        $this->certificadoTrabalhos = $certificadoTrabalhos;

    }

    public function get_ativo(){

        return $this->ativo;

    }

    public function set_ativo($ativo){

        $this->ativo = $ativo;

    }

    public function get_certificadoOnline(){

        return $this->certificadoOnline;

    }

    public function set_certificadoOnline($certificadoOnline){

        $this->certificadoOnline = $certificadoOnline;

    }

    public function get_dataLimiteInscrição(){

        return $this->dataLimiteInscrição; 

    }

    public function set_dataLimiteInscrição($dataLimiteInscrição){

        $this->dataLimiteInscrição = $dataLimiteInscrição;

    }

    public function get_assinaturaEmails(){

        return $this->assinaturaEmails;

    }

    public function set_assinaturaEmails($assinaturaEmails){

        $this->assinaturaEmails = $assinaturaEmails;

    }

    public function get_multimodlidade(){

        return $this->multimodlidade; 
    
    }

    public function set_multimodlidade($multimodlidade){

        $this->multimodlidade = $multimodlidade;

    }

    public function get_instruçãoEnvioArquivo(){

        return $this->instruçãoEnvioArquivo;

    }
    public function set_instruçãoEnvioArquivo($instruçãoEnvioArquivo){

        $this->instruçãoEnvioArquivo = $instruçãoEnvioArquivo;

    }

    public function get_internacional(){

        return $this->internacional;

    }

    public function set_internacional($internacional){

        $this->internacional = $internacional; 

    }

    public function get_dataLimiteCorreçãoTrabalhos(){

        return $this->dataLimiteCorreçãoTrabalhos;

    }

    public function set_dataLimiteCorreçãoTrabalhos($dataLimiteCorreçãoTrabalhos){

        $this->dataLimiteCorreçãoTrabalhos = $dataLimiteCorreçãoTrabalhos;

    }

    public function get_quantidadeVagas(){

        return $this->quantidadeVagas;

    }

    public function set_quantidadeVagas($quantidadeVagas){

        $this->quantidadeVagas = $quantidadeVagas;

    }

    public function get_usuarios(){

        return $this->usuarios;

    }

    public function set_usuarios($usuarios){

        $this->usuarios = $usuarios;
    }
    public function get_perfil(){

        return $this->perfil;

    }

    public function set_perfil($perfil){

        $this->perfil = $perfil;
    }
    

    public function Insert(){

        $nome = $this->get_nome();

        $defInstPagamento = "<p class=''text-justify''>
                                            Sua inscrição só será efetivada após a confirmação do pagamento.
                                        </p>
                                        <p class=''text-justify''>
                                            O pagamento deverá ser efetuado no departamento financeiro do Instituto Master de Ensino Presidente Antônio Carlos apresentando o comprovante de inscrição gerado pelo botão <b>EMITIR COMPROVANTE PARA PAGAMENTO</b> abaixo. Atente-se a data de vencimento.
                                        </p>";

                        $desEnvTrabAvaliador = "<p>Prezado Avaliador,</p>
                                            <p>Você recebeu um novo trabalho para avaliação:</p>

                                            <p>Acesse www.imepac.edu.br/inscricoes/avaliacao para visualizar os trabalhos. <br> 
                                            <b>Seu usuário é seu endereço de e-mail <br>
                                            Sua senha também é seu endereço de e-mail.</b> </p>
                                            
                                            
                                            <p>Atenciosamente, <br>
                                            Comissão Organizadora</p>";

                        $emailAprov = "<p><strong>$nome</strong></p>
                        <div dir=''auto''>Prezados autores,</div>
                        <div dir=''auto''>A Comiss&atilde;o Cient&iacute;fica do $nome tem a honra de informar que seu trabalho foi <strong>APROVADO</strong> para a apresenta&ccedil;&atilde;o durante o evento.</div>
                        <div dir=''auto''>&nbsp;</div>

                        <div dir=''auto'' style=''text-align: justify;''>Agradecemos a aten&ccedil;&atilde;o.</div>
                        <div dir=''auto'' style=''text-align: justify;''>Atenciosamente,</div>
                        <div dir=''auto'' style=''text-align: justify;''>Comiss&atilde;o Organizadora</div>";

                        $emailRepr = "<p style=''text-align: center;''><strong>III JORNADA ACADÊMICA DA EDUCAÇÃO FÍSICA</strong></p>
                                        <p>Prezados autores,<br />A Comiss&atilde;o Cient&iacute;fica da III JORNADA ACADÊMICA DA EDUCAÇÃO FÍSICA informa que<br />seu resumo <span style=''color: #ff0000;''><strong>N&Atilde;O</strong></span> foi aceito para a apresenta&ccedil;&atilde;o no nosso evento.</p>
                                        <hr />
                                        <p>Na oportunidade expressamos nossos agradecimentos pelo interesse, na expectativa<br />de poder contar com novas contribui&ccedil;&otilde;es em eventos posteriores do IMEPAC.</p>
                                        <div dir=''auto'' style=''text-align: justify;''>Atenciosamente,</div>
                                        <div dir=''auto'' style=''text-align: justify;''>Comiss&atilde;o Organizadora</div>";


        $nome = $this->get_nome();
        $email = $this->get_email();
        $dataInicio = $this->get_dataInicio();
        $dataFim = $this->get_dataFim();
        $pago = $this->get_pago();
        $cargaMin = $this->get_cargaHorMin();
        $cargaMax = $this->get_cargaHorMax();
        $modInsc = $this->get_modInsc();
        $dataInicInsc = $this->get_dataIniInsc();
        $dataLimInsc = $this->get_dataLimInsc();
        
        $cartNac = $this->get_cartãoNac();
        $cartEst = $this->get_cartãoEst();
        $arConhecimento = $this->get_areaConh();
        $palestra = $this->get_palestra();
        $modApre = $this->get_mod_Apresentação();
        $subTrab = $this->get_sub_Trabalhos();
        $resumo = $this->get_resumo();
        $envTrab = $this->get_permiteEnvioTrabalho();
        $avalOnline = $this->get_avaliaçãoOnline();
        $datLimEnv =  $this->get_dataLimiteEnvio();
        $tamMinRes = $this->get_tamanhoMinResumo();
        $tamMaxRes = $this->get_tamanhoMaxResumo();
        $maxAut = $this->get_maximoAutores();
        $cerfOuvi = $this->get_certificadoOuvinte();
        $cerTrab = $this->get_certificadoTrabalhos();
        $ativ = $this->get_ativo();
        $certOn = $this->get_certificadoOnline();
        $dataLimIns = $this->get_dataLimiteInscrição();
        $assEmail = $this->get_assinaturaEmails();
        $multimod = $this->get_multimodlidade();
        $instArq = $this->get_instruçãoEnvioArquivo();
        $international = $this->get_internacional();
        $dataLimCorTrabalho = $this->get_dataLimiteCorreçãoTrabalhos();
        $qtdVaga = $this->get_quantidadeVagas();

        
    $query = "insert into eventos values(NULL, '$nome',
            '$email',
            '$dataInicio', 
            '$dataFim' ,
            '$pago',
            '$defInstPagamento',
            '$modInsc' ,
            '$arConhecimento',
            '$modApre',
            '$palestra',            
             $cargaMin,
             $cargaMax,            
            '$dataInicInsc',
            '$dataLimInsc',
            '$subTrab',
            '$resumo',
            '$datLimEnv',
            '$desEnvTrabAvaliador',
            '$emailAprov',
            '$emailRepr',
            '$envTrab',
             $tamMinRes,
             $tamMaxRes,
            '$avalOnline',
             $maxAut,
            '$cerfOuvi', 
            '$cerTrab',
            '$ativ',
            '$certOn',
            '$dataLimIns',
            '$assEmail',
            '$multimod',
             NULL,
            '$instArq' ,
             NULL,
            '$international',
             NULL,
            '$cartNac',
            '$cartEst',
            '$dataLimCorTrabalho',
             $qtdVaga)";

             DB::statement($query);

             return redirect()->back()->with('success', 'Query executada com sucesso!');
    }

    public function LoadData($id){

        $bd = DB::select("select * from eventos where id = $id");

        return $bd;
    }

    public function Atualiza($id){

        $nome = $this->get_nome();

        $defInstPagamento = "<p class=''text-justify''>
                                            Sua inscrição só será efetivada após a confirmação do pagamento.
                                        </p>
                                        <p class=''text-justify''>
                                            O pagamento deverá ser efetuado no departamento financeiro do Instituto Master de Ensino Presidente Antônio Carlos apresentando o comprovante de inscrição gerado pelo botão <b>EMITIR COMPROVANTE PARA PAGAMENTO</b> abaixo. Atente-se a data de vencimento.
                                        </p>";

                        $desEnvTrabAvaliador = "<p>Prezado Avaliador,</p>
                                            <p>Você recebeu um novo trabalho para avaliação:</p>

                                            <p>Acesse www.imepac.edu.br/inscricoes/avaliacao para visualizar os trabalhos. <br> 
                                            <b>Seu usuário é seu endereço de e-mail <br>
                                            Sua senha também é seu endereço de e-mail.</b> </p>
                                            
                                            
                                            <p>Atenciosamente, <br>
                                            Comissão Organizadora</p>";

                        $emailAprov = "<p><strong>$nome</strong></p>
                        <div dir=''auto''>Prezados autores,</div>
                        <div dir=''auto''>A Comiss&atilde;o Cient&iacute;fica do $nome tem a honra de informar que seu trabalho foi <strong>APROVADO</strong> para a apresenta&ccedil;&atilde;o durante o evento.</div>
                        <div dir=''auto''>&nbsp;</div>

                        <div dir=''auto'' style=''text-align: justify;''>Agradecemos a aten&ccedil;&atilde;o.</div>
                        <div dir=''auto'' style=''text-align: justify;''>Atenciosamente,</div>
                        <div dir=''auto'' style=''text-align: justify;''>Comiss&atilde;o Organizadora</div>";

                        $emailRepr = "<p style=''text-align: center;''><strong>III JORNADA ACADÊMICA DA EDUCAÇÃO FÍSICA</strong></p>
                                        <p>Prezados autores,<br />A Comiss&atilde;o Cient&iacute;fica da III JORNADA ACADÊMICA DA EDUCAÇÃO FÍSICA informa que<br />seu resumo <span style=''color: #ff0000;''><strong>N&Atilde;O</strong></span> foi aceito para a apresenta&ccedil;&atilde;o no nosso evento.</p>
                                        <hr />
                                        <p>Na oportunidade expressamos nossos agradecimentos pelo interesse, na expectativa<br />de poder contar com novas contribui&ccedil;&otilde;es em eventos posteriores do IMEPAC.</p>
                                        <div dir=''auto'' style=''text-align: justify;''>Atenciosamente,</div>
                                        <div dir=''auto'' style=''text-align: justify;''>Comiss&atilde;o Organizadora</div>";


        $nome = $this->get_nome();
        $email = $this->get_email();
        $dataInicio = $this->get_dataInicio();
        $dataFim = $this->get_dataFim();
        $pago = $this->get_pago();
        $cargaMin = $this->get_cargaHorMin();
        $cargaMax = $this->get_cargaHorMax();
        $modInsc = $this->get_modInsc();
        $dataInicInsc = $this->get_dataIniInsc();
        $dataLimInsc = $this->get_dataLimInsc();
        
        $cartNac = $this->get_cartãoNac();
        $cartEst = $this->get_cartãoEst();
        $arConhecimento = $this->get_areaConh();
        $palestra = $this->get_palestra();
        $modApre = $this->get_mod_Apresentação();
        $subTrab = $this->get_sub_Trabalhos();
        $resumo = $this->get_resumo();
        $envTrab = $this->get_permiteEnvioTrabalho();
        $avalOnline = $this->get_avaliaçãoOnline();
        $datLimEnv =  $this->get_dataLimiteEnvio();
        $tamMinRes = $this->get_tamanhoMinResumo();
        $tamMaxRes = $this->get_tamanhoMaxResumo();
        $maxAut = $this->get_maximoAutores();
        $ativ = $this->get_ativo();
        $certOn = $this->get_certificadoOnline();
        $dataLimIns = $this->get_dataLimiteInscrição();
        $assEmail = $this->get_assinaturaEmails();
        $multimod = $this->get_multimodlidade();
        $instArq = $this->get_instruçãoEnvioArquivo();
        $international = $this->get_internacional();
        $dataLimCorTrabalho = $this->get_dataLimiteCorreçãoTrabalhos();
        $qtdVaga = $this->get_quantidadeVagas();

    $query = "update eventos set  nome = '$nome',
            email_organizador = '$email',
            data_inicio = '$dataInicio', 
            data_fim = '$dataFim' ,
            pago = '$pago',
            txt_instrucoes_pgto = '$defInstPagamento',
            modalidades_inscricao = '$modInsc' ,
            areas_conhecimento = '$arConhecimento',
            modalidades_apresentacao = '$modApre',
            palestras = '$palestra',            
            ch_palestra = $cargaMin,
            ch_max = $cargaMax,            
            data_inicio_inscricoes = '$dataInicInsc',
            data_limite_inscricoes_palestras = '$dataLimInsc',
            submissao_trabalhos = '$subTrab',
            resumo = '$resumo',
            data_limite_envio_trabalhos = '$datLimEnv',
            email_enviar_trab_avaliador = '$desEnvTrabAvaliador',
            email_aprovacao_trab = '$emailAprov',
            email_reprovacao_trab = '$emailRepr',
            envio_arquivo_trabalho = '$envTrab',
            tamanho_min_resumo = $tamMinRes,
            tamanho_max_resumo = $tamMaxRes,
            avaliacao_online = '$avalOnline',
            max_autores = $maxAut,
            ativo = '$ativ',
            certificado_online = '$certOn',
            data_limite_inscricoes = '$dataLimIns',
            assinatura_emails = '$assEmail',
            multimodalidade = '$multimod',
            txt_instrucoes_envio_arquivo = '$instArq' ,
            internacional = '$international',
            cartao_nacional = '$cartNac',
            cartao_estrangeiro = '$cartEst',
            data_limite_correcao_trabalhos = '$dataLimCorTrabalho',
            QTD_VAGAS = $qtdVaga where id = $id";

             DB::statement($query);

             return redirect()->back()->with('success', 'Query executada com sucesso!');
    }

    public function InsertUserEvent($idUser, $idEvent, $idPerfil){


        $query = "insert into user_perfil_evento values($idUser, $idEvent, $idPerfil)";

        DB::statement($query);

        return redirect()->back()->with('success', 'Query executada com sucesso!');
    }


    public function VerificaDados($idUser, $idEvent ){

        $query = DB::select("select * from user_perfil_evento  where id_usuario = $idUser and id_evento = $idEvent");

        return $query;
    }

    public function VerificaUsuariosEvento($id){

        $query = DB::select("select usu.id as id, usu.nome as nome from user_perfil_evento upe left join usuarios usu on(usu.id = upe.id_usuario) where id_evento = $id ");

        return $query;

    }

    public function RetornaEvento($id){

        $query = DB::select("select * from eventos where id = $id");

        return $query;
    }

    public function InsertArea($area){

        $query = "insert into areas_conhecimento values (NULL, '$area')";

        DB::statement($query);

        return redirect()->back()->with('success', 'Query executada com sucesso!');
    }


    public function PegaUltimaArea($id){

        $query = DB::select("select * from areas_conhecimento  order by id desc limit 1");


        foreach($query as $p){

        }

        $insert = "insert into eventos_areas values($id, $p->id)";

        DB::statement($insert);

        return redirect()->back()->with('success', 'Query executada com sucesso!');
    }

    public function InsertModalidade($valueOpt){

        $query = "insert into modalidades_inscricao values(null, '$valueOpt')";

        DB::statement($query);

        return redirect()->back()->with('success', 'Query executada com sucesso!');    
    }

    public function LigaMod($evento, $dtIniInscricoes, $dtLimIscricoes, $valor){

        $insertEvento = "insert into eventos_modalidades_inscricao
                            select null as id, 
                            $evento as id_evento,
                            (select id from modalidades_inscricao order by id desc limit 1) as id_modalidade_inscricao,
                            '$dtIniInscricoes' as data_inicio_inscricao,
                            '$dtLimIscricoes' as data_limite_inscricao, 
                            $valor as valor from eventos_modalidades_inscricao emi limit 1";

        DB::statement($insertEvento);

        return redirect()->back()->with('success', 'Query executada com sucesso!');
    }

    public function ResgataUsuario(){

        $query = DB::select("select * from usuarios where ativos = 'S'");

        return $query; 
    }

    
}

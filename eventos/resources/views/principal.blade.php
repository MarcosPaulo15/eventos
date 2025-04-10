<?php 
                
    $user_id = isset($_POST['id']) ? $_POST['id'] : 0;

    $teste = $_SESSION['teste'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/principal.css">
    <title>Document</title>
</head>
<body>
<div class="toolbar"> 
<img src="{{ asset('images/logo_imepac_geral.png') }}" alt="Logo IMEPAC" class="logo">

    <div class="dropdown"> 
        <div class="menu-icon">...</div> 
        <div class="dropdown-content"> 
            <a href="{{ route('criar') }}">Novo Evento</a> 
            <?php 

                if($teste == '531' || $teste == '545'){
            ?>
                <a href="{{ route('newUser') }}">Novo Usuário</a> 
            <?php }?>
            
            <a href="{{ route('login') }}">Sair</a> 
        </div>
    </div>

</div>

<div class="searchBar">
                
            <?php 

                if($teste == '531' || $teste == '545'){
            ?>
                <form action="{{ route('novo_evento.principal') }}" method="post"> 
                    @csrf
                    <center>
                    <label for=""> <b>Pesquisar</b></label>
                    <input type="text" name="search">
                    <button type="submit" value="Buscar" class="btnBuscar" name="btnBuscar"> 
                        <i class="fa-solid fa-magnifying-glass"></i> Buscar
                    </button>
                    <br>
                    <br>
                </center>
                </form>
                <?php
            }?>
        </div>
<main class="cabecalho">

        <table>
            <div>
                <th>
                    <th>Id</th>                    
                    <th>Evento</th>
                <form action="{{ route('novo_evento.principal') }}" method="post"> 
                @csrf
                <?php
                   
                   if($primeira != 0){
                ?>
                    
                <th><button name="btnBack"><i class="fa-solid fa-chevron-left"></i></button></th>

                <?php
                }
                ?>
                <?php 
                   if($primeira < $filterPage){
                ?>
                <th><button type="submit" value="btnNext" class="btnNext" name="btnNext"> 
                    <i class="fa-solid fa-chevron-right">
                </button></th>  
                <?php
                }
                ?>

                </form>  
                                   
                </th>
            </div>            

            <?php
            //if ($query->rowCount() > 0) {
               /* while($row = $query->fetch(PDO::FETCH_ASSOC)){
                    $note ['id'] = $row['ID'];
                    $note ['nome'] = $row['NOME'];

                    $encodeVarEvent = base64_encode($note['id']);
                    $encodeVarUser = base64_encode($user_id);*/
                    
                    foreach($result as $p):
            ?>
                <tr>
                    <td><a href="{{ route('seeScreen', ['id' => $p->id]) }}" class="icoEye"><i class="fa-solid fa-eye"></i></a></td>
                    <td> <?php echo $p->id;?> </td>
                    <td> <?php echo $p->nome; ?> </td>
                </tr>            

            <?php
             endforeach
            /*}            
            }else {
                echo "Não existe dados para essa consulta. ";
            }*/
            ?>
        </table>
        
    </main>
</body>
</html>
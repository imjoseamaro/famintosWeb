<?php 
    include 'conexao.php';

    $nome = $_POST['nome_cad'];
    $email = $_POST['email_cad'];
    $senha = $_POST['senha_cad'];

    
    #echo $nome .'<br>';
    #echo $email .'<br>';
    #echo $senha .'<br>';

    $consulta = $cn->query("select ds_email from tbl_usuario where ds_email = '$email'");
    $exibe = $consulta ->fetch(PDO::FETCH_ASSOC);

    if($consulta->rowCount() == 1) {
        header('location:erro1.php');
    }else{
        $incluir = $cn->query("
        insert into tbl_usuario(nm_usuario,ds_email,ds_senha)
        values('$nome','$email','$senha')");
        header('location:ok.php');
    }  
?>
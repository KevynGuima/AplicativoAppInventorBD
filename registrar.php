<?php
    incrude_once 'conexao.php'

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];

    $sql2 = $dbcon->query("SELECT * FROM tblogin WHERE email='$email' AND senha='$senha'")

    if(mysqli_num_rows($sql2)>0){
        echo "email_erro";
    }else{
        //echo "vai continuar...";
        //vamos deixar fazer o registro -> INSERT
        $sql3 = $dbcon->query("INSERT INTO tblogin(nome,email,senha) VALUES ('$nome','$email','$senha')");

        if($sql3){
            echo "registro_ok";
        }else{
            echo "registro_erro";
        }
    }
?>
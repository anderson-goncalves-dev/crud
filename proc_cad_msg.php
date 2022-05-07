<?php
    session_start();
    include_once 'db.php';

    $sendCadCont = filter_input(INPUT_POST, 'sendCadCont', FILTER_SANITIZE_STRING);
    


    if($sendCadCont){
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);

        $result_msg_cont="INSERT INTO alunos(nome,cpf,idade,telefone,endereco) VALUES(:nome,:cpf,:idade,:telefone,:endereco)";

        $insert_msg_cont=$db->prepare($result_msg_cont);
        $insert_msg_cont->bindParam(':nome', $nome);
        $insert_msg_cont->bindParam(':cpf', $cpf);
        $insert_msg_cont->bindParam(':idade', $idade);
        $insert_msg_cont->bindParam(':telefone', $telefone);
        $insert_msg_cont->bindParam(':endereco', $endereco);


        if($insert_msg_cont->execute()){
            header("Location: cadastro.php");
        }else{
            $_SESSION['msg']= "<p>Mensagem não enviada com sucesso</>";
        header("Location: cadastro.php");
        }


    }else{
        $_SESSION['msg']= "<p>Mensagem não enviada com sucesso</>";
        header("Location: cadastro.php");
    }


?>
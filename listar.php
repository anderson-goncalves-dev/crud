<?php
     session_start();
     include_once 'db.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
    <header>
        <title>Lista de alunos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
    </header>
    <body>
        <main class="container">
            <header >
                <div class="logo"><img src="imagens/download.png" alt=""></div>
                <div class="titulo"><h1>Análise e desenvolvimento de sistemas</h1></div>
               
            </header>
            <article class="principal">
            
                    <a href="index.php"><strong>Home</strong></a>
                <a href="cadastro.php"><strong>Cadastrar</strong></a>
            
            <h1>Lista de alunos</h1>
    <div class="lista">
    <?php 
        $result_msg_cont="SELECT *FROM alunos";

        $resultado_msg_cont = $db->prepare($result_msg_cont);

        $resultado_msg_cont->execute();

        while($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)){
            echo "--ID: " .  $row_msg_cont['id_aluno'] . "<br>";
            echo "--Nome: " .  $row_msg_cont['nome'] . "<br>";
            echo "--Idade: " .  $row_msg_cont['idade'] . "<br>";
            echo "--Telefone: " .  $row_msg_cont['telefone'] . "<br>";
            echo "--CPF: " .  $row_msg_cont['cpf'] . "<br>";
            echo "--Endereço: " .  $row_msg_cont['endereco'] . "<br><hr><br>";
        }
    ?>
                
    </div>
               
            </article>
        </main>
    </body>


</html>
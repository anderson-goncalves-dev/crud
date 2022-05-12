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
    
    <div>
     <table class="tabela">
         <thead>
             <tr>
                 <th>ID</th>
                 <th>Nome</th>
                 <th>Idade</th>
                 <th>Telefone</th>
                 <th>Endereço</th>
             </tr>
        </thead>
        <tbody>        
    <?php 
    
    $result_msg_cont="SELECT *FROM alunos";

    $resultado_msg_cont = $db->prepare($result_msg_cont);

    $resultado_msg_cont->execute();

    $row_msg_cont = $resultado_msg_cont->fetchAll(PDO::FETCH_ASSOC);
        foreach($row_msg_cont as $row){
            echo "<tr>";
            echo("<td>{$row['id_aluno']}</td>");
            echo("<td>{$row['nome']}</td>");
            echo("<td>{$row['idade']}</td>");
            echo("<td>{$row['telefone']}</td>");
            echo("<td>{$row['endereco']}</td>");
            echo "</tr>";
        }    
    
?>
        </tbody>
    </table>
    </div>
               
            </article>
        </main>
    </body>


</html>
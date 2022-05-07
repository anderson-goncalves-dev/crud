<?php
     session_start();   
?>
<!DOCTYPE html>
<html lang="pt-br">
    <header>
        <title>cadastro</title>
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
            <form  method="POST" action="proc_cad_msg.php">
            
                <a href="index.php"><strong>Home</strong></a>
                <a href="listar.php"><strong>Lista</strong></a>
         <h1>Cadastrar</h1>
         <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
         ?>
         <label for="nome">Nome</label>
         <input type="text" name="nome">
         <br><br>
         <label for="idade">idade</label>
         <input type="number" name="idade">
         <br><br>
         <label for="cpf">CPF</label>
         <input type="text" name="cpf">
         <br><br>
         <label for="telefone">telefone</label>
         <input type="text" name="telefone">
         <br><br>
         <label for="endereco">Endereço</label>
         <input type="text" name="endereco">
         <br><br>
         <input type="submit" value="Cadastrar" name="sendCadCont">
     </form>          
            </article>
        </main>
    </body>
</html>
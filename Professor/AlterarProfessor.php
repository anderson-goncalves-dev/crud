<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Professor.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <title>Alteração de professores - WEB I</title>
</head>

<body>
   <?php  
      // Alterar

      $id    = $_POST['id'];
      $nome  = $_POST['nome'];
      $endereco = $_POST['endereco'];
     
       

       if ( isset($_POST['alterarDados'])):
       {
         echo "entrou no post";
        $professor = new Professor;
           $professor->setNome($nome);
           $professor->setEndereco($endereco);
           $professor->update($id);
        }
     endif;
    ?>



<form method='post' action="">
    <label for='Nome'> Nome:</label>
    	<input type="text" name="nome" value="<?php echo $nome;?>"/>;
    <label for='endereço'> Endereço: </label>    
    	<input type="text" name="endereco"value="<?php echo $endereco;?>"/>;
        <input type="hidden" name="id" value="<?php echo $id;?>"/>
         <input type="submit" name="alterarDados"/>
      
         <a href=ListarProfessor.php>lista de professores</a>
    </form>
            <!-- Fim da tabela -->




    </form>

</body>
</html>

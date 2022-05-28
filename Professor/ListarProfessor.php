<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Professor.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <title>Lista de professores - WEB I</title>
</head>

<body>
   
    <!-- Inicio da tabela -->
    <table class="table">
                <thead>
                    <tr class="active">
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Endereco</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $professor=New Professor;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $id = $_POST['id'];
                        
                        $professor->delete($id);
                    }
                                                         
                    
                    

                    foreach ($professor->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->id;?> </td>

                        <td> <?php echo $value->nome;?> </td>


                        <td> <?php echo $value->endereco;?> </td>
                    <td>

                        <form method="post" action="AlterarProfessor.php">
                                <input name="id" type="hidden" value="<?php echo $value->id;?>"/>                  
                                <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>
                                <input name="endereco" type="hidden" value="<?php echo $value->endereco;?>"/>

                                <button name="alterar" type="submit">Alterar</button>
                         </form>
                        <td>
                            <form method="post" >
                                <input name="id" type="hidden" value="<?php echo $value->id;?>"/>
                                <button name="excluir" type="submit" >Excluir</button>
                            </form>
                        </td>

                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
            <!-- Fim da tabela -->




    </form>

</body>
</html>

<?php
try{
    $db = new PDO(dsn:'mysql:host=localhost;dbname=escola',username:'root',password:'191225');
}
catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}

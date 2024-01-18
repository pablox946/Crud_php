<?php
//importa classes
require_once './classes.php';
//Inicia a conexão com o banco
$psa = new Pessoa;

if($_POST["inserir"] === "TRUE"){
   $nome = $_POST["nome"];
   $tel = $_POST["tel"];
   $obs = $_POST["obs"];

   try{
    $psa->addPessoa($nome, $obs, $tel);
   } catch(Exceptio $e) {
    echo "Erro";
   }
   
}


?>
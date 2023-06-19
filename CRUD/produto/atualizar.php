<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_POST['cod'];
   $desc = $_POST['desc'];
   $peso = $_POST['peso'];
   $quantidade = $_POST['quantidade'];
   $valor = $_POST['valor'];
   

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `produto` SET  `desc`= ?, `peso`= ?, `quantidade`= ?, `valor`= ? WHERE  `cod`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("siiii", $desc, $peso, $quantidade, $valor, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário aaaaaaa
   header("Location: index.php");
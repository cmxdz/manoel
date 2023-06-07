<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //verifica se o nome, login e senha foram enviado
   //do formulário
   if(isset($_POST['desc']) && isset($_POST['peso']) &&
     isset($_POST['quantidade']) && isset($_POST['valor'])){

      //faz o upload da foto do usuário
      require_once "faz_upload.php";

   $desc = $_POST['desc'];
   $peso = $_POST['peso'];
   $quantidade = $_POST['quantidade'];
   $valor = $_POST['valor'];
   $foto = $nome_foto;

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `produto` (`desc`, `peso`, `quantidade`, `valor`, foto) VALUES (?, ?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("siiis", $desc, $peso, $quantidade, $valor, $foto);

   //executa o comando
   $comando->execute();

}
   //volta para o formulário
   header("Location: index.php");

   








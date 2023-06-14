<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php"; 

   //cria uma variável com um comando SQL
   $SQL = "SELECT distinct valor FROM produto";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //executa o comando
   $comando->execute();

//pegar os resultados da consulta - todas as linhas de resultados
$resultados = $comando->get_result();

//pega todas as linha de resultado da consulta
$valores = [];
while ($c = $resultados->fetch_object()){
   $valores[] = $c;
}

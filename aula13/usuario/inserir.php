<?php 
        // importa o arquivo de conexão
            require_once "../conexao.php";


    // cria uma váriavel com um comando SQL
    $SQL = "INSERT INTO `usuario` (`nome`, `login`, `senha`) VALUES ('manoel', 'admin123', '123');";


    // prepara o comando para ser executado no mysql
    $comando = $conexao->prepare($SQL);

    // executa o comando
    $comando->execute();



<?php
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
?>
    <div class="container">
    <h1> Cadastro de produtos </h1>
    <hr>

    <form action="<?php echo isset($produto) ? 
                            "atualizar.php" : 
                            "inserir.php"; ?>"

    method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="cod" value="<?php echo $produto->cod ?? ""; ?>"><br>

        <label class="form-label"> Descrição </label><br>
        <input type="text" class="form-control" name="desc" value="<?php echo $produto->desc ?? ""; ?>"><br>

        <label class="form-label"> Peso </label> <br>
        <input class="form-control" name="peso" value="<?php echo $produto->peso ?? ""; ?>"><br>

        <label class="form-label"> Quantidade </label><br>
        <input type="text" class="form-control" name="quantidade" value="<?php echo $produto->quantidade ?? ""; ?>"><br>

        <label class="form-label"> Valor </label><br>
        <input type="text" class="form-control" name="valor" value="<?php echo $produto->valor ?? ""; ?>"><br>

        <label class="form-label"> Foto </label><br>
        <input type="file" class="form-control" name="foto"><br>

        <button type="submit" class="btn btn-primary">Inserir</button>
        
    </form>
    
    </div>

    <?php require_once "../template/rodape.php"; ?>
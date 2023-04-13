<?php

    require ("conn.php");

    if (isset($_GET['idsolicitacoes'])){
        $idsolicitacoes = $_GET['idsolicitacoes'];
    }
        else{
            header("Location: lisarSolicitacoes.php");
    }

    $tabela = $pdo->prepare("SELECT * FROM solicitacoes WHERE idsolicitacoes=:idsolicitacoes;");

    $tabela->execute(array(':idsolicitacoes'=>$idsolicitacoes));
    $rowTable = $tabela->fetchAll();

?>

<!DOCTYPE HTML>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Editar Solicitacoes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    </head>

    <body>
        <form action="crud/edit_solicitacoes.php" method="post">
        <div class="quadrado">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" value=<?php echo $rowTable[0]['nome']?>>
    </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Solicitacoes</label>
            <input type="text" name="solicitacoes" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" value=<?php echo $rowTable[0]['solicitacoes']?>>
    </div>
                <br>
                <div class= "form-group offset-md-4">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Enviar</button>    
                    </div>
                </div>
                <input type="hidden" name='idsolicitacoes' value=<?php echo $rowTable[0]['idsolicitacoes']?>>
            </form>
            <div id="resultado"></div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        
    </body>
</html>
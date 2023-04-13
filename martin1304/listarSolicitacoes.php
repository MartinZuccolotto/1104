<?php
  require("conn.php");
  include("protect.php");

  $tabela = $pdo->prepare("SELECT idsolicitacoes, nome, solicitacoes FROM solicitacoes;");

  $tabela->execute();

  $rowTabela = $tabela->fetchAll();

  if (empty($rowTabela)){
    echo "<script>
        alert('Tabela Está Vazia!')
        </script>";
  };
?>

<!DOCTYPE HTML>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Tabela de solicitacoes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    </head>

    <body style="background-color: black;">
        <div class="container">
            <h1 style="text-align:center; color: white;">Tabela de solicitacoes</h1>
            <table class="table table-dark table-striped">
  ...

  <thead>
    <tr class="retprin" >
      <th class="id" scope="col">Id</th>
      <th class="senha" scope="col">Solicitacoes</th>
      <th class="login" scope="col">Nome</th>
      
      <th class="senha" scope="col">EDITAR</th>
      <th class="senha" scope="col">DELETAR</th>

    </tr>
  </thead>
  <tbody>
    <?php
    foreach($rowTabela as $linha){
      echo '<tr>';
      echo "<th class='retidsolicitacoes text' scope='row'>".$linha['idsolicitacoes']."</th>";
      echo "<td class='retsolicitacoes text'>".$linha['solicitacoes']."</td>";
      echo "<td class='retnome text'>".$linha['nome']."</td>";
      echo '<td class="editar"><a href=edit_soli.php?idsolicitacoes='.$linha['idsolicitacoes'].' type="button" class="bnt" value="EDITAR">EDITAR</a></td>';
      echo '<td class="deletar"><a href=crud\del_solicitacoes.php?idsolicitacoes='.$linha['idsolicitacoes'].' type="button" class="bnt2">DELETAR</a></td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
      </body >
</html>
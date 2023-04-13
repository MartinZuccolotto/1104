<?php

    require('../conn.php');

    if(isset($_GET['idsolicitacoes'])){
        $idsolicitacoes = $_GET['idsolicitacoes'];
    }else{
        header("Location: ../listarSolicitacoes.php");
    }
    
    $del_solicitacoes = $pdo->prepare('DELETE from solicitacoes where idsolicitacoes = :idsolicitacoes;');
    $del_solicitacoes->execute(array(':idsolicitacoes'=>$idsolicitacoes));

    echo "<script>
        alert('Usuario Deletado!')
        window.location.href='../listarSolicitacoes.php'
        </script>";
?>
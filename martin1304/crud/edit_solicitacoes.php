<?php
    require("../conn.php");

    $idsolicitacoes = $_POST['idsolicitacoes'];
    $solicitacoes = $_POST['solicitacoes'];
    $nome = $_POST['nome'];

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    if(empty($idsolicitacoes) || empty($solicitacoes) || empty($nome)){
        echo "Voce precida preencher todos os campos";
    }else{
        $update_solicitacoes = $pdo->prepare('UPDATE solicitacoes set solicitacoes = :solicitacoes, nome = :nome   
        where idsolicitacoes = :idsolicitacoes');


        $update_solicitacoes->execute(array(
            ':idsolicitacoes' => $idsolicitacoes,
            ':solicitacoes' => $solicitacoes,
            ':nome' => $nome
        ));
    }
?>
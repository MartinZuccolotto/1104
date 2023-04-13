<?php
    include ('../conn.php');

    $nome = $_POST['nome'];
    $solicitacoes = $_POST['solicitacoes'];

    if(empty($nome) || empty($solicitacoes)){
        echo "Voce precida preencher todos os campos";
    }else{
        $cad_solicitacoes = $pdo->prepare('INSERT INTO solicitacoes (nome, solicitacoes) values (:nome, :solicitacoes)');
        $cad_solicitacoes->execute(array(
            ':nome'=>$nome,
            ':solicitacoes'=>$solicitacoes,
        )
        );
        
        echo "<script>
        alert('solicitacao Cadastrada!')
        window.location.href='../listarSolicitacoes.php'
        </script>";
    }
?>
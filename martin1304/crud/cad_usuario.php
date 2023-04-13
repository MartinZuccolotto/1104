<?php
    include ('../conn.php');

    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $sobrenome = $_POST['sobrenome'];

    if(empty($nome) || empty($sobrenome) || empty($login) || empty($senha)){
        echo "Voce precida preencher todos os campos";
    }else{
        $cad_usuario = $pdo->prepare('INSERT INTO martin (nome, login , senha, sobrenome) values (:nome, :login, :senha,  :sobrenome)');
        $cad_usuario->execute(array(
            ':nome'=>$nome,
            ':sobrenome'=>$sobrenome,
            ':login'=>$login,
            ':senha'=>$senha
        )
        );

        echo "<script>
        alert('Usuario Cadastrado!')
        window.location.href='../login.php'
        </script>";

    }

?>
<?php
if(!isset($_SESSION)){
    session_start();
}

print_r($_SESSION);

if(!isset($_SESSION['idusuario'])){
    die('VOCÊ NÃO PODE ACESSAR ESSA PAGINA, PORQUE NÃO ESTA LOGADO!<p><a href="login.php" class="">ENTRAR</a></p>');
}
?>
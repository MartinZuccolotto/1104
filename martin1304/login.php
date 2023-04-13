<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="login.css/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Logar</h3>
			</div>
			<div class="card-body">
				<form action="logar.php" method="post">
					<div>
                        <label for="">Login</label>
						<input type="text" class="form-control" placeholder="Login"  name="login">
					</div>
					<div>
                        <label for="">Senha</label>
						<input type="password" class="form-control" placeholder="Senha" name="senha">
					</div>
					<div>
                        <br>
						<button>Login</button>
						<a href="cadastro.php">Cadastrar</a>
						<br>
						<a href="logout.php">Sair</a>
					</div>
				</form>
			</div>
			<div>
				<div>
					Ainda não possui uma conta?<a href="cadastro.php">Clique aqui para cadastrar-se</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
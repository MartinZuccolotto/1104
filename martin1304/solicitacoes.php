

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html>
<head>
	<title>Solicitacoes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Solicitacoes</h3>
			</div>
			<div class="card-body">
				<form action="crud/cad_solicitacoes.php" method="post">
					<div >
                        <label for="">Nome</label>
						<input type="text" class="form-control" placeholder="Nome" name="nome">
					</div>
					<div>
                        <label for="">Solicitacoes</label>
						<input type="text" class="form-control" placeholder="Solicitacoes" name="solicitacoes">
					</div>
					<div>
                        <br>
						<button>Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
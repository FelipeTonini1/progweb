<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ASAE7</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<form action="/final" method="POST">
	@csrf
	<div class="row mb-5 id=topo">
		T
	</div>
	<div class="row">
		<div class="col-3 ">

		</div>
		<div class="col-6">
			<h1>Faça seu Cadastro</h1>
			<div class="form-floating mb-2">
				<input type="text" name="name" class="form-control" placeholder="Nome do Usuario" id="name_id" />
				<label for="name_id"> Nome de Usuario</label>
			</div>
			<div class="form-floating mb-2">
				<input type="text" name="endereco" class="form-control" placeholder="Seu Endereco" id="endereco_id" />
				<label for="endereco_id"> Seu Endereco</label>
			</div>
			<div class="form-floating mb-2">
				<input type="text" name="cep" class="form-control" placeholder="Seu CEP" id="cep_id" />
				<label for="cep_id"> Seu CEP</label>
			</div>
			<div class="form-floating mb-2">
				<input type="text" name="cidade" class="form-control" placeholder="Sua Cidade" id="cidade_id" />
				<label for="cidade_id"> Sua Cidade</label>
			</div>
				<select name="estado" id="estado">
				  <option value="SC">SC</option>
				  <option value="SP">SP</option>
				  <option value="MG">MG</option>
				  <option value="RJ">RJ</option>
				</select>
				<input type="submit" name="Entrar" class="btn btn-danger" />
			</div>
		<div class="col-3">
		</div>
	</div>
		
	</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</body>
</html>
@extends('template')



@section('conteudo')
<form action="final" method="POST">
	@csrf
	<div class="">
		<h1>Logar Na Central</h1>
		<div class="form-floating mb-2">
			<input type="text" name="name" class="form-control" placeholder="Nome do Usuario" id="name_id" />
			<label for="name_id"> Nome de Usuario</label>
		</div>
		<div class="form-floating mb-2">
			<input type="email" name="email" class="form-control" placeholder="Seu Email" id="email_id" />
			<label for="senha_id"> Seu Email</label>
		</div>
		<div class="form-floating mb-2">
			<input type="password" name="senha" class="form-control" placeholder="Sua Senha" id="senha_id" />
			<label for="senha_id"> Sua Senha</label>
		</div>
		
		<input type="submit" name="Entrar" class="btn btn-danger" />
		</div>
</form>		
@endsection('conteudo')
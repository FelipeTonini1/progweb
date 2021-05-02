@extends('template')


@section('conteudo')
<h1>Altera Clientes</h1>
<form action="{{route('cliente_alterar',['id'=> $u->id])}})}}" method="POST">
	@csrf
	<div class="">
		
		<div class="form-floating mb-2">
			<input type="text" name="nome" class="form-control" placeholder="Nome do Usuario" id="nome_id" />
			<label for="nome_id"> Nome de Usuario</label>
		</div>
		<div class="form-floating mb-2">
			<input type="email" name="email" class="form-control" placeholder="Seu Email" id="email_id" />
			<label for="senha_id"> Seu Email</label>
		</div>
		<div class="form-floating mb-2">
			<input type="password" name="senha" class="form-control" placeholder="Sua Senha" id="senha_id" />
			<label for="senha_id"> Sua Senha</label>
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
</form>		
@endsection('conteudo')
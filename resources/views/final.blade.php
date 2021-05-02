@extends('template')

@section('conteudo')
<h1 class="alert alert-{{ $tipo_resposta }}">{{ $resposta  }}</h1>

  @if ($tipo_resposta == 'success')

   <table class="table">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Endereço</th>
        <th>Cep</th>
        <th>Cidade</th>
        <th>Operações</th>
      </tr>
    @foreach ($cliente as $u)
      <tr>
          <td>{{$u->id}}</td>
          <td>{{$u->nome }}</td>
          <td>{{$u->email}}</td>
          <td>{{$u->endereco}}</td>
          <td>{{$u->cep}}</td>
          <td>{{$u->cidade}}</td>
          <td>
            <a href="{{route('cliente_editar',['id'=> $u->id])}}"class="btn btn-warning">Alterar</a> 
            <a href="{{route('cliente_excluir',['id' => $u->id])}}" class="btn btn-danger">Excluir</a>
          </td>
           
      </tr>
    @endforeach
  </table>
   @endif
    <a href="{{route('cliente_novo')}}" class="btn btn-primary">Adicionar Novo</a>

@endsection('conteudo')
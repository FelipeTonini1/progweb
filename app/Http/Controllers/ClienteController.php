<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    function telaInicial(){
    	return view('inicial');
    }

    function telaFinal(Request $req){
       	// verificar usuario e senha
    	$email = $req->input('email');
    	$senha = $req->input('senha');
    	
    	$u = Cliente::where('email', '=', $email)->first();
    	$us = Cliente::all();
    	
    	if ($u && $u->senha == $senha){
    		return view('final', [
    			'resposta' => "Acesso concedido",
    			'tipo_resposta' => 'success',
    			'clientes' => $us
    		]);
    	} else {
       		return view('final', [
    			'resposta' => "Acesso negado",
    			'tipo_resposta' => 'danger',
    			'clientes' => $us
    		]);
    	}
    }
    
    function novo(){
        return view('cliente_novo');
    }
    function inserir(Request $req){
        $nome = $req->input('nome');
        $email = $req->input('email');
        $senha = $req->input('senha');
        $endereco = $req->input('endereco');
        $cidade = $req->input('cidade');
        $cep = $req->input('cep');
        $estado = $req->input('estado');

        $u = new Cliente();
        $u->nome  =  $nome;
        $u->email  =  $email;
        $u->senha  =  $senha;
        $u->endereco  =  $endereco;
        $u->cidade  =  $cidade;
        $u->cep  =  $cep;
        $u->estado  =  $estado;
        $u->save();
        return redirect()->route('cliente_lista');
    }
    function alterar(Request  $req, $id){
        $u = Cliente::find($id);
        $u->nome = $req->input('nome');
        $u->email = $req->input('email');
        $u->senha = $req->input('senha');
		$u->endereco = $req->input('endereco');
        $u->cidade = $req->input('cidade');
        $u->cep = $req->input('cep');
        $u->estado = $req->input('estado');
        $u->save();

        return redirect()->route('cliente_lista');

    }
    function tela_principal(){
        $us = Cliente::all();
        return view('final', [
                'resposta' => "Acesso concedido",
                'tipo_resposta' => 'success',
                'cliente' => $us]);
    }
    function editar($id){
        $u =  Cliente::findOrFail($id);
        return view('cliente_editar',['u' =>$u]);
    }
    function excluir($id){
        $u = Cliente::findOrFail($id);
        $u->delete();
        return redirect()->route('cliente_lista');

    }

}

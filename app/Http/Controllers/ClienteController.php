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

    	$nome = $req->input('nome');
    	$endreco = $req->input('endreco');
    	$cep = $req->input('cep');
    	$cidade = $req->input('cidade');
    	$estado = $req->input('estado');
    	$u =  Cliente::where('nome','=',$nome)->first();
		

    	if ($u){
    		return view ('final',['resposta'=>"Falhou Preencha Todos os Campos", "tipo_resposta"=>'danger']);
    		
	    	
    	}else{
    		return view ('final',['resposta'=>"Cadastro Realizado", "tipo_resposta"=>'success']);
    	}
    }
}

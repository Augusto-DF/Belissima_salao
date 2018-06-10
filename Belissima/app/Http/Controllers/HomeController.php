<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	$usuarios = DB::table('usuario')->get();
    	
    	return view('usuarios.index', [
    		'usuarios'=>$usuarios
    	]);
    }
    
    public function create(){
    	return view('usuarios.create');
    }

    public function store(Request $request){
    	$usuario = DB::table('usuario')->insert(
    		array_merge(
    			['senha' => $request->get('password')],
    			$request->only('nome', 'email')
    		)
    	);

    	return redirect()->route('usuario.index');
    }
}

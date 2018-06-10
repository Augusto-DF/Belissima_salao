@extends('layouts.base')

@section('conteudo')

<form method="POST" action="{{ route('usuario.store')}}">
	{{csrf_field()}}
  	<div class="form-row">
	  	<div class="form-group col-md-6">
	      <label for="inputPassword4">Nome</label>
	      <input type="text" class="form-control" id="inputPassword4" placeholder="Nome" name="nome">
	    </div>
	    <div class="form-group col-md-6">
	      <label for="inputEmail4">Email</label>
	      <input type="email" class="form-control" id="inputEmail4" placeholde r="Email" name="email">
	    </div>
	    <div class="form-group col-md-6">
	      <label for="inputEmail4">Senha</label>
	      <input type="password" class="form-control" id="inputEmail4" placeholder="Senha" name="password">
	    </div>
	</div>
  	<button type="submit" class="btn btn-primary">Sign in</button>
</form>
@endsection
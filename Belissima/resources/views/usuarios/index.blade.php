@extends('layouts.base')

@section('conteudo')
	
	<div class="col-md-4">	
		<table class="table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Email</th>
				</tr>
			</thead>

			<tbody>
				@foreach($usuarios as $usuario)
				<tr>
					<td>
						{{$usuario->nome}}
					</td>
					<td>
						{{$usuario->email}}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection

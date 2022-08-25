@extends('layout')

@section('content')
	<div class="col-sm-8">
		<h2>
			Listado de Vehículos
		<a href="{{ route('vehiculos.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('vehiculos.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>NOMBRE DEL AUTOMOVIL</th>
					<th>PRECIO</th>
					<th>MARCA</th>
					<th>MODELO</th>
					<th>AÑO</th>
                    <th colspan="3">ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				@foreach($vehiculos as $vehiculo)
				<tr>
					<td>{{ $vehiculo->id }}</td>
					<td><strong>{{ $vehiculo->nombre }}</strong></td>
					<td>{{ $vehiculo->precio }}</td>
					<td>{{ $vehiculo->marca->nombre }}</td>
					<td>{{ $vehiculo->modelo->nombre }}</td>
					<td>{{ $vehiculo->anio->nombre }}</td>
					<td>
						<a href="{{ route('vehiculos.show', $vehiculo->id) }}" class="btn btn-link">Ver</a>
					</td>
					<td>
						<a href="{{ route('vehiculos.edit', $vehiculo->id) }}" class="btn btn-link">Editar</a>
					</td>
					<td>
						<form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-link">Borrar</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $vehiculos->render() !!}
	</div>
	<div class="col-sm-4">
		@include('vehiculos.fragment.aside')
	</div>
@endsection

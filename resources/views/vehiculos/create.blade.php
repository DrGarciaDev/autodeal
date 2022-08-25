@extends('layout')

@section('content')
	<div class="col-sm-8">
		<h2>
			Nuevo vehículo
			<a href="{{ route('vehiculos.index') }}" class="btn btn-default pull-right">Listado</a>
		</h2>

		@include('vehiculos.fragment.error')

        @if ($registro == "[]")
            {!! Form::open(['route' => ['vehiculos.store'], 'method' => 'POST', 'id' => 'form-areas', 'class' => 'form-horizontal']) !!}
        @else
            {!! Form::open(['route' => ['vehiculos.update', $registro->id], 'method' => 'PUT', 'id' => 'form-areas', 'class' => 'form-horizontal']) !!}
        @endif
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-8 div-input required">
                            <label for="nombre">Nombre del vehiculo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $registro->nombre }}" required autocomplete="off">
                        </div>
                        <div class="col-md-4 div-input required">
                            <label for="precio">Precio</label>
                            <input type="text" class="form-control" id="precio" name="precio" value="{{ $registro->precio }}" required autocomplete="off">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 div-input required">
                            <label for="marca_id">Marca</label>
                            <select class="form-control select2" id="marca_id" name="marca_id" required autocomplete="off">
                                <option value=""></option>
                                @foreach ($marcas as $marca)
                                    <option {{ $marca->id == $registro->marca_id ? "selected" : "" }} id="{{ $marca->id }}" value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 div-input required">
                            <label for="modelo_id">Modelo</label>
                            <select class="form-control select2" id="modelo_id" name="modelo_id" required autocomplete="off">
                                <option value=""></option>
                                @foreach ($modelos as $modelo)
                                    <option {{ $modelo->id == $registro->modelo_id ? "selected" : "" }} value="{{ $modelo->id }}">{{ $modelo->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 div-input required">
                            <label for="anio_id">Año</label>
                            <select class="form-control select2" id="anio_id" name="anio_id" required autocomplete="off">
                                <option value=""></option>
                                @foreach ($anios as $anio)
                                    <option {{ $anio->id == $registro->anio_id ? "selected" : "" }} value="{{ $anio->id }}">{{ $anio->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row m-t-md" id="div-notificacion">
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('vehiculos.index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        {!! Form::close() !!}

	</div>
	<div class="col-sm-4">
		@include('vehiculos.fragment.aside')
	</div>
@endsection

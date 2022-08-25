@extends('layout')

@section('content')
	<div class="col-sm-8">
        <div class="modal-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8 div-input">
                        <label for="nombre">Nombre del vehiculo</label>
                        <input type="text" class="form-control" id="nombre" value="{{ $registro->nombre }}" autocomplete="off" disabled>
                    </div>
                    <div class="col-md-4 div-input">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" id="precio" value="{{ $registro->precio }}" autocomplete="off" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 div-input">
                        <label for="marca_id">Marca</label>
                        <select class="form-control select2" id="marca_id" autocomplete="off" disabled>
                            <option value=""></option>
                            @foreach ($marcas as $marca)
                                <option {{ $marca->id == $registro->marca_id ? "selected" : "" }} id="{{ $marca->id }}" value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 div-input">
                        <label for="modelo_id">Modelo</label>
                        <select class="form-control select2" id="modelo_id" autocomplete="off" disabled>
                            <option value=""></option>
                            @foreach ($modelos as $modelo)
                                <option {{ $modelo->id == $registro->modelo_id ? "selected" : "" }} value="{{ $modelo->id }}">{{ $modelo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 div-input">
                        <label for="anio_id">Año</label>
                        <select class="form-control select2" id="anio_id" autocomplete="off" disabled>
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
            <a href="{{ route('vehiculos.index') }}" class="btn btn-danger">Regresar</a>
        </div>
	</div>
	<div class="col-sm-4">
		@include('vehiculos.fragment.aside')
	</div>
@endsection

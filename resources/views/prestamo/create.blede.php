@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Préstamo</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('prestamo.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="cliente_id" class="form-label">Cliente:</label>
                                <select class="form-select" id="cliente_id" name="cliente_id">
                                    <option value="">Seleccione un cliente</option>
                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="monto_prestamo" class="form-label">Monto del Préstamo:</label>
                                <input type="number" step="0.01" min="1" class="form-control" id="monto_prestamo" name="monto_prestamo" value="{{ old('monto_prestamo') }}">
                            </div>

                            <div class="mb-3">
                                <label for="fecha_solicitud" class="form-label">Fecha de Solicitud:</label>
                                <input type="date" class="form-control" id="fecha_solicitud" name="fecha_solicitud" value="{{ old('fecha_solicitud') }}">
                            </div>

                            <div class="mb-3">
                                <label for="tasa_interes" class="form-label">Tasa de Interés (%) :</label>
                                <input type="number" step="0.01" min="0.01" max="100" class="form-control" id="tasa_interes" name="tasa_interes" value="{{ old('tasa_interes') }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Crear Préstamo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

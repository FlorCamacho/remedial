@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Nuevo Abono</h1>

                <form method="POST" action="{{ route('payments.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="prestamo_id">Préstamo:</label>
                        <select class="form-control" id="prestamo_id" name="prestamo_id">
                            @foreach ($prestamos as $prestamo)
                                <option value="{{ $prestamo->id }}">{{ $prestamo->id }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="monto_abono">Monto del Abono:</label>
                        <input type="number" step="0.01" min="1" class="form-control" id="monto_abono" name="monto_abono" required>
                    </div>

                    <div class="form-group">
                        <label for="fecha_abono">Fecha del Abono:</label>
                        <input type="date" class="form-control" id="fecha_abono" name="fecha_abono" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear Abono</button>
                </form>
            </div>
        </div>
    </div>
@endsection

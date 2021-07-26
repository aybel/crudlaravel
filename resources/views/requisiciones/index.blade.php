@extends('layouts.app');

@section('botones')
    <a href="{{ route('requisiciones.create') }}" class="btn btn-primary text-white mr-2">Crear requisición</a>
@endsection

@section('content')
    <h2 class="text-center mb-5">Requisiciones</h2>

    <div class="col-md-10 mx-auto p-3 bg-white">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th scope="col">Folio</th>
                    <th scope="col">Dependencia</th>
                    <th scope="col">Fecha de creacion</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Secretaría de finanzas</td>
                    <td>12-07-2021</td>
                    <td>Revisión</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

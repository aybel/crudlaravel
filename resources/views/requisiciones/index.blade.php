@extends('layouts.app');

@section('botones')
    <a href="{{ route('requisiciones.create') }}" class="btn btn-primary text-white mr-2">Crear requisición</a>
@endsection

@section('content')
    <h2 class="text-center mb-5">Requisiciones</h2>

    <div class="col-md-12 mx-auto p-3 bg-white">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th scope="col">Folio</th>
                    <th scope="col">Dependencia</th>
                    <th scope="col">Clave presupuestaria</th>
                    <th scope="col">Partida</th>
                    <th scope="col">Fecha de creacion</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requisiciones as $req)
                    <tr>
                        <td>{{ $req->folio }}</td>
                        <td>{{ $req->catestorg->nombre }}</td>
                        <td>{{ $req->catclave->clave }}</td>
                        <td>{{ $req->catpar->clave }}-{{ $req->catpar->nombre }}</td>
                        <td>{{ $req->fecha_elaboracion }}</td>
                        <td>{{ $req->catstatu->nombre }}</td>
                        <td>
                            <a href="" class="btn btn-dark">Editar</a>
                            <a href="" class="btn btn-success">Ver</a>
                            <eliminar-requisicion msj="Cancelar requisición" titulo="¿Desea cancelar la requisción?"
                                requisicion-id={{ $req->id }}></eliminar-requisicion>
                            <a href="" class="btn btn-secondary">Agregar articulos</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

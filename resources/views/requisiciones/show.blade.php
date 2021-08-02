@extends('layouts.app')

@section('content')

    <h1>Requiscion No. {{ $requisicion->folio }}</h1>
    <article class="content">
        <h2 class="text-center mb-2">Dependencia solicitante:
            {{ $requisicion->catestorg->clave }}-{{ $requisicion->catestorg->nombre }}</h2>
        <h2 class="text-center mb-2">Clave presupuestaria: {{ $requisicion->catclave->clave }}</h2>
        <h2 class="text-center mb-2">Partida de gasto:
            {{ $requisicion->catpar->clave }}-{{ $requisicion->catpar->nombre }}</h2>
        <h2 class="text-center mb-2">Fecha de elaboración: {{ $requisicion->fecha_elaboracion }}</h2>
        <h2 class="text-center mb-2">Estado: {{ $requisicion->catstatu->nombre }}</h2>
    </article>

@endsection

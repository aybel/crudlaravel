<h1>Proveedores</h1>
@foreach ($comboEstados as $estado)
    <li>
        {{ $estado }}
    </li>

@endforeach
<h1>Categoria</h1>
@foreach ($comboCategoria as $categoria)
    <li>
        {{ $categoria }}
    </li>

@endforeach

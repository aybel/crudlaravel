@extends('layouts.app')

@section('botones')
    <a href="{{ route('requisiciones.index') }}" class="btn btn-primary text-white mr-2">Volver a requisiciones</a>
@endsection

@section('content')
    <h2 class="text-center mb-5">Crear nueva receta</h2>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form action="{{ route('requisiciones.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="folio">Folio</label>
                    <input type="text" name="folio" id="folio" class="form-control w-25" disabled />
                </div>
                <div class="form-group">
                    <label for="fecha_elaboracion">Fecha de elaboración</label>
                    <input type="date" name="fecha_elaboracion" id="fecha_elaboracion" class="form-control"
                        placeholder="Fecha de elaboración" />
                    @error('fecha_elaboracion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="catestorg_id">Dependencia</label>
                    <select name="catestorg_id" id="catestorg_id" class="form-control">
                        <option value="">--Seleccionar dependencia--</option>
                        @foreach ($comboDependencias as $id => $dependencia)
                            <option value="{{ $id }}">
                                {{ $dependencia }}
                            </option>
                        @endforeach
                    </select>
                    @error('catestorg_id')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="claves_id">Claves presupuestarias</label>
                    <select name="claves_id" id="claves_id" class="form-control">
                        <option value="">--Seleccionar clave--</option>
                        @foreach ($comboClaves as $id => $clave)
                            <option value="{{ $id }}">
                                {{ $clave }}
                            </option>
                        @endforeach
                    </select>
                    @error('claves_id')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="catpar_id">Partida de gasto</label>
                    <select name="catpar_id" id="catpar_id" class="form-control">
                        <option value="">--Seleccionar partida--</option>
                        @foreach ($comboPartidas as $id => $partida)
                            <option value="{{ $id }}">
                                {{ $partida }}
                            </option>
                        @endforeach

                    </select>
                    @error('catpar_id')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="catestorg_id">Mes de afectación</label>
                    <select name="mes" id="catestorg_id" class="form-control">
                        <option value="">--Seleccionar mes--</option>
                        @foreach ($comboMeses as $id => $mes)
                            <option value="{{ $id }}">
                                {{ $mes }}
                            </option>
                        @endforeach
                    </select>
                    @error('mes')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="concepto">Concepto</label>
                    <textarea name="concepto" id="" class="form-control" cols="30" rows="10"></textarea>
                    @error('concepto')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Revisa</label>
                    <input type="text" name="revisa" class="form-control"
                        placeholder="Nombre de quien revisa la requisición" />
                    @error('revisa')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Autoriza</label>
                    <input type="text" name="autoriza" class="form-control"
                        placeholder="Nombre de quien autoriza la requisición" />
                    @error('autoriza')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Generar requisición" />
                </div>
            </form>
        </div>
    </div>

@endsection

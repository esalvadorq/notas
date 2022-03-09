@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Agregar Nota</span>
                        <a href="/notas" class="btn btn-primary btn-sm">Volver a lista de notas...</a>
                    </div>
                    <div class="card-body">
                        @if (session('mensaje'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>
                                    {{ session('mensaje') }}
                                </strong>
                            </div>
                        @endif
                        @foreach ($errors->get('nombre') as $error)
                            <div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Falta el nombre</strong>

                            </div>
                        @endforeach
                        @foreach ($errors->get('descripcion') as $error)
                            <div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Falta la descripcion</strong>

                            </div>
                        @endforeach


                        <form method="POST" action="/notas">
                            @csrf
                            <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2"
                                value="{{ old('nombre') }}" />
                            <input type="text" name="descripcion" id="nombre" placeholder="Descripcion"
                                class="form-control mb-2" value="{{ old('descripcion') }}" />
                            <button class="btn btn-outline-primary btn-block" type="submit">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="text-primary">
                            Detalles de Nota # {{ $nota->id }}
                        </span>
                        <a href="/notas" class="btn btn-primary btn-sm">Volver a lista de notas...</a>



                    </div>
                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr >
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-muted">
                                    <td scope="col">{{ $nota->nombre }}</td>
                                    <td scope="col">{{ $nota->descripcion }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

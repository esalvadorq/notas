@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Lista de Notas para {{ auth()->user()->name }}</span>
                        <a href="/notas/create" class="btn btn-primary btn-sm">Nueva Nota</a>
                    </div>

                    <div class="card-body">

                        @if (session('mensaje'))
                            <div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>
                                    {{ session('mensaje') }}
                                </strong>
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notas as $item)
                                    <tr style="vertical-align: middle;">
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>
                                            <a href="{{ route('notas.show', $item->id) }}">
                                                <i style="font-size:20px" class="bi bi-eye-fill"></i>  {{ $item->nombre }}
                                            </a>
                                        </td>
                                        <td>{{ $item->descripcion }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('notas.edit', $item->id) }}"
                                                    class="btn btn-outline-primary btn-sm"><i style="font-size:20px" class="bi bi-pencil-square"></i></a>
                                                <form action="{{ route('notas.destroy', $item) }}" class="d-inline"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-danger btn-sm show_confirm">
                                                        <i style="font-size:20px;font-weight:200;" class="bi bi-trash" ></i>

                                                    </button>

                                                </form>
                                            </div>


                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $notas->links() }}
                        {{-- fin card body --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

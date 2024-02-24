@extends('layouts.app')
@section('content')
<div class="container">

    <a href="{{ url('empleado/create') }}">Registrar nuevo empleado</a>

    @if (Session::has('mensaje'))
        <p style="color: lime;">{{ Session::get('mensaje') }}</p>
    @endif

    <table class="table table-light">
        <thead>
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td><img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="{{ $empleado->id }}"></td>
                <td>{{ $empleado->Nombre }}</td>
                <td>{{ $empleado->ApellidoPaterno }}</td>
                <td>{{ $empleado->ApellidoMaterno }}</td>
                <td>{{ $empleado->Correo }}</td>
                <td>
                    <a href="{{ url('/empleado/' . $empleado->id . '/edit') }}">
                        Editar
                    </a>
                    |
                    <form action="{{ url('/empleado/' . $empleado->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Quieres borrar esta fila')" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
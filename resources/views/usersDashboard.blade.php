@extends('layout.dashboard_layout')

@section('main')
<div class="d-flex justify-content-between text-center mb-3 ">
    <h1>Administrar usuarios</h1>
</div>

<!-- Table -->
<table class="table table-striped table-bordered border-active">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Suscripción</th>
            <th scope="col">Opciones</th>
        </tr>

    <tbody>

        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>@if ($user->subscription == 1)
                Activa
                @elseif (is_null($user->subscription))
                No suscripto
                @else
                {{ $user->subscription }}
                @endif
            </td>
            <td>
                <form action="{{ route('delete.user') }}" method="POST">
                    @csrf <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <button type="submit" class="border border-0 rounded-circle bg-transparent " onclick="return confirm('¿Está seguro de querer eliminar el usuario?')">
                        <img src="sources/images/icon_delete.png" style="width:25px" alt="Eliminar usuario">
                    </button>
                </form>
            </td>

        </tr>
        @endforeach


    </tbody>
</table>
</thead>
</table>

@endsection
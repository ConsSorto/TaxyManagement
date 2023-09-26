@extends('layouts.app')
@section('content')
    <table class="table table-hover">
        <thead>
            <th>Detalle</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>

                    <td>
                        <a href="{{ route('users.show', $user->id) }}">
                            <span class="oi oi-eye"></span>
                        </a>
                    </td>

                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form action=" {{ route('users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('delete')

                            <a href="{{route('users.edit', $user->id)}}">
                                <span class="oi oi-pencil"></span>
                            </a>

                            <button class="btn btn-link" type="submit">
                                <span class="oi oi-circle-x"></span>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
@endsection

@extends('layouts.app')
@section('content')
    <table class="table table-hover">
        <thead>
        <th>Nombre</th>
        <th>Email</th>
        <th>Creacion</th>
        <th>Actualizacion</th>
        <th>Acciones</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at->format('Y-m-d h:m:s A')}}</td>
                <td>{{$user->updated_at->format('Y-m-d h:m:s A')}}</td>
                <td>Acciones</td>
            </tr>
        </tbody>
    </table>
@endsection

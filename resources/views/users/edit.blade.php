@extends('layouts.app')
@section('content')

    <div class="form-group">
    <form action="{{route('users.update', $user->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre</label>
        <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button class="btn btn-primary m-2" type="submit">Actualizar</button>
    </form>
    </div>
@endsection

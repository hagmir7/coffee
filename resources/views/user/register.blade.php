@extends('layout.dash')


@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-md-6 mt-3 card p-2 mt-2 shadow-ms">
        <h1 class="h3 text-center">Create New Admin</h1>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger p-2"> {{ $error }} </div>
        @endforeach
        <form action="{{ route('store_user') }}" method="POST" >
            @csrf
            <input type="text" name="first_name" id="first_name" class="form-control mt-2" placeholder="First name">
            <input type="text" name="last_name" id="last_name" class="form-control mt-2" placeholder="Last name">
            <input type="email" name="email" id="email" class="form-control mt-2" placeholder="Email">
            <select name="role" class="form-select mt-2">
                <option value="">Select role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
            <input type="password" name="password" id="password" class="form-control mt-2" placeholder="Password">
            <input type="password" name="password_1" id="password_1" class="form-control mt-2" placeholder="Confirm Password">
            <button class="btn btn-primary mt-4 w-100">Créer</button>
        </form>
    </div>
</div>


@endSection
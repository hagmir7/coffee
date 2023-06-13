@extends('layout.dash')


@section('content')

<div class="container">
    <div class="row">
        <div class="table-responsive  overflow-auto">
            <table id="mytable" class="table table-bordred table-striped">
                <h4>Servers ({{ $users->count() }})</h4>
                <div class="d-flex justify-content-between">
                    <p><a class="btn btn-outline-success btn-sm" href="{{ route('register') }}">+ Create user</a></p>
                </div>
                <thead>
        
                    <tr>
                        <th><input type="checkbox" id="checkall"></th>
                        <th>Full name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td><input type="checkbox" class="checkthis"></td>
                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }} MAD</td>
                        <td>
                            <a href="{{ route('user.delete', $user->id) }}" onclick="return confirm('Are you sur you want to delete user?')" class="btn btn-danger btn-sm btn-xs"> <i class="bi bi-trash"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        
            </table>
        
        
        
        </div>
    </div>
</div>

@endsection
@extends('layout.dash')


@section('content')

<style>
    a{
        text-decoration: none!important;
    }
</style>
<div class="table-responsive  overflow-auto">


    <table class="table table-bordred table-striped">
        <h4>Servers ({{ $tables->count() }})</h4>
        <div class="d-flex justify-content-between">
            <p><a class="btn btn-outline-success btn-sm" href="{{ route('table.create') }}">+ Create table</a></p>
            <p><a class="btn btn-outline-success btn-sm" href="#!" data-bs-toggle="modal" data-bs-target="#table">Merge tables</a></p>
        </div>
        <thead>

            <tr>
                <th>Table number</th>
                <th>Server</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tables as $table)
            <tr>
                <td>{{ $table->id }}</td>
                <td>{{ $table->server->first_name }} {{ $table->server->first_name }}</td>
                <td>
                    {{-- <a href="{{ route('table.update', $table->id) }}" class="btn btn-primary btn-sm btn-xs"><i class="bi bi-pen"></i></a> --}}
                    <a href="{{ route('table.delete', $table->id) }}" onclick="return confirm('Are you sur you want to delete table?')" class="btn btn-danger btn-sm btn-xs"> <i class="bi bi-trash"></i> </a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>



</div>

  <!-- Modal -->
  <div class="modal" id="table" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tableLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tableLabel">Select Server</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('table.update') }}" method="POST">
            @csrf
            <select name="server_id" id="" class="form-select" required>
                <option value="">Select Server</option>
                @foreach ($servers as $server)
                    <option value="{{ $server->id }}">{{ $server->first_name }} {{ $server->last_name }}</option>
                @endforeach
            </select>
            <button class="btn btn-success w-100 my-2">Merger</button>
           <div class="div overflow-auto" style="max-height: 100vh">
            <table class="table table-bordred  table-striped mt-3" >
                <h4>Tables ({{ $tables->count() }})</h4>

                <thead>
        
                    <tr>
                        <th><input type="checkbox" id="checkall"></th>
                        <th>Table number</th>
                        <th>Server</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tables as $table)
                    <tr>
                        <td><input type="checkbox" name="table[]" value="{{ $table->id }}" class="checkthis"></td>
                        <td>{{ $table->id }}</td>
                        <td>{{ $table->server->first_name }} {{ $table->server->first_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
        
            </table>
           </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
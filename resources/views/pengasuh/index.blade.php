@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Pengasuh
                        <a href="{{ route('pengasuh.create') }}" class="btn btn-sm btn-outline-primary"
                            style="float: right">Tambah Data Pengasuh</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="">
                                <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama</th>
                                    <th>Jenis kelamin</th>
                                    <th>Umur</th>
                                    <th>Action</th>
                                </tr>
                        </thead>
                        <tbody>
                                @php $no=1;  @endphp
                                @foreach ($pengasuh as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama}}</td>
                                        <td>{{ $data->jenis_kelamin}}</td>
                                        <td>{{ $data->umur}}</td>
                                        <td>
                                            <form action="{{ route('pengasuh.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('pengasuh.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('pengasuh.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('css')

    @endsection

@section('js')

      
        
        @endsection

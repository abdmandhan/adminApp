@extends('adminlte::page')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <x-card title="List Data Pengguna">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                    @foreach ($users as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->getRoleNames() }}</td>
                    </tr>
                    @endforeach
                </table>
            </x-card>
        </div>
    </div>
</div>
@endsection
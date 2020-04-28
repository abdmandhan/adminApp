@extends('adminlte::page')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @include('layouts.message')
            <x-card title="Perangkingan AHP" buttonUrl="perankinganahp.create" buttonText="Create">
                <table id="example" class="display table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Nilai</th>
                            <th>Predikat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perankinganahp as $item)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $item->dosen->nip }}</td>
                            <td>{{ $item->dosen->name }}</td>
                            <td>{{ $item->nilai }}</td>
                            <td>{{ $item->predikat->name }}</td>
                            <td>
                                <a href="{{ route('perankinganahp.edit',$item->id)}}"
                                    class="btn btn-sm btn-info">Edit</a>
                                <form action="{{ route('perankinganahp.destroy',$item->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Nilai</th>
                            <th>Predikat</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </x-card>
        </div>
    </div>
</div>
@endsection
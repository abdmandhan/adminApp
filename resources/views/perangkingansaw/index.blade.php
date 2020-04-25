@extends('adminlte::page')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <x-card title="Perangkingan SAW">
                <table id="example" class="display table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Nilai</th>
                            <th>Evaluasi Oleh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perangkingansaw as $item)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $item->dosen->nip }}</td>
                            <td>{{ $item->dosen->name }}</td>
                            <td>{{ $item->nilai }}</td>
                            <td>{{ $item->evaluated_by }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Nilai</th>
                            <th>Evaluasi Oleh</th>
                        </tr>
                    </tfoot>
                </table>
            </x-card>
        </div>
    </div>
</div>
@endsection
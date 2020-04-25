@extends('adminlte::page')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <x-card title="Penilaian Dosen Berdasarkan KPI">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Indikator</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sangat Tidak Setuju</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Tidak Setuju</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Cukup Setuju</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Setuju</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Sangat Setuju</td>
                            <td>5</td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <table id="example" class="display table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Pertanyaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kpi_type as $item)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td nowrap></td>
                        </tr>
                        @foreach ($item->kpi as $kpi)
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{ $kpi->text }}</td>
                        </tr>
                        @endforeach
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Pertanyaan</th>
                        </tr>
                    </tfoot>
                </table>
            </x-card>
        </div>
    </div>
</div>
@endsection
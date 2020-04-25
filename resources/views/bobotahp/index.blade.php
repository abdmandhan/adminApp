@extends('adminlte::page')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <x-card title="Bobot AHP">
                <table id="example" class="display table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Alternatives</th>
                            <th>Criteria 1</th>
                            <th>Criteria 2</th>
                            <th>Criteria 3</th>
                            <th>Criteria 4</th>
                            <th>Criteria 5</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bobotahp as $item)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $item->dosen->name }}</td>
                            <td>{{ $item->criteria_1 }}</td>
                            <td>{{ $item->criteria_2 }}</td>
                            <td>{{ $item->criteria_3 }}</td>
                            <td>{{ $item->criteria_4 }}</td>
                            <td>{{ $item->criteria_5 }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Alternatives</th>
                            <th>Criteria 1</th>
                            <th>Criteria 2</th>
                            <th>Criteria 3</th>
                            <th>Criteria 4</th>
                            <th>Criteria 5</th>
                        </tr>
                    </tfoot>
                </table>
            </x-card>
        </div>
    </div>
</div>
@endsection
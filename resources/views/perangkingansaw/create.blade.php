@extends('adminlte::page')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <x-card title="Perangkingan SAW" buttonUrl="perangkingansaw.index" buttonText="Back">
                <form action="{{ route('perangkingansaw.store') }}" method="post">
                    @csrf
                    <x-select label="Dosen" name="dosen_id" selectData="Dosen" />
                    <x-input-text label="Nilai" name="nilai" />
                    <x-textarea label="Evaluasi Oleh" name="evaluated_by" />
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </x-card>
        </div>
    </div>
</div>
@endsection
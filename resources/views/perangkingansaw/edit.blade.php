@extends('adminlte::page')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @include('layouts.message')
            <x-card title="Perangkingan SAW" buttonUrl="perangkingansaw.index" buttonText="Back">
                <form action="{{ route('perangkingansaw.update',$data->id) }}" method="post">
                    @csrf
                    @method('put')
                    <x-input-text name="dosen_id" :value="$data->dosen_id" hidden />
                    <x-input-text label="Dosen" name="dosen" :value="$data->dosen->name" disabled />
                    <x-input-text label="Nilai" name="nilai" :value="$data->nilai" />
                    <x-textarea label="Evaluasi Oleh" name="evaluated_by" :value="$data->evaluated_by" />
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </x-card>
        </div>
    </div>
</div>
@endsection
@extends('adminlte::page')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @include('layouts.message')
            <x-card title="Perangkingan AHP" buttonUrl="perankinganahp.index" buttonText="Back">
                <form action="{{ route('perankinganahp.update',$data->id) }}" method="post">
                    @csrf
                    @method('put')
                    <x-input-text name="dosen_id" :value="$data->dosen_id" hidden />
                    <x-input-text label="Dosen" name="dosen" :value="$data->dosen->name" disabled />
                    <x-input-text label="Nilai" name="nilai" :value="$data->nilai" />
                    <x-select label="Predikat" name="predikat_id" selectData="Predikat" :value="$data->predikat_id" />
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </x-card>
        </div>
    </div>
</div>
@endsection
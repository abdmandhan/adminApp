@extends('adminlte::page')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <x-card title="Perangkingan AHP" buttonUrl="perankinganahp.index" buttonText="Back">
                <form action="{{ route('perankinganahp.store') }}" method="post">
                    @csrf
                    <x-select label="Dosen" name="dosen_id" selectData="Dosen" />
                    <x-input-text label="Nilai" name="nilai" />
                    <x-select label="Predikat" name="predikat_id" selectData="Predikat" />
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </x-card>
        </div>
    </div>
</div>
@endsection
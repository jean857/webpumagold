@extends('adminlte::page')

@section('title', 'Contáctanos')

@section('content_header')
    <h1>Contáctanos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Lista</strong>
        </div>
        <div class="card-body">
            @livewire('admin.place-general.place-index')
        </div>
    </div>
@stop

@section('css')
{{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

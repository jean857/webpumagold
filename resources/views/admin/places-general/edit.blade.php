@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Contáctanos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Editar</strong>
        </div>
        <div class="card-body">
            <livewire:admin.place-general.place-edit :id="$id"/>
        </div>
    </div>
@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')

@stop

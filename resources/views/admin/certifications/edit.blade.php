@extends('adminlte::page')

@section('title', 'Certificaciones')

@section('content_header')
    <h1>Certificaciones</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Nuevo</strong>
        </div>
        <div class="card-body">
            <livewire:admin.certifications.certification-edit :certification="$certification">
        </div>
    </div>
@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
@stop

@extends('adminlte::page')

@section('title', 'Banners - Servicios')

@section('content_header')
    <h1>Banners - Servicios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Editar</strong>
        </div>
        <div class="card-body">
            <livewire:admin.service-banner.service-banner-edit :banner="$service">
        </div>
    </div>
@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
@stop

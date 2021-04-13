@extends('adminlte::page')

@section('title', 'Banners - Home')

@section('content_header')
    <h1>Banners - Home</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Editar</strong>
        </div>
        <div class="card-body">
            <livewire:admin.home-banners.home-banner-edit :banner="$home">
        </div>
    </div>
@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
@stop

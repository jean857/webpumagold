@extends('adminlte::page')

@section('title', 'Banners - Quienes Somos')

@section('content_header')
    <h1>Banners - Quienes Somos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Editar</strong>
        </div>
        <div class="card-body">
            <livewire:admin.about-us-banner.about-us-banner-edit :banner="$about_u">
        </div>
    </div>
@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
@stop

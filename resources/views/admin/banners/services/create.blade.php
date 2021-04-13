@extends('adminlte::page')

@section('title', 'Banners - Servicios')

@section('content_header')
    <h1>Banners - Servicios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Nuevo</strong>
        </div>
        <div class="card-body">
            <livewire:admin.service-banner.service-banner-store>
        </div>
    </div>
@stop


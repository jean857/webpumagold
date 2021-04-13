@extends('adminlte::page')

@section('title', 'Banners - Home')

@section('content_header')
    <h1>Banners - Home</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Nuevo</strong>
        </div>
        <div class="card-body">
            <livewire:admin.home-banners.home-banner-store>
        </div>
    </div>
@stop


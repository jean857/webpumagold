@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Servicios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Nuevo</strong>
        </div>
        <div class="card-body">
            <livewire:admin.services.service-store>
        </div>
    </div>
@stop


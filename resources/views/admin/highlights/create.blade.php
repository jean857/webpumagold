@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Destacados</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Nuevo</strong>
        </div>
        <div class="card-body">
            <livewire:admin.highlights.highlight-store>
        </div>
    </div>
@stop

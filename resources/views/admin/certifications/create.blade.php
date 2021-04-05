@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Certificaciones</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Nuevo</strong>
        </div>
        <div class="card-body">
            <livewire:admin.certifications.certification-store>
        </div>
    </div>
@stop


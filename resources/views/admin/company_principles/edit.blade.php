@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nosotros - Mision - Vision</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Editar</strong>
        </div>
        <div class="card-body">
            <livewire:admin.company-principles.company-principles-edit :companyPrinciple="$companyPrinciple">
        </div>
    </div>
@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
@stop

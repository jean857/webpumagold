@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Editar</strong>
        </div>
        <div class="card-body">
            <livewire:admin.users.user-edit :user="$user">
        </div>
    </div>
@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
@stop

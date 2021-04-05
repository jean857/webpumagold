@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Servicios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Lista</strong>
            <a href="{{route('services.create')}}" type="button" class="btn btn-success btn-sm float-right">Nuevo</a>
        </div>
        <div class="card-body">
            <livewire:admin.services.services-table>
        </div>
    </div>
@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    <script>
        window.addEventListener('swal:confirm', event => {
            Swal.fire({
                title: event.detail.title,
                text: event.detail.text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, eliminarlo!'
            }).then((result) => {
                console.log(result)
                if (result.value) {
                    window.livewire.emit('remove')
                }
            })
        })
    </script>
@stop

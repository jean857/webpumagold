@extends('adminlte::page')

@section('title', 'Cambio de contraseña')

@section('content_header')
    <h1>Contraseña</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Cambio de contraseña</strong>
        </div>
        <div class="card-body">
            <livewire:admin.profile.password-edit>
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

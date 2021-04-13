@extends('adminlte::page')

@section('title', 'Contactos')

@section('content_header')
    <h1>Registro de Contactos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Lista</strong>
        </div>
        <div class="card-body">
            <livewire:admin.contacts.contacts-table>
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

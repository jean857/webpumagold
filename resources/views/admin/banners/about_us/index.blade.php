@extends('adminlte::page')

@section('title', 'Banners - Quienes somos')

@section('content_header')
    <h1>Banners - Quienes somos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Lista</strong>
            <a href="{{route('admin.banner_about_us.create')}}" type="button"
               class="btn btn-success btn-sm float-right">Nuevo</a>
        </div>
        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Notificación!</strong> {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <livewire:admin.about-us-banner.about-us-banner-table>
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

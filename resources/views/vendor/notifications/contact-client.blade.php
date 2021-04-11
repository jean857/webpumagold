@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ config('app.name') }}
        @endcomponent
    @endslot
    @slot('subcopy')
        <h1>Ha recibido un mensaje de:</h1>
        <hr style="color: #ccc;background: #ccc;border: 1px solid;">
        <p style="font-weight: bold">Nombre: <span style="font-weight: normal">{{$name}}</span></p>
        <p style="font-weight: bold">Email: <span style="font-weight: normal">{{$email}}</span></p>
        <p style="font-weight: bold">Telf.: <span style="font-weight: normal">{{$phone}}</span></p>
        <p style="font-weight: bold">Empresa: <span style="font-weight: normal">{{$business}}</span></p>
        <p style="font-weight: bold">Mensaje:</p>
        <p>{{$message}}</p>
    @endslot
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent

<div>
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <livewire:admin.place-general.table-place-general>
{{--    <table class="table table-striped">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>Dirección</th>--}}
{{--            <th>Telefono</th>--}}
{{--            <th>Email</th>--}}
{{--            <th>Acciones</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($places as $place)--}}
{{--            <tr>--}}
{{--                <td>{{$place->address}}</td>--}}
{{--                <td>{{$place->phone_number}}</td>--}}
{{--                <td>{{$place->email}}</td>--}}
{{--                <td>--}}
{{--                    <a href="{{route('contact-us-general.edit',$place->id)}}" class="btn btn-primary btn-sm">Editar</a>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--        <tfoot>--}}
{{--        <tr>--}}
{{--            <td colspan="4">--}}
{{--                {{$places->links()}}--}}
{{--            </td>--}}
{{--        </tr>--}}

{{--        </tfoot>--}}
{{--    </table>--}}

</div>

<aside class="widget widget-nav-menu">
    <ul class="widget-menu">
        @foreach($category_services as $category)
            <h4>{{$category->name}}</h4>
            @foreach($category->services as $service)
                <li class="{{(request()->segment(2) === $service->slug) ? 'active' : ''}}"><a
                        href="{{route('web.service.index',$service->slug)}}">{{$service->name}}</a></li>
            @endforeach
        @endforeach
    </ul>
</aside>
<aside class="widget widget-download">
    <ul class="download">
        <li><i class="fa fa-file-pdf-o"></i>
            <div><h4>Nuestro Broucher</h4><a href="#">Descargar</a></div>
        </li>
    </ul>
</aside>

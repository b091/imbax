@section('topmenu')
<div class="container">
    <nav class="navbar navbar-default navbar-rss" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/{{$templateDir}}/images/rss_logo_top.png" class="img-responsive"></a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                @foreach($menu as $item)
                <li class="@if ($currentpage->pagelink === $item->pagelink ) active @endif"><a href="/{{$currentlang}}/{{ $item->pagelink }}">{{$item->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </nav>
</div>
@stop

@section('bottommenu')
<ul class="nav nav-pills pull-right">
    @foreach($menu as $item)
    <li><a href="{{ $item->pagelink }}">{{$item->title}}</a></li>
    @endforeach
</ul>
@stop


@section('leftmenu')
<ul class="nav nav-stacked asd">
    @foreach($product as $key => $item)
    <li class="@if ($key == 0) active @endif"><a href="">{{$item->name}}</a></li>
    @endforeach
</ul>
@stop
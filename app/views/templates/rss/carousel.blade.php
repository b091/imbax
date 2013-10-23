
<div class="carousel-rss hidden-xs" id="carousel-rss" >
    <div class="container">
        <div class="carousel slide">

            <div class="carousel-inner">
                @foreach(glob('files' . DIRECTORY_SEPARATOR . 'carousel' . DIRECTORY_SEPARATOR . "*.jpg") as $key => $img)
                <div class="item @if ($key == 0) active @endif">
                    <img src="/{{$img}}" alt="{{$img}}">
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container">
        <ol class="carousel-indicators pull-right">
            @foreach(glob('files' . DIRECTORY_SEPARATOR . 'carousel' . DIRECTORY_SEPARATOR . "*.jpg") as $key => $img)
            <li data-target="#carousel-rss" data-slide-to="{{$key}}" class="@if ($key == 0) active @endif"></li>
            @endforeach
        </ol>
    </div>
</div>
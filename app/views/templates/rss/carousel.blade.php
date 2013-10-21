
<div class="carousel-rss hidden-xs">
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide">

            <div class="carousel-inner">

                @foreach(glob('files' . DIRECTORY_SEPARATOR . 'carousel' . DIRECTORY_SEPARATOR . "*.jpg") as $key => $img)
                <div class="item @if ($key == 0) active @endif">
                    <img src="{{$img}}" alt="1 slide">
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container">
        <ol class="carousel-indicators pull-right">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
        </ol>
    </div>
</div>
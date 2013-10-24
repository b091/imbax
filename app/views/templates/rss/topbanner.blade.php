@if ($currentpage->layout == 'home')
    <div class="container hidden-xs">
        <div class="topinfo-rss">
            <span style="font-family: rss-roboto-italic;">{{Lang::get('label.buckets')}}</span><span style="color: #FFC04D; font-family: rss-gothic; font-size: 36pt;"> Real Steel Sweden</span>
        </div>
    </div>
    @include('templates.rss.carousel')
@endif
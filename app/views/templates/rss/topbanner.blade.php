@if ($currentpage == 'onas.html')
    <div class="container hidden-xs">
        <div class="topinfo-rss">
            <span>Łyżki do koparek</span><span style="color: #FFC04D; font-family: rss-gothic; font-size: 36pt;"> Real Steel Sweden</span>
            <a class="btn btn-sm btn-warning pull-right button-rss-procuct" href="#">Zobacz nasze produkty</a></p>
        </div>
    </div>


    <div class="container hidden-sm hidden-md hidden-lg">
        <div class="topinfo-rss" style="border-bottom: 1px solid #e1e1e8 !important;">
            <span>Łyżki do koparek</span><br/><span style="color: #FFC04D;"> Real Steel Sweden</span>
            <a class="btn btn-warning btn-sm pull-right" href="#">Zobacz nasze produkty</a></p>
        </div>
    </div>
    @include('templates.rss.carousel')
@else
<div class="topbanner-rss hidden-xs">
    <div class="container">
        <div class="col-md-6">
            Podstrona lorem ipsum : {{$currentpage}}
          </div>
          <div class="col-md-6">
              <a class="btn btn-warning btn-lg pull-right" href="{{str_replace(' ', '-', strtolower(Lang::get('label.contactus')))}}.html">{{Lang::get('label.contactus')}}</a>
          </div>
    </div>
</div>
@endif
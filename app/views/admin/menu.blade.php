@section('topbar')
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <?php
            if (Auth::check())
            {
                ?>
                <div class="btn-group pull-right">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user"></i> <i class="famfamfam-flag-{{App::getLocale()}}"></i> <span class="hidden-phone"><?=Auth::user()->email?></span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-cog"></i> Konfiguracja</a></li>
                        <li class="divider"></li>
                        @foreach($langs as $item)
                            <li><a href="/admin/{{$item->code}}/dashboard.html"><i class="famfamfam-flag-{{$item->code}}"></i> {{$item->name}}</a></li>
                        @endforeach
                        <li><a href="/admin/logout.html"><i class="icon-off"></i> Logout</a></li>
                    </ul>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
@stop

@section('leftmenu')
<div class="span2 main-menu-span">
    <div class="well nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li class="nav-header hidden-tablet">Menu
                <div class="box-icon">
                    <a class="btn btn-menu-add btn-round" href="#"><i class="icon-plus"></i></a>
                </div>
            </li>

            @foreach($menu as $item)
                <li class="ajax-link"><a href="/admin/{{$lang}}/menu/{{$item->id}}"> {{$item->title}}</a> </li>
            @endforeach

        </ul>
    </div>
</div>

@stop

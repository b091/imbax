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
//            <!-- theme selector starts -->
//            <div class="btn-group pull-right theme-container">
//                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
//                    <i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
//                    <span class="caret"></span>
//                </a>
//                <ul class="dropdown-menu" id="themes">
//                    <li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
//                    <li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
//                    <li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
//                    <li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
//                    <li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
//                    <li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
//                    <li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
//                    <li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
//                    <li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
//                </ul>
//            </div>
//            <!-- theme selector ends -->
//
//            <!-- user dropdown starts -->
            if (Auth::check())
            {
                //die('jkhgfhgf');
                ?>
                <div class="btn-group pull-right">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user"></i><span class="hidden-phone"><?=Auth::user()->email?></span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="/admin/logout.html">Logout</a></li>
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
            <li class="nav-header hidden-tablet">Menu <div class="box-icon">
            <a class="btn btn-menu-add btn-round" href="#"><i class="icon-plus"></i></a>
            <a class="btn btn-round" href="#"><i class=" icon-remove"></i> </a>
            <a class="btn btn-close btn-round" href="#"></a>
            </div></li>
            <li><a class="ajax-link" href="index.html"><i class="icon-home"></i><span class="hidden-tablet"></span></a></li>
        </ul>
    </div>
</div>

@stop

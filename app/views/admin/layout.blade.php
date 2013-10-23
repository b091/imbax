@extends('admin.template')

@section('content54')
    @include('admin.menu')
    <div class="row-fluid">
        @if (Auth::check())
            @yield('leftmenu')
        @endif
        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="/http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="span10">
            @yield('content')
        </div>
    </div>
@stop

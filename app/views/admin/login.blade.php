@extends('admin.layout')

@section('content')

<div class="well span5 center login-box">
    <div class="alert alert-info">
        Please login with your Username and Password.
    </div>
    <form class="form-horizontal" action="login.html" method="post">
        <fieldset>
            <div class="input-prepend" title="Username" data-rel="tooltip">
                <span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="email" id="username" type="text" value=""/>
            </div>
            <div class="clearfix"></div>

            <div class="input-prepend" title="Password" data-rel="tooltip">
                <span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value=""/>
            </div>
            <div class="clearfix"></div>

<!--            <div class="input-prepend">-->
<!--                <label class="remember" for="remember"><input type="checkbox" id="remember"/>Remember me</label>-->
<!--            </div>-->
            <div class="clearfix"></div>

            <p class="center span5">
                <button type="submit" class="btn btn-primary">Login</button>
            </p>
        </fieldset>
    </form>
</div><!--/span-->
@stop

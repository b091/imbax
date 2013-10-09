@extends('templates.rss.layout')

@section('content')

<style type="text/css">
    iframe, object, embed {
        max-width: 100%;
    }

    .rss-shadowpanel {
        padding: 8pt;
        background-color: #FFFFFF;
        border: 1px solid rgba(0, 0, 0, 0.15);
        /*border-radius: 4px 4px 4px 4px;*/
        /*box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);*/
    }
</style>

<div class="row">
    <br/>

    <div class="col-md-6">
        <img src="/{{$templateDir}}/images/rss_logo.png" alt="..." class="img-responsive">
        <br/>
        {{$content}}
       </div>
    <br/>
    <br/>

    <div class="col-md-6 rss-shadowpanel">
        <h3>{{Lang::get('label.contactus')}}!</h3>
        <br/>
        <br/>

        <form>
            <div class="form-group">
                <input type="text" class="form-control input-lg" id="name" placeholder="{{Lang::get('label.name')}}"/>
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-lg" id="surname" placeholder="{{Lang::get('label.surname')}}"/>
            </div>
            <div class="form-group">
                <input type="email" class="form-control input-lg" id="email" placeholder="{{Lang::get('label.email')}}"/>
            </div>

            <div class="form-group">
                <textarea class="form-control input-lg" id="mailmessage" placeholder="{{Lang::get('label.message')}}"></textarea>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-lg btn-info">{{Lang::get('buttons.send')}}</button>
            </div>
        </form>
        <br/>
    </div>

</div>
@stop
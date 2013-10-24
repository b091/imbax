@extends('admin.template')

@section('content54')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-cog"></i> Konfiguracja <i class="famfamfam-flag-{{App::getLocale()}}"></i></h2>
        </div>
        <div class="box-content">

            <form class="form-horizontal" action="/admin/{{$lang}}/configuration/update.html" method="post">

                @foreach($configurationform as $key => $item)
                <div class="control-group">
                    <label class="control-label" for="config-prop-{{$key}}">{{$item->label}}</label>

                    <div class="controls">
                        <input type="{{$item->type}}" class="span6" id="config-prop-{{$key}}" value="{{$item->value}}" name="{{$item->name}}">
                    </div>
                </div>
                @endforeach

                <div class="center">
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                </div>
            </form>

        </div>
    </div>
</div>


<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-flag"></i> Języki</h2>
        </div>
        <div class="box-content">

            <form class="form-horizontal" action="/admin/{{$lang}}/lang/update.html" method="post">
                <div class="control-group">
                    <label class="control-label"></label>

                    <div class="controls">
                        <span>On</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>Default</span>
                        <span></span>
                    </div>
                </div>
                @foreach($langform as $item)
                <div class="control-group">
                    <label class="control-label" for="lang-{{$item->code}}"><i class="famfamfam-flag-{{$item->code}}"></i> {{$item->name}}</label>

                    <div class="controls">
                        <input type="checkbox" id="lang-{{$item->code}}" value="{{$item->code}}" name="langs[]" @if($item->disabled==0)checked@endif/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="default" value="{{$item->code}}" @if($item->default==1)checked@endif/>
                    </div>
                </div>
                @endforeach

                <div class="center">
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                </div>
            </form>

        </div>
    </div>
</div>

@stop
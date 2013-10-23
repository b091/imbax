@extends('admin.template')

@section('content54')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Konfiguracja</h2>
        </div>
        <div class="box-content">

            <form class="form-horizontal" action="/admin/{{$lang}}/configuration/update.html" method="post">

                @foreach($configurationform as $item)
                <div class="control-group">
                    <label class="control-label" for="">{{$item->label}}</label>

                    <div class="controls">
                        <input type="{{$item->type}}" class="span6" id="" value="{{$item->value}}" name="{{$item->name}}">
                    </div>
                </div>
                @endforeach

                <div class="">
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                    <button type="reset" class="btn">Anuluj</button>
                </div>
            </form>

        </div>
    </div>
</div>

@stop
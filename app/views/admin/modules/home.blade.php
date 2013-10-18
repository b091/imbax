@extends('admin.layout')

@section('content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> {{$menuelement->title}} ({{$menuelement->pagelink}})</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-round confirm-delete" data-id="{{$menuelement->id}}" data-link="/admin/{{$lang}}/menu/remove.html"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" method="post" action="/admin/{{$lang}}/menu/update.html">

                <input type="hidden" name="id" value="{{$menuelement->id}}"/>

                <div class="control-group">
                    <label class="control-label" for="title">Tytuł</label>

                    <div class="controls">
                        <input type="text" class="span6" id="title" value="{{$menuelement->title}}" name="title">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="link">Link</label>

                    <div class="controls">
                        <input type="text" class="input-xlarge" id="link" value="{{$menuelement->pagelink}}" name="pagelink">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="textarea2">Treść</label>

                    <div class="controls">
                        <textarea id="textarea2" rows="3" name="content">{{$menuelement->content}}</textarea>
                    </div>
                </div>
                <div class="">
                    <button type="reset" class="btn">Anuluj</button>
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                </div>
            </form>

        </div>
    </div>

</div>
@stop

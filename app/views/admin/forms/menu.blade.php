@section('modalmenu')
<div class="modal hide fade" id="menu-add">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Podstrona</h3>
    </div>
    <div class="modal-body">
        <div class="box-content">
            <form class="form-horizontal" id="menu-add-form" action="/admin/{{$lang}}/menu/add.html" method="post">

                <div class="control-group">
                    <label class="control-label" for="typeahead">Tytuł</label>

                    <div class="controls">
                        <input type="text" name="title">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="link">Link</label>

                    <div class="controls">
                        <input type="text" class="input-xlarge" id="link" value="" name="pagelink">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Typ</label>

                    <div class="controls">
                        <select name="module">
                            <option>home</option>
                            <option>contact</option>
                            <option>products</option>
                            <option>gallery</option>
                        </select>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Anuluj</a>
        <a href="#" onclick="$('#menu-add-form').submit();" class="btn btn-primary">Zapisz</a>
    </div>
</div>
@stop

@section('menu')
@if(isset($menuelement))
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> {{$menuelement->title}} ({{$menuelement->pagelink}})</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-down"></i></a>
                <a href="#" class="btn btn-round confirm-delete" data-id="{{$menuelement->id}}" data-link="/admin/{{$lang}}/menu/remove.html"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content" style="display:none;">
            <form class="form-horizontal" action="/admin/{{$lang}}/menu/update.html" method="post">
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
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                    <button type="reset" class="btn">Anuluj</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endif
@stop
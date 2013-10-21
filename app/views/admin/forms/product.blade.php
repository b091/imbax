@section('productmodal')
<div class="modal hide fade" id="product-add" style="width: 900px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Produkt</h3>
    </div>
    <div class="modal-body">
        <div class="box-content">
            <form class="form-horizontal" method="post" action="/admin/{{$lang}}/product/add.html" id="product-add-form">

                <input type="hidden" name="menu_id" value="{{$menuelement->id}}"/>

                <div class="control-group">
                    <label class="control-label" for="typeahead">Nazwa</label>
                    <div class="controls">
                        <input type="text" name="title">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="typeahead">Treść</label>
                    <div class="controls">
                        <textarea name="content"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Opcje</label>
                    <div class="controls">
                        @foreach($productsoptions as $item)
                        <label class="checkbox inline">
                            <div class="checker">
                                <span>
                                <input type="checkbox" value="{{$item->id}}" name="options[]" style="opacity: 0;">
                                </span>
                            </div>
                            {{$item->title}}
                        </label>
                        @endforeach
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="typeahead">Główna</label>
                    <div class="controls">
                        <input data-no-uniform="true" type="checkbox" class="iphone-toggle" name="specjal">
                    </div>
                </div>



            </form>

        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Anuluj</a>
        <a href="#" onclick="$('#product-add-form').submit()" class="btn btn-primary">Zapisz</a>
    </div>
</div>
@stop


@section('productoptionmodal')
<div class="modal hide fade" id="product-option-add">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Opcja</h3>
    </div>
    <div class="modal-body">
        <div class="box-content">
            <form class="form-horizontal" method="post" action="/admin/{{$lang}}/productsoptions/add.html" id="product-option-add-form">

                <input type="hidden" name="id"/>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Nazwa</label>

                    <div class="controls">
                        <input type="text" name="title">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Kolor</label>

                    <div class="controls">
                        <div class="input-append color" data-color="#000000" data-color-format="hex" id="colorpicker">
                            <input type="text" class="span6" value="" name="color" readonly>
                            <span class="add-on"><i style="background-color: #000000;"></i></span>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Anuluj</a>
        <a href="#" onclick="$('#product-option-add-form').submit()" class="btn btn-primary">Zapisz</a>
    </div>
</div>
@stop
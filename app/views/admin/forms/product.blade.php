@section('productmodal')
<div class="modal hide fade" id="product-add" style="width: 900px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Produkt</h3>
    </div>
    <div class="modal-body">
        <div class="box-content">
            <form class="form-horizontal" method="post" action="/admin/{{$lang}}/product/add.html" id="product-add-form" enctype="multipart/form-data">

                <input type="hidden" name="menu_id" value="{{$menuelement->id}}"/>
                <input type="hidden" name="id"/>

                <div class="control-group">
                    <label class="control-label" for="typeahead">Nazwa</label>

                    <div class="controls">
                        <input type="text" name="name">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="typeahead">Opis</label>

                    <div class="controls">
                        <input type="text" name="short_description">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="typeahead">Treść</label>

                    <div class="controls">
                        <textarea name="description" id="producttinymce"></textarea>
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
                    <label class="control-label" for="specjal">Główna</label>

                    <label class="checkbox inline">
                        <div class="checker">
                            <span>
                                <input type="checkbox" name="specjal" id="specjal" style="opacity: 0;" value="on">
                            </span>
                        </div>
                    </label>
                </div>

                <div class="control-group">
                    <label class="control-label" for="specjal">Wyłączona</label>

                    <label class="checkbox inline">
                        <div class="checker">
                           <span>
                               <input type="checkbox" name="disabled" id="disabled" style="opacity: 0;" value="on">
                           </span>
                        </div>
                    </label>
                </div>

                <div class="control-group">

                    <div class="control-group thumbnail-upload">
                        <label class="control-label" for="fileInput-product">Miniaturka</label>
                        <div class="controls">
                            <div id="uniform-fileInput" class="uploader">
                                <input id="fileInput-product" class="input-file uniform_on" type="file" size="19" style="opacity: 0;" name="photo">
                                <span class="filename" style="-moz-user-select: none;">Nie wybrano pliku</span>
                                <span class="action" style="-moz-user-select: none;">Z dysku</span>
                            </div>
                        </div>
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
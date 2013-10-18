@section('productmodal')
<div class="modal hide fade" id="product-add" style="width: 900px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Produkt</h3>
    </div>
    <div class="modal-body">
        <div class="box-content">
            <form class="form-horizontal">

                <div class="control-group">
                    <label class="control-label" for="typeahead">Nazwa</label>

                    <div class="controls">
                        <input type="text" class="">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Treść</label>

                    <div class="controls">

                        <textarea></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Opcje</label>

                    <div class="controls">
                        <label class="checkbox inline">
                            <div id="uniform-inlineCheckbox1" class="checker">
                <span class="">
                <input id="inlineCheckbox1" type="checkbox" value="option1" style="opacity: 0;">
                </span>
                            </div>
                            Hardox 450
                        </label>
                        <label class="checkbox inline">
                            <div id="uniform-inlineCheckbox2" class="checker">
                <span class="">
                <input id="inlineCheckbox2" type="checkbox" value="option2" style="opacity: 0;">
                </span>
                            </div>
                            Hardox 500
                        </label>
                        <label class="checkbox inline">
                            <div id="uniform-inlineCheckbox3" class="checker">
                <span class="checked">
                <input id="inlineCheckbox3" type="checkbox" value="option3" style="opacity: 0;">
                </span>
                            </div>
                            Hardox 550
                        </label>

                        <label class="checkbox inline">
                            <div id="uniform-inlineCheckbox3" class="checker">
                <span class="checked">
                <input id="inlineCheckbox3" type="checkbox" value="option3" style="opacity: 0;">
                </span>
                            </div>
                            Specjalna
                        </label>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <div class="modal-footer">
        <a href="/#" class="btn" data-dismiss="modal">Anuluj</a>
        <a href="/#" class="btn btn-primary">Zspisz</a>
    </div>
</div>
@stop
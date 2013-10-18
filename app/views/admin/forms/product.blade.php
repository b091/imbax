@section('productmodal')
<div class="modal hide fade" id="product-add">
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

                    <div class="control-group">
                        <label class="control-label" for="fileInput">File input</label>

                        <div class="controls">
                            <div id="uniform-fileInput" class="uploader">
                                <input id="fileInput" class="input-file uniform_on" type="file" size="19" style="opacity: 0;">
                                <span class="filename" style="-moz-user-select: none;">No file selected</span>
                                <span class="action" style="-moz-user-select: none;">Choose File</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <div class="modal-footer">
        <a href="/#" class="btn" data-dismiss="modal">Close</a>
        <a href="/#" class="btn btn-primary">Save changes</a>
    </div>
</div>
@stop
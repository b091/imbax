@extends('admin.layout')

@section('content')

@include('admin.forms.menu')
@yield('menu')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list-alt"></i> Produkty</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-product-add btn-round"><i class="icon-plus"></i></a>
                <a href="#" class="btn btn-product-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                    <th>Nazwa</th>
                    <th>Data dodania</th>
                    <th>Specjalna</th>
                    <th>Opcje</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td class="center">{{$item->createdat}}</td>
                    <td class="center">{{$item->specjal}}</td>
                    <td class="center">
                        <span class="label label-warning">Hardox 500</span>
                    </td>
                    <td class="center">
                        <a class="btn btn-info" href="#">
                            <i class="icon-edit icon-white"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger confirm-delete" href="#" data-id="{{$item->id}}" data-link="/admin/{{$lang}}/product/remove.html">
                            <i class="icon-trash icon-white"></i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="product-settings" class="modal hide">
    <div class="modal-header">
        <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
         <h3>Delete</h3>
    </div>
    <div class="modal-body">
        <p>Ykuyfyjft</p>
    </div>
    <div class="modal-footer">
      <a href="#" id="btnYes" class="btn danger">Yes</a>
      <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">No</a>
    </div>
</div>

@include('admin.forms.product')
@yield('productmodal')
@stop

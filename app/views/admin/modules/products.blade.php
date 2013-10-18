@extends('admin.layout')

@section('content')

@include('admin.forms.menu')
@yield('menu')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list-alt"></i> Products</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-product-add btn-round"><i class="icon-plus"></i></a>
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
                    <th>Status</th>
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
                        <span class="label label-success">Active</span>
                    </td>
                    <td class="center">
                        <a class="btn btn-success" href="#">
                            <i class="icon-zoom-in icon-white"></i>
                            View
                        </a>
                        <a class="btn btn-info" href="#">
                            <i class="icon-edit icon-white"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger" href="#">
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


@include('admin.forms.product')
@yield('productmodal')
@stop

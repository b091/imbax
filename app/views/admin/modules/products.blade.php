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
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                    <th>Nazwa</th>
                    <th>Data dodania</th>
                    <th>Główna</th>
                    <th>Włączona</th>
                    <th>Opcje</th>
                    <th>Akcje</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td class="center">{{substr($item->created_at, 0, -8)}}</td>
                    <td class="center"><span class="icon32 @if($item->specjal == "1") icon-check @else icon-cancel @endif" ></span> </td>
                    <td class="center"><span class="icon32 @if($item->disabled == "0") icon-check @else icon-cancel @endif" ></span> </td>
                    <td class="center">
                        @foreach ($item->options as $option)
                            <span class="label" style="background-color: {{$option->color}};">
                                {{$option->title}}
                            </span>&nbsp;
                        @endforeach
                    </td>
                    <td class="center" width="92px">
                        <a class="btn btn-info btn-product-edit" href="#" data-id="{{$item->id}}">
                            <i class="icon-edit icon-white"></i>
                        </a>
                        <a class="btn btn-danger confirm-delete" href="#" data-id="{{$item->id}}" data-link="/admin/{{$lang}}/product/remove.html">
                            <i class="icon-trash icon-white"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-cog"></i> Opcje produktów</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-product-option-add btn-round"><i class="icon-plus"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-down"></i></a>
            </div>
        </div>
        <div class="box-content" style="display:none;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nazwa</th>
                    <th>Kolor</th>
                    <th>Akcje</th>
                </tr>
                </thead>
                <tbody>

                @foreach($productsoptions as $item)
                <tr>
                    <td>{{$item->title}}</td>
                    <td class="center">
                        <span class="label" style="background-color: {{$item->color}};">{{$item->color}}</span>
                    </td>
                    <td class="center">
                        <a class="btn btn-info btn-product-option-edit" href="#" data-id='"{{$item->id}}"'>
                            <i class="icon-edit icon-white"></i>
                            Edytuj
                        </a>
                        <a class="btn btn-danger confirm-delete" href="#" data-id="{{$item->id}}" data-link="/admin/{{$lang}}/productsoptions/remove.html">
                            <i class="icon-trash icon-white"></i>
                            Usuń
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
@yield('productoptionmodal')
@stop

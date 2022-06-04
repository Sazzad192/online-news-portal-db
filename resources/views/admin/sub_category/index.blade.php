@extends('admin.adminmastar')
@section('subcat_view')

    <h4>Sub-Category page</h4>
    <a href="{{route('subcat.create')}}"> create </a>
    <br>
        @if (Session::has('msg'))
            <span class="alert alert-info">{{Session::get('msg')}}</span>
        @endif
    <br>

    <table class="table table-striped table-bordered bootstrap-datatable datatable">

        <thead>
            <tr>
                <th class="center">SubCategory Name</th>
                <th class="center">SubCategory Name Bangla</th>
                <th class="center">SubCategory Slug</th>
                <th class="center">SubCategory Title</th>
                <th class="center">SubCategory Meta keyword</th>
                <th class="center">SubCategory Meta descriptiion</th>
                <th class="center">SubCategory Position</th>
                <th class="center">SubImage Icon Path</th>
                <th class="center">SubImage Menu Path</th>
                <th class="center">SubImage Cover Home Path</th>
                <th class="center">SubImage Cover Inner Path</th>
                <th class="center">Status</th>
            </tr>
        </thead> 
        <tbody>
            @foreach ($subcategory as $item)
                <tr>
                    <td class="center">{{$item->subcat_name}}</td>
                    <td class="center">{{$item->category->cat_name}}</td>
                    <td class="center">{{$item->subcat_name_bn}}</td>
                    <td class="center">{{$item->subcat_slug}}</td> 
                    <td class="center">{{$item->subcat_title}}</td>
                    <td class="center">{{$item->subcat_meta_keyword}}</td> 
                    <td class="center">{{$item->subcat_meta_description}}</td>
                    <td class="center">{{$item->img_icon_path}}</td> 
                    <td class="center">{{$item->img_menu_path}}</td> 
                    <td class="center">{{$item->img_cover_home_path}}</td> 
                    <td class="center">{{$item->img_cover_inner_path}}</td>
                    <td class="center">
                        @if($item->status==1)
                        <span class="label label-success">Active</span>
                        @else
                        <span class="label label-danger">Deactive</span>
                        @endif
                    </td>
                    <td> <a class="btn btn-info" href="{{url('subcat/'.$item->subcat_id.'/edit',)}}"> <i class="halflings-icon white edit"></i> </a> </td>
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
@extends('admin.adminmastar')
@section('contentposition_view')

    <h4>Division page</h4>
    <a href="{{route('conposition.create')}}"> create </a>
    <br>
        @if (Session::has('msg'))
            <span class="alert alert-info">{{Session::get('msg')}}</span>
        @endif
    <br>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                
                <td>Position Name</td>
                <td>Position Slug</td>
                <td>Category Name</td>
                <td>SubCategory Name</td>
                <td>Tag</td>
                <td>Content Id's</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($conposition as $item)
                <tr>
                    <td>{{$item->position_name}}</td>
                    <td>{{$item->position_slug}}</td>
                    <td>{{$item->categorys->cat_name}}</td> 
                    <td>{{$item->subcategory->subcat_name}}</td>
                    <td>{{$item->teg}}</td> 
                    <td>{{$item->content_ids}}</td>
                    
                    {{-- <td> <a href="{{route('division.edit',$item->division_id)}}"> Edit </a> </td>
                    <td> <a href="">Delete</a> </td> --}}
                    
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
@extends('admin.adminmastar')
@section('division_view')

    <h4>Division page</h4>
    <a href="{{route('division.create')}}"> create </a>
    <br>
        @if (Session::has('msg'))
            <span class="alert alert-info">{{Session::get('msg')}}</span>
        @endif
    <br>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <td>Division Name</td>
                <td>Division Name Bangla</td>
                <td>Division Slug</td>
                <td>Division Title</td>
                <td>Meta Description</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($divisions as $item)
                <tr>
                    <td>{{$item->division_name}}</td> 
                    <td>{{$item->division_name_bn}}</td>
                    <td>{{$item->division_slug}}</td> 
                    <td>{{$item->division_title}}</td> 
                    <td>{{$item->meta_description}}</td>
                    {{-- <td> <a href="{{route('division.edit',$item->division_id)}}"> Edit </a> </td>
                    <td> <a href="">Delete</a> </td> --}}
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
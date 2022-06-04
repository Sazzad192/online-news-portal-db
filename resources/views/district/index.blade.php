@extends('admin.adminmastar')
@section('district_view')

    <h4>District page</h4>
    <a href="{{route('district.create')}}"> create </a>
    <br>
        @if (Session::has('msg'))
            <span class="alert alert-info">{{Session::get('msg')}}</span>
        @endif
    <br>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <td>District Name</td>
                <td>Division Name</td>
                <td>District Name Bangla</td>
                <td>District Slug</td>
                <td>District Title</td>
                <td>Image Path</td>
                <td>Position</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($district as $item)
                <tr>
                    <td>{{$item->district_name}}</td>
                    <td class="center">{{$item->divisions->division_name}}</td>
                    <td>{{$item->district_name_bn}}</td>
                    <td>{{$item->district_slug}}</td> 
                    <td>{{$item->district_title}}</td>
                    <td>{{$item->img_path}}</td>
                    <td>{{$item->position}}</td>
                    {{-- <td>{{$item->deletable}}</td> --}}
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
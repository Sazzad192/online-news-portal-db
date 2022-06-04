@extends('admin.adminmastar')
@section('upazila_view')

    <h4>Division page</h4>
    <a href="{{route('upazila.create')}}"> create </a>
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
                <td>Upazila Name</td>
                <td>Upazila Name Bangla</td>
                <td>Upazila Slug</td>
                <td>Upazila Title</td>
                <td>Meta Description</td>
                <td>Position</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($upazilas as $item)
                <tr>
                    {{-- <td>{{$item->districts->district_name}}</td> --}}
                    <td>{{$item->divisions->division_name}}</td>
                    <td>{{$item->districts->district_name}}</td>
                    <td>{{$item->upazila_name}}</td> 
                    <td>{{$item->upazila_name_bn}}</td>
                    <td>{{$item->upazila_slug}}</td> 
                    <td>{{$item->upazila_title}}</td> 
                    <td>{{$item->meta_description}}</td>
                    <td>{{$item->position}}</td>
                    {{-- <td> <a href="{{route('division.edit',$item->division_id)}}"> Edit </a> </td>
                    <td> <a href="">Delete</a> </td> --}}
                    
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
@extends('admin.adminmastar')
@section('country_view')

    <a href="{{route('country.create')}}"> create </a>
    <br>
        @if (Session::has('msg'))
            <span class="alert alert-info">{{Session::get('msg')}}</span>
        @endif
    <br> <br> <br>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">

        <thead>
            <tr>
                <td> Country Name </td>
                <td> Country Name Bangla</td>
                <td> Country Slug</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($counties as $item)
                <tr>
                    <td>{{$item->country_name}}</td>
                    <td>{{$item->country_name_bn}}</td>
                    <td>{{$item->country_slug}}</td>
                    
                    {{-- <td><a href="{{route('country.edit',$item->country_id)}}">Edit</a></td>
                    <td><a href="">Delete</a></td>
                    <br> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
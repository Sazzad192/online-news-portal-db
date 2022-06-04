@extends('admin.adminmastar')
@section('audittrail_view')

    <h4>Category page</h4>
    <a href="{{route('audittrail.create')}}"> create </a>
    <br>
        @if (Session::has('msg'))
            <span class="alert alert-info">{{Session::get('msg')}}</span>
        @endif
    <br>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <td class="center">Audittrail Name</td>
                <td class="center">IP</td>
                <td class="center">Action Type</td>
                <td class="center">Action Datetime</td>
                <td class="center">Path Name</td>
                <td class="center">Query Details</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($audittrail as $item)
            <tr>
                {{-- <td>{{$item->audittrail_id}}</td> --}}
                <td>{{$item->name}}</td>
                <td>{{$item->ip}}</td>
                <td>{{$item->action_type}}</td> 
                <td>{{$item->action_datetime}}</td>
                <td>{{$item->path_name}}</td> 
                <td>{{$item->query_details}}</td>
                {{-- <td> <a href="{{route('audittrail.edit',$item->audittrail_id)}}"> Edit </a> </td>
                <td> <a href="">Delete</a> </td> --}}
                <br>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
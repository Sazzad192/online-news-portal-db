<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>authors page</h4>
    <a href="{{route('audittrail.create')}}"> create </a>
    <br>
        @if (Session::has('msg'))
            <span class="alert alert-info">{{Session::get('msg')}}</span>
        @endif
    <br>
    @foreach ($audittrail as $item)
    <h2>Audittrail</h2>
        <tr>
            
            {{-- <td>{{$item->audittrail_id}}</td> --}}
            <td>{{$item->name}}</td>
            <td>{{$item->ip}}</td> 
            <td>{{$item->action_type}}</td>
            <td>{{$item->action_datetime}}</td> 
            <td>{{$item->query_details}}</td> 
            <td> <a href="{{route('audittrail.edit',$item->audittrail_id)}}"> Edit </a> </td>
            <td> <a href="">Delete</a> </td>
            <br>
        </tr>
    @endforeach
</body>
</html>
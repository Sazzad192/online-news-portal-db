@extends('admin.adminmastar')
@section('audittrail_create')

    <a href="{{url('audittrail')}}">Back to home</a>
    
    <form action="{{route('audittrail.store')}}" method="POST">
        
        {{@csrf_field()}}
        <div>
            <label for="name"> Name: </label>
            <input type="text" name="name" id="name" value="{{old('name')}}" required > <br>
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="ip"> IP: </label>
            <input type="text" name="ip" id="ip" value="{{old('ip')}}" required > <br>
            @error('ip')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="action_type"> Action type: </label>
            <input type="text" name="action_type" id="action_type" value="{{old('action_type')}}" required > <br>
            @error('action_type')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="path_name"> Path name: </label>
            <input type="text" name="path_name" id="path_name" value="{{old('path_name')}}" required > <br>
            @error('path_name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="query_details"> Query Details: </label>
            <input type="text" name="query_details" id="query_details" value="{{old('query_details')}}" required > <br>
            @error('query_details')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    
    </form>
@endsection
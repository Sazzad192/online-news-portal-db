@extends('admin.adminmastar')
@section('division_create')

    <a href="{{url('division')}}">Back to home</a>
    
    <form action="{{route('division.store')}}" method="POST">
        
        {{@csrf_field()}}

        return view('division.create');return view('division.create');
        <div>
            <label for="division_name_bn"> Division name bangla: </label>
            <input type="text" name="division_name_bn" id="division_name_bn" value="{{old('division_name_bn')}}" required > <br>
            @error('division_name_bn')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="division_slug"> Division Slug: </label>
            <input type="text" name="division_slug" id="division_slug" value="{{old('division_slug')}}" required > <br>
            @error('division_slug')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="division_title"> Division Title </label>
            <input type="text" name="division_title" id="division_title" value="{{old('division_title')}}" required > <br>
            @error('division_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="meta_description"> Meta Description: </label>
            <input type="text" name="meta_description" id="meta_description" value="{{old('meta_description')}}" required > <br>
            @error('meta_description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    
    </form>

@endsection
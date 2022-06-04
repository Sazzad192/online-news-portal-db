@extends('admin.adminmastar')
@section('country_create')

    <a href="{{url('country')}}">Back to home</a>
    
    <form action="{{route('country.store')}}" method="POST">
        
        {{@csrf_field()}}
        <div>
            <label for="cname"> Country Name: </label>
            <input type="text" name="country_name" id="cname" value="{{old('country_name')}}" required > <br>
            @error('country_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="cnamebn"> Country Name Bangla: </label>
            <input type="text" name="country_name_bn" id="cnamebn" value="{{old('country_name_bn')}}" required > <br>
            @error('country_name_bn')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="cslug"> Country Slug: </label>
            <input type="text" name="country_slug" id="cslug" value="{{old('country_slug')}}" required > <br>
            @error('country_slug')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    
    </form>

@endsection
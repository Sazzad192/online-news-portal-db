@extends('admin.adminmastar')
@section('district_create')

    <a href="{{url('district')}}">Back to home</a>
        
    <form action="{{route('district.store')}}" method="POST">
        
        {{@csrf_field()}}
        <div>
            <label for="district_name"> District Name: </label>
            <input type="text" name="district_name" id="district_name" value="{{old('district_name')}}" required > <br>
            @error('district_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="district_name_bn"> District Name Bangla: </label>
            <input type="text" name="district_name_bn" id="district_name_bn" value="{{old('district_name_bn')}}" required > <br>
            @error('district_name_bn')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="">Divisions</label>
            <select name="division_id" id="">
                <option value="">select division</option>

                @foreach ($district as $item)
                    <option value="{{$item->division_id}}">{{$item->division_name}}</option>
                @endforeach

            </select>
        </div>

        <div>
            <label for="district_slug"> District Slug: </label>
            <input type="text" name="district_slug" id="district_slug" value="{{old('district_slug')}}" required > <br>
            @error('district_slug')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="district_title"> District Title: </label>
            <input type="text" name="district_title" id="district_title" value="{{old('district_title')}}" required > <br>
            @error('district_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="img_path"> Image Path: </label>
            <input type="text" name="img_path" id="img_path" value="{{old('img_path')}}" required > <br>
            @error('img_path')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="position"> Position: </label>
            <input type="text" name="position" id="position" value="{{old('position')}}" required > <br>
            @error('position')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    
    </form>


@endsection
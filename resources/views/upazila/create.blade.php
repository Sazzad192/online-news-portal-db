@extends('admin.adminmastar')
@section('upazila_view')

    <a href="{{url('upazila')}}">Back to home</a>
        
    <form action="{{route('upazila.store')}}" method="POST">
        
        {{@csrf_field()}}
        <div>
            <label for="upazila_name"> Upazila Name: </label>
            <input type="text" name="upazila_name" id="upazila_name" value="{{old('upazila_name')}}" required > <br>
            @error('upazila_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="upazila_name_bn"> Upazila Name Bangla: </label>
            <input type="text" name="upazila_name_bn" id="upazila_name_bn" value="{{old('upazila_name_bn')}}" required > <br>
            @error('upazila_name_bn')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="">Divisions</label>
            <select name="division_id" id="">
                <option value=""> Select division </option>

                @foreach ($divisions as $item)
                    <option value="{{$item->division_id}}">{{$item->division_name}}</option>
                @endforeach

            </select>
        </div>

        <div>
            <label for="">District</label>
            <select name="district_id" id="">
                <option value=""> Select district </option>

                @foreach ($districts as $item)
                    <option value="{{$item->district_id}}">{{$item->district_name}}</option>
                @endforeach

            </select>
        </div>

        <div>
            <label for="upazila_slug"> Upazila Slug: </label>
            <input type="text" name="upazila_slug" id="upazila_slug" value="{{old('upazila_slug')}}" required > <br>
            @error('upazila_slug')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="upazila_title"> Upazila Title: </label>
            <input type="text" name="upazila_title" id="upazila_title" value="{{old('upazila_title')}}" required > <br>
            @error('upazila_title')
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
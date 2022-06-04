@extends('admin.adminmastar')
@section('contentposition_create')

    <a href="{{url('conposition')}}">Back to home</a>
        
    <form action="{{route('conposition.store')}}" method="POST">
        
        {{@csrf_field()}}
        <div>
            <label for="position_name"> Position Name: </label>
            <input type="text" name="position_name" id="position_name" value="{{old('position_name')}}" required > <br>
            @error('position_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="position_slug"> Position slug: </label>
            <input type="text" name="position_slug" id="position_slug" value="{{old('position_slug')}}" required > <br>
            @error('position_slug')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="">Category</label>
            <select name="cat_id" id="">
                <option value=""> Select Category </option>

                @foreach ($categorys as $item)
                    <option value="{{$item->cat_id}}">{{$item->cat_name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="">Sub Category</label>
            <select name="subcat_id" id="">
                <option value=""> Select subcategory </option>

                @foreach ($subcategorys as $item)
                    <option value="{{$item->subcat_id}}">{{$item->subcat_name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="teg"> Tag: </label>
            <input type="text" name="teg" id="teg" value="{{old('teg')}}" required > <br>
            @error('teg')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {{-- <div>
            <label for="upazila_title"> Upazila Title: </label>
            <input type="text" name="upazila_title" id="upazila_title" value="{{old('upazila_title')}}" required > <br>
            @error('upazila_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div> --}}

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    
    </form>


@endsection
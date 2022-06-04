@extends('admin.adminmastar')
@section('subcat_create_view')

<div class="box-content">
    <a href="{{url('subcat')}}">Back to home</a>
        
    <form action="{{route('subcat.store')}}" method="POST">
        
        {{@csrf_field()}}
        <div>
            <label for="subcat_name"> Sub-Category Name: </label>
            <input type="text" name="subcat_name" id="subcat_name" value="{{old('subcat_name')}}" required > <br>
            @error('subcat_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="subcat_name_bn"> Sub-Category Name Bangla: </label>
            <input type="text" name="subcat_name_bn" id="subcat_name_bn" value="{{old('subcat_name_bn')}}" required > <br>
            @error('subcat_name_bn')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="">Select Category</label>
            <select name="cat_id" id="">
                <option value="">select catrgory</option>
                {{-- @dd($categorys); --}}
                @foreach ($category as $item)
                    <option value="{{$item->cat_id}}">{{$item->cat_name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="subcat_slug"> Sub-Category Slug: </label>
            <input type="text" name="subcat_slug" id="subcat_slug" value="{{old('subcat_slug')}}" required > <br>
            @error('subcat_slug')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="subcat_title"> Sub-Category title: </label>
            <input type="text" name="subcat_title" id="subcat_title" value="{{old('subcat_title')}}" required > <br>
            @error('subcat_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="subcat_meta_keyword"> Sub-Category meta keyword: </label>
            <input type="text" name="subcat_meta_keyword" id="subcat_meta_keyword" value="{{old('subcat_meta_keyword')}}" required > <br>
            @error('subcat_meta_keyword')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="subcat_meta_description"> Sub-Category meta description: </label>
            <input type="text" name="subcat_meta_description" id="subcat_meta_description" value="{{old('subcat_meta_description')}}" required > <br>
            @error('subcat_meta_description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="">Status:</label>
            <div style="display:flex;">
                <input type="radio" id="sactive" name="status" value="1" required>
                <label for="sactive">Active</label>    &nbsp;&nbsp;&nbsp;
                <input type="radio" id="not-active" name="status" value="0" required>
                <label for="not-active">Not-active</label>
            </div>
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    
    </form>
</div> 


@endsection
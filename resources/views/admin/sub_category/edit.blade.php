@extends('admin.adminmastar')
@section('subcat_edit_view')
        
    <form action="{{route('subcat.update', $subcategory->subcat_id)}}" method="POST">
        
        {{@csrf_field()}}
        {{method_field('PATCH')}}
        <div>
            <label for="subcat_name"> Sub-Category Name: </label>
            <input type="text" name="subcat_name" id="subcat_name" value="{{$subcategory->subcat_name}}" required > <br>
            @error('subcat_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="subcat_name_bn"> Sub-Category Name Bangla: </label>
            <input type="text" name="subcat_name_bn" id="subcat_name_bn" value="{{$subcategory->subcat_name_bn}}" required > <br>
            @error('subcat_name_bn')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="">Category</label>
            <select name="cat_id" id="">
                @foreach ($cats as $item)
                    <option value="{{$item->cat_id}}" {{ $subcategory->cat_id == $item->cat_id  ? 'selected' : ''}} >
                        {{$item->cat_name}}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="subcat_slug"> Sub-Category Slug: </label>
            <input type="text" name="subcat_slug" id="subcat_slug" value="{{$subcategory->subcat_slug}}" required > <br>
            @error('subcat_slug')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="subcat_title"> Sub-Category title: </label>
            <input type="text" name="subcat_title" id="subcat_title" value="{{$subcategory->subcat_title}}" required > <br>
            @error('subcat_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="subcat_meta_keyword"> Sub-Category meta keyword: </label>
            <input type="text" name="subcat_meta_keyword" id="subcat_meta_keyword" value="{{$subcategory->subcat_meta_keyword}}" required > <br>
            @error('subcat_meta_keyword')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="subcat_meta_description"> Sub-Category meta description: </label>
            <input type="text" name="subcat_meta_description" id="subcat_meta_description" value="{{$subcategory->subcat_meta_description}}" required > <br>
            @error('subcat_meta_description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {{-- show status --}}
        <div>
            <label for="">Status: </label>
            @if($subcategory->status==1)
                <a href="{{url('status/' .$subcategory->subcat_id)}}">Active</a>
                @else
                <a href="{{url('status/' .$subcategory->subcat_id)}}">Not Active</a>
            @endif
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    
    </form>

@endsection
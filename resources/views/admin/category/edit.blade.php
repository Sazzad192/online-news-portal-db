@extends('admin.adminmastar')
@section('cat_edit_view')

    <form action="{{route('category.update',$comCategories->cat_id)}}" method="POST" enctype="multipart/form-data">
        
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div>
            <label for="cat_name"> Category Name: </label>
            <input type="text" name="cat_name" id="cat_name" value="{{$comCategories->cat_name}}" required > <br>
            @error('cat_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="cat_name_bn"> Category Name Bangla: </label>
            <input type="text" name="cat_name_bn" id="cat_name_bn" value="{{$comCategories->cat_name_bn}}" required > <br>
            @error('cat_name_bn')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="cat_slug"> Category Slug: </label>
            <input type="text" name="cat_slug" id="cat_slug" value="{{$comCategories->cat_slug}}" required > <br>
            @error('cat_slug')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="cat_title"> Category title: </label>
            <input type="text" name="cat_title" id="cat_title" value="{{$comCategories->cat_title}}" required > <br>
            @error('cat_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="cat_meta_keyword"> Category meta keyword: </label>
            <input type="text" name="cat_meta_keyword" id="cat_meta_keyword" value="{{$comCategories->cat_meta_keyword}}" required > <br>
            @error('cat_meta_keyword')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="cat_meta_description"> Category meta description: </label>
            <input type="text" name="cat_meta_description" id="cat_meta_description" value="{{$comCategories->cat_meta_description}}" required > <br>
            @error('cat_meta_description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="cat_position"> Category position: </label>
            <input type="text" name="cat_position" id="cat_position" value="{{$comCategories->cat_position}}" required > <br>
            @error('cat_position')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="img_icon_path"> Image Icon Path: </label>
            <input type="file" name="img_icon_path" id="img_icon_path" value="{{$comCategories->img_icon_path}}" > <br>
            @error('img_icon_path')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="img_menu_path"> Image Menu Path: </label>
            <input type="file" name="img_menu_path" id="img_menu_path" value="{{$comCategories->img_menu_path}}" > <br>
            @error('img_menu_path')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {{-- show status --}}
            <div>
                <label for="">Status: </label>
                @if($comCategories->status==1)
                    <a href="{{url('status' .$comCategories->cat_id)}}">Active</a>
                    @else
                    <a href="{{url('status' .$comCategories->cat_id)}}">Not Active</a>
                @endif
            </div>

        {{-- show at apps --}}
            <div>
                <label for="">Show at apps: </label>
                @if($comCategories->show_at_apps==1)
                    <a href="{{url('show_app'.$comCategories->cat_id)}}">show-at-apps</a>
                    @else
                    <a href="{{url('show_app'.$comCategories->cat_id)}}">not_show</a>
                @endif
            </div>

        {{-- show Tags --}}
            <div>
                <label for="">Show Tags: </label>
                @if($comCategories->show_tags==1)
                    <a href="{{url('/show_tag'.$comCategories->cat_id)}}">show-tag</a>
                    @else
                    <a href="{{url('/show_tag'.$comCategories->cat_id)}}">no-tag-show</a>
                @endif
            </div>
        
        <div>
            <input type="submit" name="submit" value="Submit">
        </div>

    </form>
@endsection
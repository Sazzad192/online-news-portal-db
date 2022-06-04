@extends('admin.adminmastar')
@section('create_view')


    <div class="box-content">
        <a href="{{url('category')}}">Back to home</a>
        
        <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
            
            {{@csrf_field()}}

            <div>
                <label for="cat_name"> Category Name: </label>
                <input type="text" name="cat_name" id="cat_name" value="{{old('cat_name')}}" required > <br>
                @error('cat_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="cat_name_bn"> Category Name Bangla: </label>
                <input type="text" name="cat_name_bn" id="cat_name_bn" value="{{old('cat_name_bn')}}" required > <br>
                @error('cat_name_bn')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="cat_slug"> Category Slug: </label>
                <input type="text" name="cat_slug" id="cat_slug" value="{{old('cat_slug')}}" required > <br>
                @error('cat_slug')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="cat_title"> Category title: </label>
                <input type="text" name="cat_title" id="cat_title" value="{{old('cat_title')}}" required > <br>
                @error('cat_title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="cat_meta_keyword"> Category meta keyword: </label>
                <input type="text" name="cat_meta_keyword" id="cat_meta_keyword" value="{{old('cat_meta_keyword')}}" required > <br>
                @error('cat_meta_keyword')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="cat_meta_description"> Category meta description: </label>
                <input type="text" name="cat_meta_description" id="cat_meta_description" value="{{old('cat_meta_description')}}" required > <br>
                @error('cat_meta_description')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="cat_position"> Category position: </label>
                <input type="text" name="cat_position" id="cat_position" value="{{old('cat_position')}}" required > <br>
                @error('cat_position')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="img_icon_path"> Image Icon Path: </label>
                <input type="file" name="img_icon_path" id="img_icon_path" value="{{old('img_icon_path')}}" > <br>
                @error('img_icon_path')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="img_menu_path"> Image Menu Path: </label>
                <input type="file" name="img_menu_path" id="img_menu_path" value="{{old('img_menu_path')}}" > <br>
                @error('img_menu_path')
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
                <label for="">Show at apps:</label>
                <div style="display:flex">
                    <input type="radio" id="sapps" name="show_at_apps" value="1" required>
                    <label for="sapps">Show</label>  &nbsp;&nbsp;&nbsp;
                    <input type="radio" id="not-sapps" name="show_at_apps" value="0" required>
                    <label for="not-sapps">Not show</label>
                </div>
            </div>

            <div>
                <label for="">Show tags:</label>
                <div style="display: flex">
                    <input type="radio" id="stags" name="show_tags" value="1" required>
                    <label for="stags">Show tags</label> &nbsp;&nbsp;&nbsp;
                    <input type="radio" id="not-stags" name="show_tags" value="0" required>
                    <label for="not-stags">No tag show</label>
                </div>
            </div>

            <div>
                <input type="submit" name="submit" value="Submit">
            </div>
        
        </form>
    </div>
        

@endsection
    
    

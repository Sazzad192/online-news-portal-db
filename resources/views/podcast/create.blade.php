@extends('admin.adminmastar')
@section('podcast_view')


    <a href="{{url('podcast')}}">Back to home</a>

    <form action="{{route('podcast.store')}}" method="POST">
        {{@csrf_field()}}
        
        <div>
            <label for="">Category</label>
            <select name="cat_id" id="">
                
                @foreach ($categorys as $item)
                    <option value="{{$item->cat_id}}">{{$item->cat_name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="cloud_url"> Cloud_url: </label>
            <input type="text" name="cloud_url" id="cloud_url" value="{{old('cloud_url')}}" required > <br>
            @error('cloud_url')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="heading"> Heading: </label>
            <input type="text" name="heading" id="heading" value="{{old('heading')}}" required > <br>
            @error('heading')
            <span class="heading">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="cloud_id"> Cloud ID: </label>
            <input type="text" name="cloud_id" id="cloud_id" value="{{old('cloud_id')}}" required > <br>
            @error('cloud_id')
            <span class="cloud_id">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="news_body"> News Body: </label>
            <input type="text" name="news_body" id="news_body" value="{{old('news_body')}}" required > <br>
            @error('news_body')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div>
            <label for="news_header"> News Header: </label>
            <input type="text" name="news_header" id="news_header" value="{{old('news_header')}}" required > <br>
            @error('news_header')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="news_img_path"> News Img Path: </label>
            <input type="file" name="news_img_path" id="news_img_path" value="{{old('news_img_path')}}" > <br>
            @error('news_img_path')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>

    </form>
@endsection 
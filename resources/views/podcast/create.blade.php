@extends('admin.adminmastar')
@section('division_create')


    <a href="{{url('division')}}">Back to home</a>

    <form action="{{route('podcast.store')}}" method="POST">
        {{@csrf_field()}}
        <div>
            <label for="division_name_bn"> podcast name heading: </label>
            <input type="text" name="heading" id="heading" value="{{old('heading')}}" required > <br>
            @error('heading')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="division_name_bn"> podcast URL: </label>
            <input type="text" name="podcast_url" id="podcast_url" value="{{old('podcast_url')}}" required > <br>
            @error('podcast_url')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>

    </form>
@endsection 
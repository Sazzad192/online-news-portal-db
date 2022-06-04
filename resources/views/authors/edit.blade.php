@extends('admin.adminmastar')
@section('author_edit')

    {{-- <a href="{{url('authors',)}}">Back to home</a> --}}
    
    <form action="{{route('author.update', $author->author_id)}}" method="POST">
        
        {{@csrf_field()}}
        {{method_field('PATCH')}}

        <div>
            <label for=""> Author Type </label>
            <input type="text" class="" value="{{$author->author_type}}" name="author_type">
        </div>

        <div>
            <label for="author_name"> Authors Name: </label>
            <input type="text" name="author_name" id="author_name" value="{{$author->author_name}}" required > <br>
            @error('author_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="author_name_bn"> Authors Name Bangla: </label>
            <input type="text" name="author_name_bn" id="author_name_bn" value="{{$author->author_name_bn}}" required > <br>
            @error('author_name_bn')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="author_name_slug"> Authors Name Slug: </label>
            <input type="text" name="author_name_slug" id="author_slug" value="{{$author->author_name_slug}}" required > <br>
            @error('author_name_slug')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="author_initial"> Authors initial: </label>
            <input type="text" name="author_initial" id="author_initial" value="{{$author->author_initial}}" required > <br>
            @error('author_initial')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="designation"> Designation: </label>
            <input type="text" name="designation" id="designation" value="{{$author->designation}}" required > <br>
            @error('designation')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="designation_en"> Designation english: </label>
            <input type="text" name="designation_en" id="designation_en" value="{{$author->designation_en}}" required > <br>
            @error('designation_en')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="author_bio"> Authors Bio: </label>
            <input type="text" name="author_bio" id="author_bio" value="{{$author->author_bio}}" required > <br>
            @error('author_bio')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="author_bio_bn"> Authors Bio Bangla: </label>
            <input type="text" name="author_bio_bn" id="author_bio_bn" value="{{$author->author_bio_bn}}" required > <br>
            @error('author_bio_bn')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="facebook_url"> Facebook url: </label>
            <input type="text" name="facebook_url" id="facebook_url" value="{{$author->facebook_url}}" required > <br>
            @error('facebook_url')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="twitter_url"> Twitter url: </label>
            <input type="text" name="twitter_url" id="twitter_url" value="{{$author->twitter_url}}" required > <br>
            @error('twitter_url')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="linkedin_url"> Linkedin url: </label>
            <input type="text" name="linkedin_url" id="linkedin_url" value="{{$author->linkedin_url}}" required > <br>
            @error('linkedin_url')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {{-- show by line --}}
        <div>
            <label for="">Show byline: </label>
            @if($author->show_byline==1)
                <a href="{{url('show_byline/' .$author->author_id)}}">Show line</a>
                @else
                <a href="{{url('show_byline/' .$author->author_id)}}">Not Show line</a>
            @endif
        </div>

        {{-- Noindex --}}
        <div>
            <label for="">No Index: </label>
            @if($author->noindex==1)
                <a href="{{url('noindex/' .$author->author_id)}}">yes</a>
                @else
                <a href="{{url('noindex/' .$author->author_id)}}">No</a>
            @endif
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    
    </form>
@endsection
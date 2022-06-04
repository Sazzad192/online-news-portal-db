@extends('admin.adminmastar')
@section('author_create')

    <a href="{{url('authors')}}">Back to home</a>
    
    <form action="{{route('author.store')}}" method="POST">
        
        {{@csrf_field()}}

        <div>

            <label for="">Author Type:</label>
            <select name="author_type" id="">
                <option >select catrgory</option>
                <option value="1">Author 1</option>
                <option value="2">Author 2</option>
                <option value="3">Author 3</option>
            </select>
            
        </div>
        <div>
            <label for="author_name"> Authors Name: </label>
            <input type="text" name="author_name" id="author_name" value="{{old('author_name')}}" required > <br>
            @error('author_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="author_name_bn"> Authors Name Bangla: </label>
            <input type="text" name="author_name_bn" id="author_name_bn" value="{{old('author_name_bn')}}" required > <br>
            @error('author_name_bn')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="author_name_slug"> Authors Name Slug: </label>
            <input type="text" name="author_name_slug" id="author_slug" value="{{old('author_name_slug')}}" required > <br>
            @error('author_name_slug')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="author_initial"> Authors initial: </label>
            <input type="text" name="author_initial" id="author_initial" value="{{old('author_initial')}}" required > <br>
            @error('author_initial')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="designation"> Designation: </label>
            <input type="text" name="designation" id="designation" value="{{old('designation')}}" required > <br>
            @error('designation')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="designation_en"> Designation english: </label>
            <input type="text" name="designation_en" id="designation_en" value="{{old('designation_en')}}" required > <br>
            @error('designation_en')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="author_bio"> Authors Bio: </label>
            <input type="text" name="author_bio" id="author_bio" value="{{old('author_bio')}}" required > <br>
            @error('author_bio')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="author_bio_bn"> Authors Bio Bangla: </label>
            <input type="text" name="author_bio_bn" id="author_bio_bn" value="{{old('author_bio_bn')}}" required > <br>
            @error('author_bio_bn')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="facebook_url"> Facebook url: </label>
            <input type="text" name="facebook_url" id="facebook_url" value="{{old('facebook_url')}}" required > <br>
            @error('facebook_url')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="twitter_url"> Twitter url: </label>
            <input type="text" name="twitter_url" id="twitter_url" value="{{old('twitter_url')}}" required > <br>
            @error('twitter_url')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="linkedin_url"> Linkedin url: </label>
            <input type="text" name="linkedin_url" id="linkedin_url" value="{{old('linkedin_url')}}" required > <br>
            @error('linkedin_url')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="">Show byline:</label>
            <div style="display:flex">
                <input type="radio" id="sapps" name="show_at_apps" value="1" required>
                <label for="sapps">Show line</label>  &nbsp;&nbsp;&nbsp;
                <input type="radio" id="not-sapps" name="show_at_apps" value="0" required>
                <label for="not-sapps">Not Show line</label>
            </div>
        </div>

        <div>
            <label for="">Noindex:</label>
            <div style="display:flex">
                <input type="radio" id="sapps" name="show_at_apps" value="1" required>
                <label for="sapps">Indexed</label>  &nbsp;&nbsp;&nbsp;
                <input type="radio" id="not-sapps" name="show_at_apps" value="0" required>
                <label for="not-sapps">Not Indexed</label>
            </div>
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    
    </form>
@endsection
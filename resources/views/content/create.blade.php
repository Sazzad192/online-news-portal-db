@extends('admin.adminmastar')
@section('content_create')

{{-- @dd($upazilas) --}}
    <a href="{{url('content')}}">Back to home</a>
        
    <form action="{{route('content.store')}}" method="POST">
        
        {{@csrf_field()}}
        <div>
            <label for=""> Content Type </label>
            <select name="content_type" id="">
                <option >select content type</option>
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option>
                <option value="3">D</option>
            </select>
        </div>

        <div>
            <label for="">Category</label>
            <select name="cat_id" id="">
                

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
            <label for="country_id">Country</label>
            <select name="country_id" id="country_id">
                <option value=""> Select Country </option>

                @foreach ($country as $item)
                
                    <option value="{{$item->country_id}}">{{$item->country_name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="">Division</label>
            <select name="division_id" id="">
                <option value=""> Select Division </option>

                @foreach ($divisions as $item)
                    <option value="{{$item->division_id}}">{{$item->division_name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">District</label>
            <select name="district_id" id="">
                <option value=""> Select District </option>

                @foreach ($districts as $item)
                    <option value="{{$item->district_id}}">{{$item->district_name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="">Upozila</label>
            <select name="upazila_id" id="">
                <option value=""> Select upozila </option>

                @foreach ($upazilas as $item)
                    <option value="{{$item->upazila_id}}">{{$item->upazila_name}}</option>
                @endforeach
            </select>
        </div>

        {{-- @dd($upazilas) --}}
        {{-- <div>
            <label for="">Upazilas</label>
            <select name="upozila_id" id="">
                <option value=""> Select Upazilas </option>

                @foreach ($upazilas as $item)
                    <option value="{{$item->upozila_id}}">{{$item->upozila_name}}</option>
                @endforeach
            </select>
        </div> --}}

        <div>
            <label for="photo_ids"> Photo Ids: </label>
            <input type="text" name="photo_ids" id="photo_ids" value="{{old('photo_ids')}}" required > <br>
            @error('photo_ids')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="content_heading"> Content Heading: </label>
            <input type="text" name="content_heading" id="content_heading" value="{{old('content_heading')}}" required > <br>
            @error('content_heading')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="content_sub_heading"> Content Sub Heading: </label>
            <input type="text" name="content_sub_heading" id="content_sub_heading" value="{{old('content_sub_heading')}}" required > <br>
            @error('content_sub_heading')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div>
            <label for="reporting_area"> Reporting Area: </label>
            <input type="text" name="reporting_area" id="reporting_area" value="{{old('reporting_area')}}" required > <br>
            @error('reporting_area')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="author_slugs"> Author Slugs: </label>
            <input type="text" name="author_slugs" id="author_slugs" value="{{old('author_slugs')}}" required > <br>
            @error('author_slugs')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="custom_byname"> Custom Byname: </label>
            <input type="text" name="custom_byname" id="custom_byname" value="{{old('custom_byname')}}" required > <br>
            @error('custom_byname')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="seo_url"> SEO url: </label>
            <input type="text" name="seo_url" id="seo_url" value="{{old('seo_url')}}" required > <br>
            @error('seo_url')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="seo_title"> SEO title: </label>
            <input type="text" name="seo_title" id="seo_title" value="{{old('seo_title')}}" required > <br>
            @error('seo_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="img_bg_path"> Image Background Path: </label>
            <input type="file" name="img_bg_path" id="img_bg_path" value="{{old('img_bg_path')}}" required > <br>
            @error('img_bg_path')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="img_bg_caption"> Image Background Caption: </label>
            <input type="text" name="img_bg_caption" id="img_bg_caption" value="{{old('img_bg_caption')}}" required > <br>
            @error('img_bg_caption')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="img_sm_path"> Image Sm Path: </label>
            <input type="file" name="img_sm_path" id="img_sm_path" value="{{old('img_sm_path')}}" required > <br>
            @error('img_sm_path')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="img_sm_caption"> Img Sm Caption: </label>
            <input type="text" name="img_sm_caption" id="img_sm_caption" value="{{old('img_sm_caption')}}" required > <br>
            @error('img_sm_caption')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="content_details"> Content Details: </label>
            <input type="text" name="content_details" id="content_details" value="{{old('content_details')}}" required > <br>
            @error('content_details')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="content_brief"> Content Brief: </label>
            <input type="text" name="content_brief" id="content_brief" value="{{old('content_brief')}}" required > <br>
            @error('content_brief')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="custom_brief"> Custom Brief: </label>
            <input type="text" name="custom_brief" id="custom_brief" value="{{old('custom_brief')}}" required > <br>
            @error('custom_brief')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="prev_content_ids"> Prev Content Ids: </label>
            <input type="text" name="prev_content_ids" id="prev_content_ids" value="{{old('prev_content_ids')}}" required > <br>
            @error('prev_content_ids')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="quatation"> Quatation: </label>
            <input type="text" name="quatation" id="quatation" value="{{old('quatation')}}" required > <br>
            @error('quatation')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="news_meta_keywords"> News Meta Keywords: </label>
            <input type="text" name="news_meta_keywords" id="news_meta_keywords" value="{{old('news_meta_keywords')}}" required > <br>
            @error('news_meta_keywords')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>

            <label for="">Video Type:</label>
            <select name="video_type" id="">
                <option >select video type</option>
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option>
                <option value="3">D</option>
            </select>
            
        </div>

        <div>
            <label for="sound_cloud_id"> Sound Cloud Id: </label>
            <input type="text" name="sound_cloud_id" id="sound_cloud_id" value="{{old('sound_cloud_id')}}" required > <br>
            @error('sound_cloud_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="tags"> Tags: </label>
            <input type="text" name="tags" id="tags" value="{{old('tags')}}" required > <br>
            @error('tags')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="place_tags"> Place Tags: </label>
            <input type="text" name="place_tags" id="place_tags" value="{{old('place_tags')}}" required > <br>
            @error('place_tags')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="people_tags"> People Tags: </label>
            <input type="text" name="people_tags" id="people_tags" value="{{old('people_tags')}}" required > <br>
            @error('people_tags')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="timeline_tags"> Timeline Tags: </label>
            <input type="text" name="timeline_tags" id="timeline_tags" value="{{old('timeline_tags')}}" required > <br>
            @error('timeline_tags')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="meta_details"> Meta Details: </label>
            <input type="text" name="meta_details" id="meta_details" value="{{old('meta_details')}}" required > <br>
            @error('meta_details')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="meta_details"> Meta Details: </label>
            <input type="text" name="meta_details" id="meta_details" value="{{old('meta_details')}}" required > <br>
            @error('meta_details')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="standout_tag">Standout Tag:</label>
            <div style="display:flex;">
                <input type="radio" id="standout_tag" name="standout_tag" value="1" required>
                <label for="standout_tag">Active</label>    &nbsp;&nbsp;&nbsp;
                <input type="radio" id="not-standout_tag" name="standout_tag" value="0" required>
                <label for="not-standout_tag">Not-active</label>
            </div>
        </div>

        <div>
            <label for="recent_status">Recent Status:</label>
            <div style="display:flex;">
                <input type="radio" id="recent_status" name="recent_status" value="1" required>
                <label for="recent_status">Active</label>    &nbsp;&nbsp;&nbsp;
                <input type="radio" id="not-recent_status" name="recent_status" value="0" required>
                <label for="not-recent_status">Not-active</label>
            </div>
        </div>

        <div>
            <label for="instant_article">Instant Article:</label>
            <div style="display:flex;">
                <input type="radio" id="instant_article" name="instant_article" value="1" required>
                <label for="instant_article">Active</label>    &nbsp;&nbsp;&nbsp;
                <input type="radio" id="not-instant_article" name="instant_article" value="0" required>
                <label for="not-instant_article">Not-active</label>
            </div>
        </div>

        <div>
            <label for="status">Status:</label>
            <div style="display:flex;">
                <input type="radio" id="sactive" name="status" value="1" required>
                <label for="sactive">Active</label>    &nbsp;&nbsp;&nbsp;
                <input type="radio" id="not-active" name="status" value="0" required>
                <label for="not-active">Not-active</label>
            </div>
        </div>

        <div>
            <label for="is_special">Is Special:</label>
            <div style="display:flex;">
                <input type="radio" id="is_special" name="is_special" value="1" required>
                <label for="is_special">Active</label>    &nbsp;&nbsp;&nbsp;
                <input type="radio" id="not-is_special" name="is_special" value="0" required>
                <label for="not-is_special">Not-active</label>
            </div>
        </div>

        <div>
            <label for="show_image"> Show Image:</label>
            <div style="display:flex;">
                <input type="radio" id="showimg" name="show_image" value="1" required>
                <label for="showimg">Show</label>    &nbsp;&nbsp;&nbsp;
                <input type="radio" id="not-show" name="show_image" value="0" required>
                <label for="not-show">Not Show</label>
            </div>
        </div>

        <div>
            <label for="show_time"> Show Time:</label>
            <div></div>
            
        </div>

        <div>
            <label for="instant_article_id"> Instant Article Id: </label>
            <input type="text" name="instant_article_id" id="instant_article_id" value="{{old('instant_article_id')}}" required > <br>
            @error('instant_article_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="is_evergreen"> Evergreen:</label>
            <div style="display:flex;">
                <input type="radio" id="gactive" name="is_evergreen" value="1" required>
                <label for="gactive">Evergreen</label>    &nbsp;&nbsp;&nbsp;
                <input type="radio" for="" id="not-green" name="is_evergreen" value="0" required>
                <label for="not-green">Not Evergreen</label>
            </div>
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    
    </form>


@endsection
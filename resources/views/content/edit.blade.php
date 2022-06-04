@extends('admin.adminmastar')
@section('content_edit')
    {{-- @dd('jango') --}}
    <form action="{{route('content.update', $contents->content_id)}}" method="POST">
        
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        {{-- @dd($contents->categorys->cat_id) --}}
        {{-- @dd($contents) --}}
        
        {{-- @dd($cats->cat_id) --}}

        <div>
            <label for=""> Content Type </label>
            <input type="text" class="" value="{{$contents->content_type}}" name="content_type">
        </div>

        <div>
            <label for="">Category</label>
            <select name="cat_id" id="">
                @foreach ($cats as $item)
                    <option value="{{$item->cat_id}}" {{ $contents->cat_id == $item->cat_id  ? 'selected' : ''}} >
                        {{$item->cat_name}}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="">Sub Category</label>
            <select name="subcat_id" id="">

                @foreach ($subcats as $item)
                    <option value="{{$item->subcat_id}}" {{$item->subcat_id == $contents->subcat_id ? 'selected' : ''}}>
                        {{$item->subcat_name}}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="country_id">Country</label>
            <select name="country_id" id="country_id">
                
                @foreach ($countries as $item)
                
                    <option value="{{$item->country_id}}" {{$item->country_id == $contents->country_id ? 'selected' : ''}}>{{$item->country_name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="division_id">Division</label>
            <select name="division_id" id="division_id">

                @foreach ($divisions as $item)
                    <option value="{{$item->division_id}}" {{$item->division_id == $contents->division_id ? 'selected' : ''}}>{{$item->division_name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="">District</label>
            <select name="district_id" id="">

                @foreach ($districts as $item)
                    <option value="{{$item->district_id}}" {{$item->district_id == $contents->district_id ? 'selected' : ''}}>{{$item->district_name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="upazila_id">Upozila</label>
            <select name="upazila_id" id="upazila_id">

                @foreach ($upazilas as $item)
                    <option value="{{$item->upazila_id}}" {{$item->upazila_id == $contents->upazila_id ? 'selected' : ''}}>{{$item->upazila_name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="photo_ids"> Photo Ids: </label>
            <input type="text" name="photo_ids" id="photo_ids" value="{{$contents->photo_ids}}" > <br>
            @error('photo_ids')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="content_heading"> Content Heading: </label>
            <input type="text" name="content_heading" id="content_heading" value="{{$contents->content_heading}}" required > <br>
            @error('content_heading')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div>
            <label for="content_sub_heading"> Content Sub Heading: </label>
            <input type="text" name="content_sub_heading" id="content_sub_heading" value="{{$contents->content_sub_heading}}" required > <br>
            @error('content_sub_heading')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="reporting_area"> Reporting Area: </label>
            <input type="text" name="reporting_area" id="reporting_area" value="{{$contents->reporting_area}}" required > <br>
            @error('reporting_area')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="author_slugs"> Author Slugs: </label>
            <input type="text" name="author_slugs" id="author_slugs" value="{{$contents->author_slugs}}" required > <br>
            @error('author_slugs')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="custom_byname"> Custom Byname: </label>
            <input type="text" name="custom_byname" id="custom_byname" value="{{$contents->custom_byname}}" required > <br>
            @error('custom_byname')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="seo_url"> SEO url: </label>
            <input type="text" name="seo_url" id="seo_url" value="{{$contents->seo_url}}" required > <br>
            @error('seo_url')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="seo_title"> SEO title: </label>
            <input type="text" name="seo_title" id="seo_title" value="{{$contents->seo_title}}" required > <br>
            @error('seo_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="img_bg_path"> Image Background Path: </label>
            <input type="text" name="img_bg_path" id="img_bg_path" value="{{$contents->img_bg_path}}" required > <br>
            @error('img_bg_path')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="img_bg_caption"> Image Background Caption: </label>
            <input type="text" name="img_bg_caption" id="img_bg_caption" value="{{$contents->img_bg_caption}}" required > <br>
            @error('img_bg_caption')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="img_sm_path"> Image Sm Path: </label>
            <input type="text" name="img_sm_path" id="img_sm_path" value="{{$contents->img_sm_path}}" required > <br>
            @error('img_sm_path')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="img_sm_caption"> Img Sm Caption: </label>
            <input type="text" name="img_sm_caption" id="img_sm_caption" value="{{$contents->img_sm_caption}}" required > <br>
            @error('img_sm_caption')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="content_details"> Content Details: </label>
            <input type="text" name="content_details" id="content_details" value="{{$contents->content_details}}" required > <br>
            @error('content_details')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="content_brief"> Content Brief: </label>
            <input type="text" name="content_brief" id="content_brief" value="{{$contents->content_brief}}" required > <br>
            @error('content_brief')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="custom_brief"> Custom Brief: </label>
            <input type="text" name="custom_brief" id="custom_brief" value="{{$contents->custom_brief}}" required > <br>
            @error('custom_brief')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="prev_content_ids"> Prev Content Ids: </label>
            <input type="text" name="prev_content_ids" id="prev_content_ids" value="{{$contents->prev_content_ids}}" required > <br>
            @error('prev_content_ids')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="quatation"> Quatation: </label>
            <input type="text" name="quatation" id="quatation" value="{{$contents->quatation}}" required > <br>
            @error('quatation')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="news_meta_keywords"> News Meta Keywords: </label>
            <input type="text" name="news_meta_keywords" id="news_meta_keywords" value="{{$contents->news_meta_keywords}}" required > <br>
            @error('news_meta_keywords')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>

            <label for="">Video Type:</label>
            <input value="{{$contents->video_type}}" class="" name="video_type">  
            
            
        </div>

        <div>
            <label for="sound_cloud_id"> Sound Cloud Id: </label>
            <input type="text" name="sound_cloud_id" id="sound_cloud_id" value="{{$contents->sound_cloud_id}}" required > <br>
            @error('sound_cloud_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="tags"> Tags: </label>
            <input type="text" name="tags" id="tags" value="{{$contents->tags}}" required > <br>
            @error('tags')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="place_tags"> Place Tags: </label>
            <input type="text" name="place_tags" id="place_tags" value="{{$contents->place_tags}}" required > <br>
            @error('place_tags')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="people_tags"> People Tags: </label>
            <input type="text" name="people_tags" id="people_tags" value="{{$contents->people_tags}}" required > <br>
            @error('people_tags')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="timeline_tags"> Timeline Tags: </label>
            <input type="text" name="timeline_tags" id="timeline_tags" value="{{$contents->timeline_tags}}" required > <br>
            @error('timeline_tags')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="meta_details"> Meta Details: </label>
            <input type="text" name="meta_details" id="meta_details" value="{{$contents->meta_details}}" required > <br>
            @error('meta_details')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="meta_details"> Meta Details: </label>
            <input type="text" name="meta_details" id="meta_details" value="{{$contents->meta_details}}" required > <br>
            @error('meta_details')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {{-- Standout Tag --}}
        <div>
            <label for="">Standout Tag: </label>
            @if($contents->standout_tag==1)
                <a href="{{url('standout_tag/' .$contents->content_id)}}">Active</a>
                @else
                <a href="{{url('standout_tag/' .$contents->content_id)}}">Not Active</a>
            @endif
        </div>

        {{-- Recent Status --}}
        <div>
            <label for="">Recent Status: </label>
            @if($contents->recent_status==1)
                <a href="{{url('recent_status/' .$contents->content_id)}}">Active</a>
                @else
                <a href="{{url('recent_status/' .$contents->content_id)}}">Not Active</a>
            @endif
        </div>

        {{-- Instant Article --}}
        <div>
            <label for="">Instant Article: </label>
            @if($contents->instant_article==1)
                <a href="{{url('instant_article/' .$contents->content_id)}}">Yes</a>
                @else
                <a href="{{url('instant_article/' .$contents->content_id)}}">No</a>
            @endif
        </div>

        {{-- show status --}}
        <div>
            <label for="">Status: </label>
            @if($contents->status==1)
                <a href="{{url('content-status/' .$contents->content_id)}}">Active</a>
                @else
                <a href="{{url('content-status/' .$contents->content_id)}}">Not Active</a>
            @endif
        </div>

        {{-- Is Special --}}
        <div>
            <label for="">Is Special: </label>
            @if($contents->is_special==1)
                <a href="{{url('is_special/' .$contents->content_id)}}">Yes</a>
                @else
                <a href="{{url('is_special/' .$contents->content_id)}}">No</a>
            @endif
        </div>

        {{-- Show Image --}}
        <div>
            <label for="">Show Image: </label>
            @if($contents->show_image==1)
                <a href="{{url('show_image/' .$contents->content_id)}}">Yes</a>
                @else
                <a href="{{url('show_image/' .$contents->content_id)}}">No</a>
            @endif
        </div>

        <div>
            <label for="show_time"> Show Time:</label>
            <input type="text" name="show_time" id="show_time" value="{{$contents->show_time}}" >
        </div>

        <div>
            <label for="instant_article_id"> Instant Article Id: </label>
            <input type="text" name="instant_article_id" id="instant_article_id" value="{{$contents->instant_article_id}}" required > <br>
            @error('instant_article_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {{-- EverGreen --}}
        <div>
            <label for="">Show Image: </label>
            @if($contents->is_evergreen == 1)
                <a href="{{url('is_evergreen/' .$contents->content_id)}}">Evergreen</a>
                @else
                <a href="{{url('is_evergreen/' .$contents->content_id)}}">Not Evergreen</a>
            @endif
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>

    </form>

    @endsection
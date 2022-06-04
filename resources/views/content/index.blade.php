@extends('admin.adminmastar')
@section('content_view')

    <h4>Division page</h4>
    <a href="{{route('content.create')}}"> create </a>
    <br>
        @if (Session::has('msg'))
            <span class="alert alert-info">{{Session::get('msg')}}</span>
        @endif
    <br>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                
                <td>Content Type</td>
                <td>Category</td>
                <td>Sub Category</td>
                <td>Country</td>
                <td>Division</td>
                <td>District</td>
                {{-- <td>Upazila</td>
                <td>Content Heading</td>
                <td>Content Sub Heading</td>
                <td>Reporting Area</td>
                <td>Author Slug</td>
                <td>Custom By Name</td>
                <td>SEO url</td>
                <td>SEO title</td>
                <td>Image path</td>
                <td>Image caption</td>
                <td>Image path</td>
                <td>Image caption</td>
                <td>Content Details</td>
                <td>Contenet Brief</td>
                <td>Previous Content ids</td>
                <td>quatation</td>
                <td>News Meta keyword</td>
                <td>Video Type</td>
                <td>Sound Cloude ID</td> --}}
                <td>Tags</td>
                <td>Place Tags</td>
                <td>People Tags</td>
                {{-- <td> Timeline Tags</td>
                <td> Meta Details</td>
                <td>Standout Tag</td>
                <td>Recent Status</td>
                <td>Instant Article</td> --}}
                <td>Status</td>
                <td>Has Video </td>
                <td>Is Special</td>
                {{-- <td>Show Image</td>
                <td>Instant Article ID</td> --}}
                <td>Evergreen</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($contents as $item)
                <tr>
                    <td>{{$item->content_type}}</td>
                    <td>{{$item->categorys->cat_name}}</td> 
                    <td>{{$item->subcategory->subcat_name}}</td>
                    <td>{{$item->country->country_name}}</td>
                    <td>{{$item->divisions->division_name}}</td>
                    <td>{{$item->districts->district_name}}</td>
                    <td>{{$item->img_bg_path}}</td>
                    {{-- @dd($item->upa zilas) --}}
                    
                    {{-- <td>{{$item->upazilas->upazila_name}}</td>
                    <td>{{$item->photo_ids}}</td>
                    <td>{{$item->content_heading}}</td> 
                    <td>{{$item->content_sub_heading}}</td>
                    <td>{{$item->reporting_area}}</td>
                    <td>{{$item->author_slugs}}</td>
                    <td>{{$item->custom_byname}}</td>
                    <td>{{$item->seo_url}}</td>
                    <td>{{$item->seo_title}}</td>
                    <td>{{$item->img_bg_path}}</td>
                    <td>{{$item->img_bg_caption}}</td>
                    <td>{{$item->img_sm_path}}</td>
                    <td>{{$item->img_sm_caption}}</td>
                    <td>{{$item->content_details}}</td>
                    <td>{{$item->content_brief}}</td>
                    <td>{{$item->custom_brief}}</td>
                    <td>{{$item->prev_content_ids}}</td>
                    <td>{{$item->quatation}}</td>
                    <td>{{$item->news_meta_keywords}}</td>
                    <td>{{$item->video_type}}</td>                  
                    <td>{{$item->sound_cloud_id}}</td> --}}
                    <td>{{$item->tags}}</td>
                    <td>{{$item->place_tags}}</td>
                    <td>{{$item->people_tags}}</td>
                    {{-- <td>{{$item->timeline_tags}}</td>
                    <td>{{$item->meta_details}}</td> --}}
                    
                    {{-- <td class="center">
                        @if($item->standout_tag==1)
                            <span class="label label-success">Active</span>
                            @else
                            <span class="label label-danger">Not-Active</span>
                        @endif 
                    </td> --}}

                    {{-- <td class="center">
                        @if($item->recent_status==1)
                            <span class="label label-success">Active</span>
                            @else
                            <span class="label label-danger">Not-Active</span>
                        @endif 
                    </td> --}}

                    {{-- <td class="center">
                        @if($item->instant_article==1)
                            <span class="label label-success">Active</span>
                            @else
                            <span class="label label-danger">Not-Active</span>
                        @endif 
                    </td> --}}

                    <td class="center">
                        @if($item->status==1)
                            <span class="label label-success">Active</span>
                            @else
                            <span class="label label-danger">Not-Active</span>
                        @endif 
                    </td>
 
                    <td>
                        @if($item->has_video==1)
                            <span class="label label-success">Yes</span>
                            @else
                            <span class="label label-danger">No</span>
                        @endif
                    </td>

                    <td>
                        @if($item->is_special==1)
                            <span class="label label-success">Yes</span>
                            @else
                            <span class="label label-danger">No</span>
                        @endif
                    </td>
                    
                    {{-- <td>
                        @if($item->show_image==1)
                            <span class="label label-success">Yes</span>
                            @else
                            <span class="label label-danger">No</span>
                        @endif
                    </td> --}}

                    {{-- <td>{{$item->show_time}}</td>
                    <td>{{$item->instant_article_id}}</td> --}}

                    <td>
                        @if($item->is_evergreen==1)
                            <span class="label label-success">Yes</span>
                            @else
                            <span class="label label-danger">No</span>
                        @endif
                    </td>

                    <td>
                        <a class="btn btn-info" href="{{url('content/'.$item->content_id.'/edit')}}"> 
                            <i class="halflings-icon white edit"></i>
                        </a>
                    </td>

                    {{-- <td> <a href="">Delete</a> </td> --}}
                    
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
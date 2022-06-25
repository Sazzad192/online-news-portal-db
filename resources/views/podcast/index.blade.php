@extends('admin.adminmastar')
@section('podcast_view')

    <h4>Division page</h4>
    <a href="{{route('podcast.index')}}"> create </a>

    <br>
        @if (Session::has('msg'))
            <span class="alert alert-info">{{Session::get('msg')}}</span>
        @endif
    <br>
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <td>Category</td>
                <td>Cloud_ID</td>
                <td>Image path</td>
                <td>Heading</td>
                <td>News Body</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($podcasts as $item)
                <tr>
                    <td>{{$item->categorys->cat_name}}</td> 
                    <td>{{$item->cloud_id}}</td>
                    <td>{{$item->news_img_path}}</td>
                    <td>{{$item->heading}}</td>
                    <td>{{$item->news_body}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
@extends('admin.adminmastar')
@section('authors_view')

    <h4>authors page</h4>
    <a href="{{route('author.create')}}"> create </a>
    <br>
        @if (Session::has('msg'))
            <span class="alert alert-info">{{Session::get('msg')}}</span>
        @endif
    <br>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th class="center">Author type</th>
                <th class="center">Author Name</th>
                <th class="center">Author Name Bangla</th>
                <th class="center">Author Slug</th>
                <th class="center">Author Initial</th>
                <th class="center">Designation</th>
                <th class="center">Designation English</th>
                <th class="center">Author Bio</th>
                <th class="center">Author Bio Bangla</th>
                <th class="center">Facebook url</th>
                <th class="center">Twitter url</th>
                <th class="center">Linkdin url</th>
                <th class="center">Image path</th>
                <th class="center">Noindex</th>
                <th class="center">Show By Line</th>
                <td class="center"> Edit </td>
                {{-- <th class="center">Deletable</th> --}}
            </tr>
        </thead> 
        @foreach ($authors as $item)
            <tr>
                <td>{{$item->author_type}}</td>
                <td>{{$item->author_name}}</td>
                <td>{{$item->author_name_bn}}</td>
                <td>{{$item->author_name_slug}}</td> 
                <td>{{$item->author_initial}}</td>
                <td>{{$item->designation}}</td> 
                <td>{{$item->designation_en}}</td> 
                <td>{{$item->author_bio}}</td> 
                <td>{{$item->author_bio_bn}}</td> 
                <td>{{$item->facebook_url}}</td> 
                <td>{{$item->twitter_url}}</td> 
                <td>{{$item->linkedin_url}}</td>
                <td>{{$item->image_path}}</td>
                <td class="center">
                    @if($item->noindex==1)
                    <span class="label label-success">Noindex</span>
                    @else
                    <span class="label label-danger">Not Noindex</span>
                    @endif
                </td>
                <td class="center">
                    @if($item->show_byline==1)
                    <span class="label label-success">show_byline</span>
                    @else
                    <span class="label label-danger">Not show_byline</span>
                    @endif
                </td>

                <td> 
                    <a class="btn btn-info" href="{{url('author/'.$item->author_id.'/edit',)}}"> 
                        <i class="halflings-icon white edit"></i> 
                    </a> 
                </td>
                {{-- <td> <a href="{{route('author.edit',$item->author_id)}}"> Edit </a> </td>
                <td> <a href="">Delete</a> </td> --}}
                <br>
            </tr>
        @endforeach
    </table>
    
@endsection
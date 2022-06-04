@extends('admin.adminmastar')
@section('cat_view')
	
	<div class="container-fluid-full">
		<div class="row-fluid">
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						<thead>
							<tr>
								<th class="center">Category Name</th>
								<th class="center">Category Name Bangla</th>
								<th class="center">Category Slug</th>
								<th class="center">Category Title</th>
								<th class="center">Category Meta keyword</th>
                                <th class="center">Category meta description</th>
                                <th class="center">Category Position</th>
                                <th class="center">Image Icon Path</th>
                                <th class="center">Image Menu Path</th>
                                <th class="center">Image Cover Home Path</th>
                                <th class="center">Image Cover Inner Path</th>
                                <th class="center">Status</th>
                                <th class="center">Show at apps</th>
                                <th class="center">Show tags</th>
							</tr>
						</thead>   
						<tbody>
                            @foreach ($category as $item)
							<tr>
                                <td class="center">{{$item->cat_name}}</td>
                                <td class="center">{{$item->cat_name_bn}}</td>
                                <td class="center">{{$item->cat_slug}}</td>
                                <td class="center">{{$item->cat_title}}</td>
                                <td class="center">{{$item->cat_meta_keyword}}</td>
                                <td class="center">{{$item->cat_meta_description}}</td>
                                <td class="center">{{$item->cat_position}}</td>
                                <td class="center">{{$item->img_icon_path}}</td>
                                {{-- <td class="center">{{$item->img_menu_path}}</td> --}}
                                <td class="center">{{$item->img_cover_home_path}}</td>
                                <td class="center">{{$item->img_cover_inner_path}}</td>
								<td class="center">
                                    @if($item->status==1)
                                        <span class="label label-success">Active</span>
                                        @else
                                        <span class="label label-danger">Not-Active</span>
                                    @endif 
                                </td>
                                <td class="center">
                                    @if($item->show_at_apps==1)
                                        <span class="label label-success">Show-at-apps</span>
                                        @else
                                        <span class="label label-danger">Not-show</span>
                                    @endif
                                </td>
                                <td class="center">
                                    @if($item->show_tags==1)
                                        <span class="label label-success">Show-tags</span>
                                        @else
                                        <span class="label label-danger">Not-tags-show</span>
                                    @endif
                                </td>

                                <td> 
                                    <a class="btn btn-info" href="{{url('category/'.$item->cat_id.'/edit')}}"> 
                                        <i class="halflings-icon white edit"></i>
                                    </a> 
                                </td>

                            </tr>
                            @endforeach
						</tbody>
					</table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
		</div>
	</div>

@endsection
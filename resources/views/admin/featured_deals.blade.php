@extends('admin.layouts.app')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">

        	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Featured Deals</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      All Featured Deals List
                    </p>
					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Sr#</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Price</th>
                          <th>Summary</th>
                          <th>Category</th>
                          <th>Added By</th>
                          <th>Created On</th>
                          <th>Updated On</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(!empty($featured_deals_listings))
                        @foreach($featured_deals_listings as $key => $listing)
                        <tr>
                          <td>{{ $key+1 }}</td>
                          <td>{{ $listing->title }}</td>
                          <td><img src="{{ url('storage')}}/{{ primary_img_url($listing->image) }}" width="50px"></td>
                          <td>{{ $listing->price }}</td>
                          <td>{{ $listing->summary }}</td>
                          <td>{{ $listing->category }}</td>
                          <td>{{ $listing->created_by }}</td>
                          <td>{{ $listing->created_at }}</td>
                          <td>{{ $listing->updated_at }}</td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        @endforeach
                        @endif
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
          
          
        </div>
        <!-- /page content -->
@endsection
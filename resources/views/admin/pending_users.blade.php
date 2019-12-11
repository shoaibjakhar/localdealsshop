@extends('admin.layouts.app')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">

        	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Pending Users</h2>
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
                      All Pending Users List
                    </p>
					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Sr#</th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>Phone#</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>State</th>
                          <th>Country</th>
                          <th>Zip Code</th>
                          <th>Created On</th>
                          <th>Updated On</th>
                          <th>Actions</th>

                        </tr>
                      </thead>
                      <tbody>
                        @if(!empty($pending_users))
                        @foreach($pending_users as $key => $user)
                        <tr>
                          <td>{{ $key+1 }}</td>
                          <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->phone }}</td>
                          <td>{{ $user->adress }}</td>
                          <td>{{ $user->city }}</td>
                          <td>{{ $user->state }} date</td>
                          <td>{{ $user->country }}</td>
                          <td>{{ $user->zip_code }}</td>
                          <td>{{ $user->created_at }}</td>
                          <td>{{ $user->updated_at }}</td>
                          <td>
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
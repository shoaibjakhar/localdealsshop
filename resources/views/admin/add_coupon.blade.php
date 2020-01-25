@extends('admin.layouts.app')

@section('content')
  <div class="right_col" role="main">

  	<div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Generate Coupons </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="{{ route('add_coupons') }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                      @csrf
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Number of Coupons <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="number" name ="number_of_coupons" value="100" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button type="submit" class="btn btn-success">Generate</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>


  </div>
@endsection
@extends('layouts.app')

@section('content')
<div class="sec-padd allCat-list-wrap light-gray-bg">
  <div class="container">
    <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12">
            <!-- Listing Details start -->
            <form action="{{ route('add_listing') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="job-posting">
                <h4>Listing Details</h4>
                <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label>Listing title<span>*</span></label>
                        <input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="Item Name"> 
                        @error('title')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label>Listing Category<span>*</span></label>
                        <select class="form-control" name="category_id" value="">
                          <option value="">Choose Category</option>
                          @if(!empty($all_categories))
                            @foreach($all_categories as $category)
                          <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                          @endif
                        </select>
                        @error('category_id')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label>Image<span>* (can add multiple)</span> </label>
                        <input class="form-control" type="file" name="image[]" value="{{ old('image') }}" multiple> 
                        @error('title')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label>Price<span>*</span> </label>
                        <input class="form-control" type="number" name="price" value="{{ old('price') }}" placeholder="0.00"> 
                        @error('title')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label>Discount Amount</label>
                        <input class="form-control" type="text" name="discount" value="{{ old('discount') }}" placeholder="0.00"> 
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Short summary<span>*</span> </label>
                        <textarea class="form-control" type="text" name="summary" value="{{ old('summary') }}" rows="6" placeholder="Write Short Summary..."></textarea> 
                        @error('title')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Detailed description <span>*</span> </label>
                        <textarea class="form-control" name="description" value="{{ old('description') }}" rows="6" placeholder="Write Detailed Description..."></textarea>
                    </div>
                  </div>
                  <!-- <div class="col-lg-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="is_coupon_enabled" class="custom-control-input" id="is_coupon_enabled" {{(old('is_coupon_enabled') == 'on') ? 'checked':''}}>
                        <label class="custom-control-label" for="is_coupon_enabled">Enable Coupon</label>
                    </div>
                  </div> -->

                  <div class="col-lg-12">
                    <div class="form-group">
                      <button class="btn btn-primary" type="submit">Add Listing</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
        </div>
    </div>
  </div>
</div>

@endsection
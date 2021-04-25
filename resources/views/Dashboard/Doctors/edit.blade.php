@extends('Dashboard.layouts.master')
@section('css')
@section('title')
    {{ trans('brands.edit_brand') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto"> {{ trans('brands.edit_brand') }}</h4>
            <span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                {{ $brand->name }}</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')

@include('Dashboard.messages_alert')

<!-- row -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('Brands.update', 'test') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}
                    <div class="pd-30 pd-sm-40 bg-gray-200">
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-1">
                                <label for="exampleInputEmail1">
                                    {{ trans('brands.name_brand') }}</label>
                            </div>
                            <div class="col-md-11 mg-t-5 mg-md-t-0">
                                <input class="form-control" name="name" value="{{ $brand->name }}" type="text">
                                <input type="hidden" name="id" value="{{ $brand->id }}">
                            </div>
                        </div>

                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-1">
                                <label for="exampleInputEmail1">
                                    {{ trans('brands.Status') }}</label>
                            </div>
                            <div class="col-md-11 mg-t-5 mg-md-t-0">
                                <input class="form-check-input" name="is_active" type="checkbox" value="1"
                                    {{ $brand->is_active == 1 ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                    {{ $brand->is_active == 1 ? trans('MainCategories_trans.Enabled') : trans('MainCategories_trans.Notenabled') }}
                                </label>
                            </div>
                        </div>

                        @if ($brand->photo)
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-1">
                                <label for="exampleInputEmail1">
                                    {{ trans('brands.Status') }}</label>
                            </div>
                            <div class="col-md-11 mg-t-5 mg-md-t-0">
                                <img src="{{ URL::asset('images/brands/'.$brand->photo) }}" name="photo" style="width: 250px; height: 250px;">
                            </div>
                        </div>
                        @endif

                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-1">
                                <label for="exampleInputEmail1">
                                    {{ trans('brands.brand_img') }}</label>
                            </div>
                            <div class="col-md-11 mg-t-5 mg-md-t-0">
                                <input type="file" name="photo">
                            </div>
                        </div>



                        <button type="submit"
                            class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">{{ trans('MainCategories_trans.submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /row -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
@endsection

@extends('Dashboard.layouts.master')
@section('css')
    <!--Internal   Notify -->
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection
@section('title')
    {{trans('insurance.Add_Insurance')}}
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">جميع الخدمات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('insurance.Insurance')}}</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
@include('Dashboard.messages_alert')
<!-- row -->
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="{{route('insurance.store')}}" method="post" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label>{{trans('insurance.Company_code')}}</label>
                            <input type="text" name="insurance_code"  value="{{old('insurance_code')}}" class="form-control @error('insurance_code') is-invalid @enderror">
                            @error('insurance_code')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label>{{trans('insurance.Company_name')}}</label>
                            <input type="text" name="name"  value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>{{trans('insurance.discount_percentage')}} %</label>
                            <input type="number" name="discount_percentage" class="form-control @error ('discount_percentage') is-invalid @enderror">
                            @error('discount_percentage')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label>{{trans('insurance.Insurance_bearing_percentage')}} %</label>
                            <input type="number" name="Company_rate" class="form-control @error ('Company_rate') is-invalid @enderror">
                            @error('Company_rate')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>{{trans('insurance.notes')}}</label>
                            <textarea rows="5" cols="10" class="form-control" name="notes"></textarea>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success">{{trans('insurance.save')}}</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection

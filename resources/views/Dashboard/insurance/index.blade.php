@extends('Dashboard.layouts.master')
@section('css')
<!--Internal   Notify -->
<link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection
@section('title')
    {{trans('main-sidebar_trans.Insurance')}}
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{trans('main-sidebar_trans.Services')}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('main-sidebar_trans.Insurance')}}</span>
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
                <div class="card-header">
                    <a href="{{route('insurance.create')}}" class="btn btn-primary">{{trans('insurance.Add_Insurance')}}</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap text-center" id="example1">
                            <thead>
                            <tr class="table-secondary">
                                <th>#</th>
                                <th >{{trans('insurance.Company_code')}}</th>
                                <th >{{trans('insurance.Company_name')}}</th>
                                <th >{{trans('insurance.discount_percentage')}}</th>
                                <th >{{trans('insurance.Insurance_bearing_percentage')}}</th>
                                <th >{{trans('insurance.status')}}</th>
                                <th >{{trans('insurance.notes')}}</th>
                                <th >{{trans('insurance.Processes')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($insurances as $insurance)
                                <tr>
                                    <td>{{$loop->iteration }}</td>
                                    <td>{{$insurance->insurance_code}}</td>
                                    <td>{{$insurance->name}}</td>
                                    <td>{{$insurance->discount_percentage}}</td>
                                    <td>{{$insurance->Company_rate}}</td>
                                    <td class="{{$insurance->status == 1 ? 'bg-success':'bg-danger'}}">{{$insurance->status == 1 ? 'مفعل' : 'غير مفعل'}}</td>
                                    <td>{{$insurance->notes}}</td>
                                    <td>
                                        <a href="{{route('insurance.edit',$insurance->id)}}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#Deleted{{$insurance->id}}"><i class="fas fa-trash"></i>
                                        </button>

                                    </td>
                                 @include('Dashboard.insurance.Deleted')
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

    <!--Internal  Notify js -->
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>

@endsection

@extends('Dashboard.layouts.master')
@section('css')
    <!--Internal   Notify -->
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection
@section('title')
   اضافة سيارة جديدة
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">الاسعاف</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ اضافة سيارة جديدة</span>
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
                <form action="{{route('Ambulance.update','test')}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label>رقم السيارة</label>
                            <input type="text" name="car_number"  value="{{$ambulance->car_number}}" class="form-control @error('car_number') is-invalid @enderror">
                            <input type="hidden" name="id" value="{{$ambulance->id}}">
                        </div>

                        <div class="col">
                            <label>موديل السيارة</label>
                            <input type="text" name="car_model"  value="{{$ambulance->car_model}}" class="form-control @error('car_model') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>سنة الصنع</label>
                            <input type="number" name="car_year_made"  value="{{$ambulance->car_year_made}}" class="form-control @error('car_year_made') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>نوع السيارة</label>
                            <select class="form-control" name="car_type">
                                <option value="1" {{$ambulance->car_type == 1 ? 'selected':''}}>مملوكة</option>
                                <option value="2" {{$ambulance->car_type == 2 ? 'selected':''}}>ايجار</option>
                            </select>
                        </div>

                    </div>
                    <br>

                    <div class="row">
                        <div class="col-3">
                            <label>اسم السائق</label>
                            <input type="text" name="driver_name"  value="{{$ambulance->driver_name}}" class="form-control @error('driver_name') is-invalid @enderror">
                        </div>

                        <div class="col-3">
                            <label>رقم رخصة القيادة</label>
                            <input type="number" name="driver_license_number"  value="{{$ambulance->driver_license_number}}" class="form-control @error('driver_license_number') is-invalid @enderror">
                        </div>

                        <div class="col-6">
                            <label>رقم الهاتف</label>
                            <input type="number" name="driver_phone"  value="{{$ambulance->driver_phone}}" class="form-control @error('driver_phone') is-invalid @enderror">
                        </div>

                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>ملاحظات</label>
                            <textarea rows="5" cols="10" class="form-control" name="notes">{{$ambulance->notes}}</textarea>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <label>حالة التفعيل</label>
                            &nbsp;
                            <input name="is_available" {{$ambulance->is_available == 1 ? 'checked' : ''}} value="1" type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success">حفظ البيانات</button>
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

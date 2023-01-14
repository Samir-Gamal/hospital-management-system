@component('mail::message')
# {{$name}}

تم حجز موعدك بتاريخ :{{$appointment}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

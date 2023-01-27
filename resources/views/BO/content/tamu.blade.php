@extends('BO/layout/main')
@section('content')



<div class="col-lg-12">
    <div class="card">
        <div class="header">
            <h2>{{Session::get('title')}}</h2>
        </div>
        <div class="body">
            Data tamu hari ini
        </div>
    </div>
</div>




@endsection

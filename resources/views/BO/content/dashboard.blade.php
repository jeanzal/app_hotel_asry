@extends('BO/layout/main')
@section('content')



<div class="col-lg-12">
    <div class="card">
        <div class="header">
            <h2>{{Session::get('title')}}</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-center">
                <div class="card">
                    <div class="body">                            
                        <input type="text" class="knob" value="100" data-linecap="round" data-width="100" data-height="100" data-thickness="0.08" data-fgColor="#00adef" readonly>
                        <p>Check In</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-center">
                <div class="card">
                    <div class="body">                            
                        <input type="text" class="knob" value="42" data-linecap="round" data-width="100" data-height="100" data-thickness="0.08" data-fgColor="#ee2558" readonly>
                        <p>Check Out</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            Selamat Datang Admin Back Office. Cuaca Hari ini mendung
        </div>
    </div>
</div>




@endsection

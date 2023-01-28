@extends('BO/layout/main')
@section('content')

</div>
<div class="tab-content tab-content-basic">
<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
    <div class="row">
      <div class="col-sm-12">
        <div class="statistics-details d-flex align-items-center justify-content-between">
          <div class="text-center">
            <p class="statistics-title">Total User</p>
            <h3 class="rate-percentage">5</h3>
          </div>
          <div class="text-center">
            <p class="statistics-title">Total Check In Today</p>
            <h3 class="rate-percentage">2</h3>
          </div>
          <div class="text-center">
            <p class="statistics-title">Total Check Out Today</p>
            <h3 class="rate-percentage">1</h3>
          </div>
          <div class="d-none d-md-block">
            <p class="statistics-title">Total Pemasukan</p>
            <h3 class="rate-percentage">Rp 520.000</h3>
          </div>
          <div class="d-none d-md-block">
            <p class="statistics-title">Total Tamu</p>
            <h3 class="rate-percentage">19</h3>
          </div>
          <div class="d-none d-md-block">
            <p class="statistics-title">Total Kamar</p>
            <h3 class="rate-percentage">12</h3>
          </div>
        </div>
      </div>
    </div> 
    <div class="row">
      <div class="col-lg-12 d-flex flex-column">
        <div class="row flex-grow">
          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
            <div class="card card-rounded">
              <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-start">
                  <div>
                   <h4 class="card-title card-title-dash">Grafik Pengunjung PerBulan</h4>
                  </div>
                  <div id="performance-line-legend"></div>
                </div>
                <div class="chartjs-wrapper mt-5">
                  <canvas id="performaneLine"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
          <div class="card card-rounded">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                      <h4 class="card-title card-title-dash">Log Aktifitas Front Office</h4>
                    </div>
                  </div>
                  <div class="mt-3">
                    <h5>Comming Soon ..</h5>
                    {{-- <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                      <div class="d-flex">
                        <img class="img-sm rounded-10" src="images/faces/face1.jpg" alt="profile">
                        <div class="wrapper ms-3">
                          <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                          <small class="text-muted mb-0">162543</small>
                        </div>
                      </div>
                      <div class="text-muted text-small">
                        1h ago
                      </div>
                    </div>
                    <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                      <div class="d-flex">
                        <img class="img-sm rounded-10" src="images/faces/face2.jpg" alt="profile">
                        <div class="wrapper ms-3">
                          <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                          <small class="text-muted mb-0">162543</small>
                        </div>
                      </div>
                      <div class="text-muted text-small">
                        1h ago
                      </div>
                    </div>
                    <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                      <div class="d-flex">
                        <img class="img-sm rounded-10" src="images/faces/face3.jpg" alt="profile">
                        <div class="wrapper ms-3">
                          <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                          <small class="text-muted mb-0">162543</small>
                        </div>
                      </div>
                      <div class="text-muted text-small">
                        1h ago
                      </div>
                    </div>
                    <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                      <div class="d-flex">
                        <img class="img-sm rounded-10" src="images/faces/face4.jpg" alt="profile">
                        <div class="wrapper ms-3">
                          <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                          <small class="text-muted mb-0">162543</small>
                        </div>
                      </div>
                      <div class="text-muted text-small">
                        1h ago
                      </div>
                    </div>
                    <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                      <div class="d-flex">
                        <img class="img-sm rounded-10" src="images/faces/face5.jpg" alt="profile">
                        <div class="wrapper ms-3">
                          <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                          <small class="text-muted mb-0">Alaska, USA</small>
                        </div>
                      </div>
                      <div class="text-muted text-small">
                        1h ago
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>




@endsection

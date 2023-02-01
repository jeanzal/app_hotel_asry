@extends('FO/layout/main')
@section('content')

<div class="hed">
    <div class="hed_kiri">
        <h5>
            ASRY GRAHA HOTEL - FRONT OFFICE <br>
            <p>Jl. Veteran No.147, Pandeyan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55161</p>
        </h5>
    </div>
    <div class="hed_kanan">
        <div class="baru ">
            <?php
                echo $today . " ";
                echo '<span id="jam_berjalan" class="kedip_jam"></span>';
            ?>
            <br>
        </div>
        <a href="{{route('auth.logout')}}">Keluar <span class="bi bi-box-arrow-in-right"></span></a>
    </div>
    
    <div class="clear"></div>
</div>
<div class="isi">
    <div class="judul_isi">
        ROOM UPDATE CHECK-IN & CHECK-OUT
    </div>
    
    <div class="dalam">
        <div class="dalam_kiri_kotak">
            <div class="lantai">LANTAI I</div>
            <div class="kotak_lantai">
                @forelse($kamar as $kmr) 
                    @if($kmr->lokasi == "Lantai 1")
                        <div class="kotak bg-danger" data-bs-toggle="modal" data-bs-target="#FormBooking">{{ $kmr->no_kamar }}</div>
                    @endif
                @empty
                    <div class="text">Room Lantai 1 Tidak Tersedia</div>
                @endforelse
                
            </div>
        </div>
        <div class="dalam_kanan_kotak">
            <div class="lantai">LANTAI II</div>
            <div class="kotak_lantai">
                @forelse($kamar as $kmr) 
                    @if($kmr->lokasi == "Lantai 2")
                        <div class="kotak" data-bs-toggle="modal" data-bs-target="#FormBooking">{{ $kmr->no_kamar }}</div>
                    @endif
                @empty
                    <div class="text">Room Lantai 2 Tidak Tersedia</div>
                @endforelse
            </div>
        </div>
        <div class="clear"></div>
    </div>
    
</div>

<!-- Room Lantai 1 -->
<div class="modal fade" id="FormBooking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Booked Room</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Nama Tamu">
                        <label for="floatingInput">Nama Tamu</label>
                    </div>
                    <div class="form-floating">
                        <input type="date" class="form-control" id="floatingDate" placeholder="CI">
                        <label for="floatingDate">Check-In</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Request and Save Room</button>
        </div>
      </div>
    </div>
  </div>

@endsection


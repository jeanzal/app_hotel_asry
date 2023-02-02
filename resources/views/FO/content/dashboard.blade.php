@extends('FO/layout/main')
@section('content')

<div class="hed sticky-top">
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

    <h6 class="fw-bold">
        ROOM CHECKIN & CHECKOUT <br>
        <small>Price Today : <i class="kedip_jam">Rp. 150.000,- </i></small>
    </h6>
    <div class="dalam_kiri_kotak">
        <div class="lantai"><b> ROOM LANTAI I </b></div>
        <div class="kotak_lantai">
            @forelse($kamar as $kmr) 
                @if($kmr->lokasi == "Lantai 1")
                    @if($kmr->status == "1")
                        <button class="kotak bg-success bookTrsbtn" value="{{ $kmr->id }}">
                            <h3>{{ $kmr->no_kamar }}</h3>
                            <p class="badge text-bg-light">READY</p>
                        </button>
                    @elseif($kmr->status == "2")
                        <div class="kotak bg-danger" data-bs-toggle="modal" data-bs-target="#CloseBooking">
                            <h3>{{ $kmr->no_kamar }}</h3>
                            <p class="badge text-bg-warning">TERPAKAI</p>
                            <div class="nama_tamu">
                                ABDUL WAHID <br>
                                CI : 2023-02-02
                            </div>
                        </div>
                    @endif
                @endif
            @empty
                <div class="text">Room Lantai 1 Tidak Tersedia</div>
            @endforelse
            
        </div>
    </div>
    <div class="dalam_kanan_kotak">
        <div class="lantai"><b> ROOM LANTAI II </b></div>
        <div class="kotak_lantai">
            @forelse($kamar as $kmr) 
                @if($kmr->lokasi == "Lantai 2")
                    @if($kmr->status == "1")
                        <div class="kotak bg-success" data-bs-toggle="modal" data-bs-target="#FormBooking">
                            <h3>{{ $kmr->no_kamar }}</h3>
                            <p class="badge text-bg-light">READY</p>
                        </div>
                    @elseif($kmr->status == "2")
                        <div class="kotak bg-warning" data-bs-toggle="modal" data-bs-target="#CloseBooking">
                            <h3>{{ $kmr->no_kamar }}</h3>
                        </div>
                    @endif
                @endif
            @empty
                <div class="text">Room Lantai 1 Tidak Tersedia</div>
            @endforelse
            
        </div>
    </div>
    <div class="clear"></div>
    
</div>

{{-- Modal Clossing Room 
<div class="modal fade" id="CloseBooking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Clossing Room</h1>
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
                        <input type="text" class="form-control" id="floatingDate" placeholder="CI">
                        <label for="floatingAlamat">Alamat</label>
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
          <button type="submit" class="btn btn-primary">Request and Save Room</button>
        </div>
      </div>
    </div>
</div> --}}

{{-- Modal Booking Room  --}}
<div class="modal fade" id="FormBooking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Booking Room</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="no_kamar" id="no_kamar" placeholder="Nama Tamu">
                            <input type="text" class="form-control" name="id" id="id">
                            <label for="no_kamar">Nomor Kamar</label>
                        </div>
                        {{-- <div class="form-floating">
                            <input type="text" class="form-control" id="floatingDate" placeholder="CI">
                            <label for="floatingAlamat">Alamat</label>
                        </div>
                        <div class="form-floating">
                            <input type="date" class="form-control" id="floatingDate" placeholder="CI">
                            <label for="floatingDate">Check-In</label>
                        </div> --}}
                    </div>
                    <div class="col-6">
                        {{-- <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div> --}}
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Request and Save Room</button>
        </div>
      </div>
    </div>
</div>

@endsection

@section('scripts')

<script>
    $(document).ready(function() {

        $(document).on('click', '.bookTrsbtn', function (){
            
            var trs_id = $(this).val();
            // alert(trs_id);
            $('#FormBooking').modal('show');

            $.ajax({
                type: "GET",
                url: "/bookRoom/"+trs_id,
                success: function (response){
                    $('#no_kamar').val(response.kamar.no_kamar)
                    // $('#id').val(response.kamar.id)
                    // console.log.(response);
                }
            });

        });
    });
</script>


@endsection

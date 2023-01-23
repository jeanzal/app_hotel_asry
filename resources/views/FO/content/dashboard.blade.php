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
                <div class="kotak">1</div>
                <div class="kotak">2</div>
                <div class="kotak">3</div>
                <div class="kotak">4</div>
                <div class="kotak">5</div>
                <div class="kotak">6</div>
                <div class="kotak">7</div>
            </div>
        </div>
        
        <div class="dalam_kanan_kotak">
            <div class="lantai">LANTAI II</div>
            <div class="kotak_lantai">
                <div class="kotak">1</div>
                <div class="kotak">2</div>
                <div class="kotak">3</div>
                <div class="kotak">4</div>
                <div class="kotak">5</div>
                <div class="kotak">6</div>
                <div class="kotak">7</div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    
</div>


@endsection


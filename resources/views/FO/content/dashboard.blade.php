@extends('FO/layout/main')
@section('content')

    <h6 class="fw-bold text-success-emphasis">
        <div class="reportFOCS text-end">
            <a class="col-1 btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#reportFO">Transaksi Kas</a>
        </div>
        SHIFT - <br>
        <small class="">Price Today : <i class="kedip_jam text-danger">@currency($harga_sekarang->harga)</i></small>
    </h6>
    <div class="dalam_kiri_kotak">
        <div class="lantai"><b> ROOM LANTAI I </b></div>
        <div class="kotak_lantai">
            @forelse($kamar as $kmr)
                @if ($kmr->lokasi == 'Lantai 1')
                    @if ($kmr->status == '1')
                        <a href="javascript:void(0)" data-toggle="modal" class="kotak shadow-lg bg-success bookTrsbtn"
                            data-id="{{ $kmr->id }}">
                            <br>
                            <h3 class="mt-3">{{ $kmr->no_kamar }}</h3>
                            <p class="badge text-bg-light">READY</p>
                            <div class="nama_tamu2 mb-4">
                                <br>
                            </div>
                        </a>
                    @elseif($kmr->status == '2')
                        @foreach ($data as $d)
                            @if ($d->status == '1')
                                @if ($d->kamar_no == $kmr->id)
                                    <a href="javascript:void(0)" class="kotak shadow-lg bg-danger closeBook"
                                        data-toggle="modal" data-id="{{ $d->id }}">
                                        <h3>{{ $kmr->no_kamar }}</h3>
                                        <p class="badge text-bg-warning">TERPAKAI</p>
                                        <div class="nama_tamu">
                                            <b class="text-white">{{ $d->nama_tamu }}</b><br>
                                            @php
                                                $datetimeCI = $d->ci;
                                                $datetimeCO = $d->co;
                                                $tglCI = date_create($datetimeCI);
                                                $tglCO = date_create($datetimeCO);
                                                $formatedCI = date_format($tglCI, 'd-m-Y');
                                                $formatedCO = date_format($tglCO, 'd-m-Y');
                                            @endphp
                                            CI : {{ $formatedCI }} <br>
                                            CO : {{ $formatedCO }} <br>
                                            @if ($d->deposit == $d->price)
                                                <p class="badge mt-3 text-bg-primary">Lunas</p>
                                            @elseif($d->deposit < $d->price)
                                                <p class="badge text-bg-warning">DP = @currency($d->deposit)
                                                    <br> Belum Lunas
                                                    <br> Sisa : @currency($d->sisa)
                                                </p>
                                            @endif
                                        </div>
                                    </a>
                                @endif
                            @endif
                        @endforeach
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
                @if ($kmr->lokasi == 'Lantai 2')
                    @if ($kmr->status == '1')
                        <a href="javascript:void(0)" data-toggle="modal" class="kotak shadow-lg bg-success bookTrsbtn"
                            data-id="{{ $kmr->id }}">
                            <br>
                            <h3 class="mt-3">{{ $kmr->no_kamar }}</h3>
                            <p class="badge text-bg-light">READY</p>
                            <div class="nama_tamu2 mb-4">
                                <br>
                            </div>
                        </a>
                    @elseif($kmr->status == '2')
                        @foreach ($data as $d)
                            @if ($d->status == '1')
                                @if ($d->kamar_no == $kmr->id)
                                    <a href="javascript:void(0)" class="kotak shadow-lg bg-danger closeBook"
                                        data-toggle="modal" data-id="{{ $d->id }}">
                                        <h3>{{ $kmr->no_kamar }}</h3>
                                        <p class="badge text-bg-warning">TERPAKAI</p>
                                        <div class="nama_tamu">
                                            <b class="text-white">{{ $d->nama_tamu }}</b><br>
                                            @php
                                                $datetimeCI = $d->ci;
                                                $datetimeCO = $d->co;
                                                $tglCI = date_create($datetimeCI);
                                                $tglCO = date_create($datetimeCO);
                                                $formatedCI = date_format($tglCI, 'd-m-Y');
                                                $formatedCO = date_format($tglCO, 'd-m-Y');
                                            @endphp
                                            CI : {{ $formatedCI }} <br>
                                            CO : {{ $formatedCO }} <br>
                                            @if ($d->deposit == $d->price)
                                                <p class="badge mt-2 text-bg-primary">Lunas</p>
                                            @elseif($d->deposit < $d->price)
                                                <p class="badge text-bg-warning">DP = @currency($d->deposit) 
                                                    <br> Belum Lunas
                                                    <br> Sisa : @currency($d->sisa)
                                                </p>
                                            @endif
                                        </div>
                                    </a>
                                @endif
                            @endif
                        @endforeach
                    @endif
                @endif
            @empty
                <div class="text">Room Lantai 1 Tidak Tersedia</div>
            @endforelse

        </div>
    </div>
    <div class="clear"></div>

    {{-- Modal Clossing Room  --}}
    @include('FO/content/formClsBook')
    {{-- End Modal Clossing Room  --}}

    {{-- Modal Booking Room  --}}
    @include('FO/content/formBookRoom')
    {{-- End Modal Booking Room  --}}

    {{-- Report FO  --}}
    @include('FO/content/transaksi_kas')
    {{-- End Modal Transaksi Kas  --}}

    {{-- Modal Tambah Transaksi Kas FO  --}}
    @include('FO/content/tambah_trs_kas')
    {{-- End Modal Tambah Transaski  --}}


@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('body').on('click', '.bookTrsbtn', function(event) {

                event.preventDefault();
                var id = $(this).data('id');
                $.get('dashboard/' + id + '/bookRoom', function(data) {
                    $('#FormBooking').modal('show');
                    $('#trs_id').val(data.data.id);
                    $('#no_kamar').val(data.data.no_kamar);
                    $('#harga').val(data.data.harga);
                    $('#status').val(data.data.status);
                })

            });
        });


        $(document).ready(function() {
            var d = new Date().toISOString();
            d = d.replace(/\.\d+/, "");
            var minDate = d.substring(0, d.length - 1);

            $(".datepicker").attr({
                "value": minDate,
                "min": minDate,
            });
        });

        function sum() {
            var lamaBook = document.getElementById('lamaBooking').value;
            var harga_kamar = document.getElementById('harga').value;
            var result = parseInt(lamaBook) * parseInt(harga_kamar);
            if (!isNaN(result)) {
                document.getElementById('price').value = result;
            }
        }

        function hitungsisa() {
            var total_tagihan = document.getElementById('price').value;
            var depositnya = document.getElementById('deposit').value;
            var result = parseInt(total_tagihan) - parseInt(depositnya);
            document.getElementById('sisa').value = result;
        }

        function jumlahCO() {
            var lb = document.getElementById('lamaBooking').value;
            var ta = document.getElementById('ci').value;
            var hitung = lb * 24 * 60 * 60 * 1000;

            var hasilCO = new Date(new Date(ta).getTime() + (hitung));
            var tanggalCO = hasilCO.toISOString().slice(0, 10)
            // var waktuCO = hasilCO.getHours() + ':' + hasilCO.getMinutes() + ':' + hasilCO.getSeconds();

            document.getElementById('co').value = tanggalCO + ' ' + '11:00:00'

        }
    </script>
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('body').on('click', '.closeBook', function(event) {

                event.preventDefault();
                var trs_id = $(this).data('id');
                $.get('dashboard/' + trs_id + '/closeBook', function(data) {
                    $('#CloseBooking').modal('show');
                    $('#id_baru').val(data.data.id);
                    $('#kmr_no').val(data.data.kamar_no);
                })

            });
        });
    </script>
    <script>
        var trsKAS = false;
        $('.createTrsKAS').on('click', function() {
            if ($(this).hasClass('within-reportFO')) {
                within_first_modal = true;
                $('#reportFO').modal('hide');
            }
            $('#createKAS').modal('show');
        });

        $('.createTrsKAS-close').on('click', function() {
            $('#createKAS').modal('hide');
            if (within_first_modal) {
                $('#reportFO').modal('show');
                within_first_modal = false;
            }
        });
    </script>
@endsection

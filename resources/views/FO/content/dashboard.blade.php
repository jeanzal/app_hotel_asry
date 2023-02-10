@extends('FO/layout/main')
@section('content')

    <h6 class="fw-bold text-success-emphasis">
        <div class="reportFOCS text-end">
            <a class="col-1 btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#reportFO">Transaksi Kas</a>
        </div>
        ROOM CHE CKIN & CHECKOUT <br>
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
                                                <p class="badge mt-2 text-bg-primary">Lunas</p>
                                            @elseif($d->deposit < $d->price)
                                                <p class="badge text-bg-warning">DP = @currency($d->deposit) | Belum Lunas
                                                    <br>
                                                    Sisa : @currency($d->sisa)
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
                                                <p class="badge text-bg-warning">DP = @currency($d->deposit) | Belum Lunas
                                                    <br>
                                                    Sisa : @currency($d->sisa)
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
    <div class="modal fade" id="CloseBooking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('FO.dashboard.clsBook') }}" class="p-5" method="post">
                        @csrf
                        <input type="hidden" name="id_baru" id="id_baru">
                        <input type="hidden" name="kmr_no" id="kmr_no">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-floating mb-5">
                                    <h5>Clossing Room</h5>
                                    <p>Apakah anda yakin tutup kamar ini ?</p>
                                </div>
                                <div class="text-end">
                                    <button type="button" class="col-2 btn btn-dark" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="col-5 btn btn-danger">Clossing Room</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Booking Room  --}}
    <div class="modal fade" id="FormBooking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('FO.dashboard.trsBook') }}" class="p-5" method="post">
                        @csrf
                        <input type="hidden" name="id_kamar" id="trs_id">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-5">
                                    <h5>Boooking Room</h5>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="namaTamu" id="namaTamu"
                                        placeholder="Nama Tamu" required>
                                    <label for="namaTamu">Nama Tamu</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="noHP" id="noHp"
                                        placeholder="Nomor Telephone/Handhpone" required>
                                    <label for="noHp">Nomor Telephone/HP</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="alamat" id="alamat"
                                        placeholder="Alamat" required>
                                    <label for="alamat">Alamat</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="lamaBooking"
                                        onkeyup="sum(); jumlahCO();" id="lamaBooking" placeholder="Lama Booking/Sewa"
                                        required>
                                    <label for="lamaBooking">Lama Sewa</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="deposit" onkeyup="hitungsisa();"
                                        id="deposit" placeholder="Deposit" required>
                                    <label for="deposit">Deposit</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating mb-3 mt-6">
                                    <input type="text" class="form-control" name="no_kamar" id="no_kamar"
                                        placeholder="Nomor Kamar" readonly>
                                    <label for="no_kamar">Nomor Kamar</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="harga" id="harga"
                                        onkeyup="sum();" placeholder="Harga/Hari" readonly>
                                    <label for="harga">Harga/Hari</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="ci" id="ci"
                                        onkeyup="jumlahCO();" value="{{ $CI }}" readonly>
                                    <label for="ci">Check-In</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="co" id="co"
                                        placeholder="Check-Out" readonly>
                                    <label for="co">Check-Out</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="price" id="price"
                                        placeholder="Total Bayar" readonly>
                                    <label for="price">Total Tagihan</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="sisa" id="sisa"
                                        placeholder="Sisa" readonly>
                                    <label for="sisa">Sisa Tagihan</label>
                                    <input type="hidden" name="id_user" value="{{ Auth::guard('FO')->user()->id }}">
                                </div>
                                <div class="text-end">
                                    <button type="button" class="col-2 btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="col-3 btn btn-success">Buat Room</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Report FO  --}}
    <div class="modal fade" id="reportFO" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="container">
                        <div class="row mb-3">
                            <div class="float-start w-50">
                                <h5>Transaksi Kas</h5>
                                <p>Sisa Saldo <i class="text-danger fw-bold kedip_jam">Rp. 5.000.000</i></p>
                            </div>
                            <div class="float-end text-end w-50 mt-3">
                                <a type="button"
                                    class="col-4 fw-bold p-2 btn btn-sm btn-primary createTrsKAS within-reportFO">Tambah
                                    Transaksi KAS</a>
                            </div>
                        </div>
                        <table class="table table-hover table-responsive table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th style="width: 40px">No</th>
                                    <th style="width: 350px">Tanggal Transaksi</th>
                                    <th style="width: 600px">Keterangan</th>
                                    <th style="width: 200px">Kas Masuk</th>
                                    <th style="width: 120px">Kas Keluar</th>
                                    <th style="width: 120px">Setoran AGH</th>
                                    <th style="width: 120px">Saldo</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data_kas as $d)
                                <tbody>
                                    <tr>
                                        <td style="width: 40px">{{ $no++ }}</td>
                                        @php
                                            $formated_tgl_trs = $d->tgl_trs;
                                            $tglTrs = date_create($formated_tgl_trs);
                                            $formatTRS = date_format($tglTrs, 'd M Y');
                                        @endphp
                                        <td style="width: 250px">{{ $formatTRS }}</td>
                                        <td style="width: 600px">{{ $d->ket }}</td>
                                        <td style="width: 200px">@currency($d->kas_masuk)</td>
                                        <td style="width: 120px">@currency($d->kas_keluar)</td>
                                        <td style="width: 120px">@currency($d->setoran_agh_to_sgh)</td>
                                        <td style="width: 120px">@currency($d->saldo)</td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                {{-- <div class="text-end"> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>

    {{-- End Modal Transaksi Kas  --}}

    {{-- Modal Tambah Transaksi Kas FO  --}}
    <div class="modal fade" id="createKAS" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-end">
                        <button type="button" class="btn-close createTrsKAS-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="container">
                        <h5>Tambah Transaksi</h5>
                        <div class="text-end">
                            <a type="button" class="col-2 fw-bold p-2 btn btn-sm btn-primary createTrsKAS-close">Kembali
                                ke
                                Transaksi KAS</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


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

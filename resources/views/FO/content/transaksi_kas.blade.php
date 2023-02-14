<div class="modal fade" id="reportFO" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
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
                                class="col-4 fw-bold p-2 btn btn-sm btn-success createTrsKAS within-reportFO">Tambah
                                Transaksi KAS</a>
                        </div>
                    </div>
                    <table class="table table-hover table-responsive table-striped">
                        <thead class="table-warning">
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

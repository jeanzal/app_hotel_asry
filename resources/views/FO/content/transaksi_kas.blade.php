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
                            <p>Sisa Saldo Kemarin <i class="text-danger fw-bold kedip_jam">
                                @foreach($total_saldo_today as $t)
                                    @currency($t->sisa_today)
                                @endforeach
                            </i></p>
                            <p>Sisa Saldo Hari Ini <i class="text-danger fw-bold kedip_jam">
                                @foreach($total_saldo_today as $t)
                                    @currency($t->sisa_today)
                                @endforeach
                            </i></p>
                        </div>
                        <div class="float-end text-end w-50 mt-3">
                            <a type="button"
                                class="col-4 fw-bold p-2 btn btn-sm btn-success createTrsKAS within-reportFO">Tambah
                                Transaksi KAS</a>
                        </div>
                    </div>
                    <table class="table table-hover table-striped">
                        <thead class="table-success">
                            <tr>
                                <th style="width: 40px; text-align:center;">No</th>
                                <th style="width: 250px; text-align:center;">Tanggal Transaksi</th>
                                <th style="width: 400px; text-align:center;">Keterangan</th>
                                <th style="width: 200px; text-align:center;">Kas Masuk</th>
                                <th style="width: 120px; text-align:center;">Kas Keluar</th>
                                <th style="width: 120px; text-align:center;">Setoran AGH</th>
                                <th style="width: 200px; text-align:center;">Saldo</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                                @forelse ($data_kas as $d)
                            <tbody>
                                <tr>
                                    <td style="width: 40px">{{ $no++ }}</td>
                                    @php
                                        $formated_tgl_trs = $d->tgl_trs;
                                        $tglTrs = date_create($formated_tgl_trs);
                                        $formatTRS = date_format($tglTrs, 'd M Y');
                                    @endphp
                                    <td style="width: 250px">{{ $formatTRS }}</td>
                                    <td style="width: 400px">{{ $d->ket }}</td>
                                    <td style="width: 200px">@currency($d->kas_masuk)</td>
                                    <td style="width: 120px">@currency($d->kas_keluar)</td>
                                    <td style="width: 120px">@currency($d->setoran_agh_to_sgh)</td>
                                    <td style="width: 200px">@currency($d->saldo)</td>
                                </tr>
                                
                                @empty
                                    <tr>
                                        <td colspan="7" rowspan="2" class="text-center text-red">Blom ada Transaksi hari ini</td>
                                    </tr>
                            </tbody>
                            @endforelse

                            <tr>
                                <td colspan="6" rowspan="2" class="text-center text-red fw-bold">Total</td>
                                <td class="fw-bold">
                                    @foreach($total_saldo_today as $t)
                                        @currency($t->sisa_today)
                                    @endforeach
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

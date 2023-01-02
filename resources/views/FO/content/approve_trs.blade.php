<div class="modal fade" id="ApproveTRS" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-end">
                    <button type="button" class="btn-close ApproveTRS-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route('FO.dashboard.approveTrsKAS') }}" method="post">
                    @csrf
                    <div class="container">
                        <h5 class="mb-4">Approve Transaksi </h5>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="tgl_trs" id="tglTrs"
                            value="{{ $date_now }}" readonly>
                            <label for="tglTrs">Tanggal Approve Transaksi</label>
                        </div>
                        @php 
                            $saldo_kemarin = 0;
                            $total_saldo = 0;
                            $sum_trs = 0;
                            $total_kas_masuk = 0;
                            $total_kas_keluar = 0;
                            $total_setor = 0;
                            foreach ($sisa_saldo_kemarin as $key ) {
                                $saldo_kemarin = $key->sisa_saldo;    
                            }
                            foreach ($data_kas as $d) {
                                $total_kas_masuk += $d->kas_masuk;
                                $total_kas_keluar += $d->kas_keluar;
                                $total_setor += $d->setoran_agh_to_sgh;
                                $total_saldo += ($d->kas_masuk - $d->kas_keluar - $d->setoran_agh_to_sgh);
                            }
                            $sum_trs = $total_saldo + $saldo_kemarin;
                            @endphp 
                        <div class="form-floating mb-4">
                            <input type="text" value="{{ $sum_trs }}" name="sisa_saldo">
                            <input type="text" value="{{ $total_kas_masuk }}" name="total_kas_masuk">
                            <input type="text" value="{{ $total_kas_keluar }}" name="total_kas_keluar">
                            <input type="text" value="{{ $total_setor }}" name="total_setor_ke_sgh">
                           
                                    {{-- @currency($sum_trs) --}}
                            <p>Total Kas Hari Ini = <b>@currency($sum_trs)</b></p>
                            <p>Total Kas Masuk Ini = <b>@currency($sum_trs)</b></p>
                        </div>
                        <div class="text-end mb-3">
                            <button type="button"
                                class="col-2 fw-bold p-2 btn btn-sm btn-danger ApproveTRS-close">Batal</button>
                            <button type="submit" class="col-2 fw-bold p-2 btn btn-sm btn-info">Approve</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

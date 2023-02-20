<div class="modal fade" id="createKAS" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-end">
                    <button type="button" class="btn-close createTrsKAS-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="container">
                    <h5 class="mb-3">Tambah Transaksi</h5>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="tgl_trs" id="tglTrs"
                            value="{{ $date_now }}" readonly>
                        <label for="tglTrs">Tanggal Transaksi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Keterangan" name="ket" id="ket" style="height: 100px"></textarea>
                        <label for="ket">Keterangan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="kas_masuk" id="kas_masuk" placeholder="Kas Masuk" required>
                        <label for="kas_masuk">Kas Masuk</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="kas_keluar" id="kas_keluar" placeholder="Kas Keluar" required>
                        <label for="kas_keluar">Kas Keluar</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="setoran_agh_to_sgh" id="setoran_agh_to_sgh" placeholder="Setor ke SGH" required>
                        <label for="setoran_agh_to_sgh">Setor ke SGH</label>
                    </div>
                    <div class="text-end">
                        <button type="button" class="col-2 fw-bold p-2 btn btn-sm btn-secondary createTrsKAS-close">Batal</button>
                        <button type="submit" class="col-2 fw-bold p-2 btn btn-sm btn-success">Buat Transaksi</button>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

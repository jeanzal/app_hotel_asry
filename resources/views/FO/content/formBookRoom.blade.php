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

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

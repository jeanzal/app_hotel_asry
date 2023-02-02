@extends('BO/layout/main')
@section('content')

<div>
    <div class="btn-wrapper">
      <a href="#" class="btn btn-primary text-white me-0" data-toggle="modal" data-target="#update_harga_kamar"><i class="icon-download"></i> Set Harga Kamar</a>
      {{-- <a href="#" class="btn btn-primary text-white me-0" data-toggle="modal" data-target="#tambah_kamar"><i class="icon-plus"></i> Tambah</a> --}}
    </div>
  </div>
</div>
<div class="tab-content tab-content-basic">
    <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nomor Kamar</th>
                <th>Lokasi</th>
                <th>Harga</th>
                <th>Fasilitas</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse($kamar as $kmr) 
                <tr>
                    <td>{{ $kmr->no_kamar }}</td>
                    <td>{{ $kmr->lokasi }}</td>
                    <td>@currency($kmr->harga)</td>
                    <td>{{ $kmr->fasilitas }}</td>
                    <td>
                      @if($kmr->status == "1")
                        <div class="badge badge-success fw-bold text-uppercase">Ready</div>
                      @elseif($kmr->status == "2")
                        <div class="badge badge-danger fw-bold text-uppercase">Booking</div>
                      @endif

                    </td>
                    <td>
                        <a href="{{ route('BO.kamar.edit_kamar', $kmr->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        {{-- <a onclick = "return confirm('Apakah Anda Yakin?')" href="{{ route('BO.kamar.hapus_kamar', $kmr->id) }}" class="btn btn-sm btn-danger">Hapus</a> --}}
                    </td>
                </tr>
                    @empty
                    <tr>
                      <td colspan="5" class="text-center">Data Kamar masih kosong !</td>
                    </tr>
                @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="update_harga_kamar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Set Harga Kamar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('BO.kamar.set_harga_kamar')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="modal-body">
                      <div class="form-group">
                        <label for="harga">Set Harga Baru</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga Kamar Baru" required>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-sm btn-success"><i class="icon-save"></i>Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Tambah Kamar -->

@endsection

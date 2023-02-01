@extends('BO/layout/main')
@section('content')

<div>
    <div class="btn-wrapper">
      <a href="#" class="btn btn-primary text-white me-0" data-toggle="modal" data-target="#tambah_transaksi"><i class="icon-plus"></i> Tambah</a>
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
                <th>#</th>
                <th>Nama Tamu</th>
                <th>No. Kamar</th>
                <th>Check-In</th>
                <th>Check-Out</th>
                <th>Price</th>
                <th>Status</th>
                <th>Lokasi</th>
                <th>Ket</th>
                <th>Aksi</th>
              </tr>
            </thead>
            @php
                $no = 1;
            @endphp
                <tbody>
                    @forelse($trs as $t) 
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $t->nama_tamu }}</td>
                        <td>{{ $t->no_kamar }}</td>
                        <td>{{ $t->ci }}</td>
                        <td>{{ $t->co }}</td>
                        <td>@currency($t->price)</td>
                        <td>
                            <div class="badge badge-danger fw-bold text-uppercase">{{ $t->status }}</div>
                        </td>
                        <td>{{ $t->lokasi }}</td>
                        <td>{{ $t->ket }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            <a onclick = "return confirm('Apakah Anda Yakin?')" href="#" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10" class="text-center">Transaksi masih kosong !</td>
                    </tr>
                    @endforelse
                </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah Kamar -->

<div class="modal fade" id="tambah_transaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('BO.transaksi.tambah_transaksi')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="No_Kamar">Nomor Kamar</label>
                        <input type="number" class="form-control" name="no_kamar" id="no_kamar" placeholder="Nomor Kamar" required> 
                      </div>
                      <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                          <select class="form-control" id="lokasi" name="lokasi" required>
                            <option value="">--Pilih--</option>
                            <option value="Lantai 1">Lantai 1</option>
                            <option value="Lantai 2">Lantai 2</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Kamar" required>
                      </div>
                      <div class="form-group">
                        <label for="fasilitas">Fasilitas</label>
                        <input type="text" class="form-control" name="fasilitas" id="fasilitas" placeholder="Fasilitas Kamar" required>
                        <input type="hidden" name="foto" value="foto.jpg">
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

@endsection

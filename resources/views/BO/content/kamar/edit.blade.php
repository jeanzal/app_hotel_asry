@extends('BO/layout/main')
@section('content')
    </div>
    <div class="tab-content tab-content-basic">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('BO.kamar.update_kamar') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nomor Kamar</label>
                            <input type="number" name="no_kamar" class="form-control" value="{{ $kamar->no_kamar }}"
                                placeholder="Nomor Kamar" readonly>
                        </div>
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input type="text" name="lokasi" class="form-control" value="{{ $kamar->lokasi }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Harga</label>
                            <input type="number" name="harga" class="form-control" value="{{ $kamar->harga }}"
                                id="exampleInputEmail3" placeholder="Email" readonly>
                        </div>
                        <div class="form-group">
                            <label>Fasilitas</label>
                            <input class="form-control" name="fasilitas" value="{{ $kamar->fasilitas }}" required />
                        </div>
                        <input type="hidden" value="{{ $kamar->id }}" name="id">
                        <input type="hidden" value="{{ $kamar->status }}" name="status">
                        <button type="submit" class="btn btn-primary me-2">Edit</button>
                        <a href="{{ route('BO.kamar.index') }}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

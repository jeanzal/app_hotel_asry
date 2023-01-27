@extends('BO/layout/main')
@section('content')


<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="card">
        <div class="header">
            <h2>{{Session::get('title')}}</h2>
            <ul class="header-dropdown">
                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                        <li><a href="#" data-toggle="modal" data-target="#tambah_kamar"><i class="zmdi zmdi-plus"></i> Tambah</a></li>
                        <li><a href=""><i class="zmdi zmdi-edit"></i> Set Harga</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No. Kamar</th>
                            <th>Lokasi</th>
                            <th>Harga</th>
                            <th>Fasilitas</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    @foreach($kamar as $kmr)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $kmr->no_kamar }}</th>
                            <td>{{ $kmr->lokasi }}</td>
                            <td>@currency($kmr->harga)</td>
                            <td>{{ $kmr->fasilitas }}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-sm btn-warning"><i class="zmdi zmdi-edit"></i></a>
                                <button type="submit" class="btn btn-sm btn-danger"><i class="zmdi zmdi-delete"></i></button>
                            </td>
                        </tr>
                        
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambah_kamar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title" id="defaultModalLabel">Tambah Data</h5>
            </div>
            <form action="{{route('BO.kamar.index')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body form-horizontal"> 
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-2 col-sm-4 form-control-label">
                            <label for="no_kamar">No Kamar</label>
                        </div>
                        <div class="col-lg-8 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="number" name="no_kamar" class="form-control" placeholder="Nomor Kamar" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix mb-3">
                        <div class="col-lg-4 col-md-2 col-sm-4 form-control-label">
                            <label for="lokasi">Lokasi</label>
                        </div>
                        <div class="col-lg-8 col-md-10 col-sm-8">
                                <select class="form-control show-tick" name="lokasi">
                                    <option value="">-- Please select --</option>
                                    <option value="Lantai 1">Lantai 1</option>
                                    <option value="Lantai 2">Lantai 2</option>
                                </select>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-2 col-sm-4 form-control-label">
                            <label for="no_kamar">Harga</label>
                        </div>
                        <div class="col-lg-8 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="number" name="harga" class="form-control" placeholder="Harga" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-2 col-sm-4 form-control-label">
                            <label for="fasilitas">Fasilitas</label>
                        </div>
                        <div class="col-lg-8 col-md-10 col-sm-8">
                            <div class="form-line">
                                <textarea rows="4" name="fasilitas" class="form-control no-resize" placeholder="Fasilitas Kamar"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="foto" value="foto.jpg">
                    <a href="" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="zmdi zmdi-close"></i> Batal</a>
                    <button type="submit" class="btn btn-success"><i class="zmdi zmdi-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

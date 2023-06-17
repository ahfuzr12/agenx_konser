@extends('guest')

@section('judul')
    FORMULIR PEMBELIAN TIKET X
@endsection

@section('isi')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">BIODATA PEMBELI <small>KONSER X</small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form enctype="multipart/form-data" class="form-horizontal" style="zoom: 80%" method="POST"
                        action="{{ route('belitiket.action') }}">
                        @if (session()->has('errors'))
                            @foreach ($errors->all() as $err)
                                <div class="alert alert-danger alert dismissible fade show" role="alert"
                                    id="danger-alert">
                                    <strong>{{ $err }}
                                    </strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endforeach
                        @endif
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap<b class="text-danger">*</b></label>
                                <input type="text" name="nama" class="form-control" id="nama"
                                    placeholder="Masukan Nama Lengkap" value="{{ old('nama') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK KTP<b class="text-danger">*</b></label>
                                <input type="text" name="nik" class="form-control" id="nik"
                                    placeholder="Masukan NIK KTP" value="{{ old('nik') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-Mail<b class="text-danger">*</b></label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Masukan E-Mail" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nohp">Nomor Handphone<b class="text-danger">*</b></label>
                                <input type="number" name="nohp" class="form-control" id="nohp"
                                    placeholder="contoh : 081234567" value="{{ old('nohp') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis Tiket<b class="text-danger">*</b></label>
                                <select class="form-control" name="jenis" required>
                                    <option value="" selected disabled>...</option>
                                    <option @if (old('jenis') == 1) selected @endif value="1">REGULAR
                                    </option>
                                    <option @if (old('jenis') == 2) selected @endif value="2">PREMIUM
                                    </option>
                                    <option @if (old('jenis') == 3) selected @endif value="3">PLATINUM
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" name="alamat" style="resize: none">{{ old('alamat') }}</textarea>
                            </div>
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="terms" class="custom-control-input" id="setuju"
                                        required>
                                    <label class="custom-control-label" for="setuju">Saya Menyetujui <a href="#">
                                            Syarat dan Ketentuan yang Berlaku</a>.</label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

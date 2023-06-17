@extends('guest')

@section('judul')
    <button class="btn btn-success" onclick="window.print(); return false;">
        Cetak Tiket
    </button>
@endsection

@section('isi')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">BIODATA {{ $nama }} - <small>KONSER X</small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    @if (session('success'))
                        <div class="alert alert-success alert dismissible fade show" role="alert" id="success-alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="form-group">
                            <label for="id_ticket">Id Tiket<b class="text-danger">*</b></label>
                            <input type="text" name="id_ticket" class="form-control" id="id_ticket"
                                placeholder="Masukan id_ticket Lengkap" value="{{ $id_ticket }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap<b class="text-danger">*</b></label>
                            <input type="text" name="nama" class="form-control" id="nama"
                                placeholder="Masukan Nama Lengkap" value="{{ $nama }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK KTP<b class="text-danger">*</b></label>
                            <input type="text" name="nik" class="form-control" id="nik"
                                placeholder="Masukan NIK KTP" value="{{ $nik }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail<b class="text-danger">*</b></label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Masukan E-Mail" value="{{ $email }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nohp">Nomor Handphone<b class="text-danger">*</b></label>
                            <input type="number" name="nohp" class="form-control" id="nohp"
                                placeholder="contoh : 081234567" value="{{ $nohp }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Tiket<b class="text-danger">*</b></label>
                            <select class="form-control" name="jenis" disabled>
                                <option value="" selected disabled>...</option>
                                <option @if ($jenis == 1) selected @endif value="1">REGULAR
                                </option>
                                <option @if ($jenis == 2) selected @endif value="2">PREMIUM
                                </option>
                                <option @if ($jenis == 3) selected @endif value="3">PLATINUM
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" style="resize: none" readonly>{{ $alamat }}</textarea>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        $(".alert").delay(3000).slideUp(200, function() {
            $(this).alert('success');
        });
    </script>
@endsection

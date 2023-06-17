@extends('main')

@section('judul')
    Data Pemesan Tiket Konser X
@endsection

@section('isi')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">TABEL DATA PEMESAN TIKET KONSER X</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="pemesan" class="table table-sm table-bordered table-striped user_datatable"
                            style="text-align: center;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id Tiket</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Email</th>
                                    <th>No Handphone</th>
                                    <th>Jenis Tiket</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($dataPemesan as $d)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $d->id_ticket }}</td>
                                        <td>{{ $d->nama }}</td>
                                        <td>{{ $d->nik }}</td>
                                        <td>{{ $d->email }}</td>
                                        <td>{{ $d->nohp }}</td>
                                        <td>
                                            {{ $d->jenis == 1 ? 'REGULAR' : ($d->jenis == 2 ? 'PREMIUM' : ($d->jenis == 3 ? 'PLATINUM' : null)) }}
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-sm"> EDIT </button>
                                            <button class="btn btn-danger btn-sm"> DELETE </button>
                                        </td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>

    <!-- DataTables  & Plugins -->
    <script>
        $(function() {
            $("#pemesan").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "order": [
                    [1, 'desc'],
                    [0, 'desc'],
                ],
                "columnDefs": [{
                        "orderable": false,
                        "targets": 8,
                    },
                    {
                        "targets": 1,
                        "visible": false,
                        "searchable": false,
                    }
                ]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection

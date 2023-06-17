@extends('main')

@section('judul')
    LAPORAN CHECKIN KONSER X
@endsection

@section('isi')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">TABEL LAPORAN CHECKIN KONSER X</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="pemesan" class="table table-sm table-bordered table-striped user_datatable"
                            style="text-align: center;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id Tiket</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($Laporan as $d)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $d->id_ticket }}</td>
                                        <td>
                                            @if ($d->checkin == 0)
                                                <span class="badge badge-danger badge-md"> BELUM CHECKIN </span>
                                            @else
                                                <span class="badge badge-success badge-md"> CHECKED </span>
                                            @endif
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

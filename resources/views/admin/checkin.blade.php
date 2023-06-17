  @extends('main')

  @section('judul')
      Check In
  @endsection

  @section('isi')
      <div class="container-fluid">

          <form enctype="multipart/form-data" method="POST" action="{{ route('checkin.action') }}">
              <div class="row">
                  @csrf
                  <div class="col-12">
                      <h3>Masukan ID Tiket Untuk Check In</h3>
                      <input type="text" name="id_ticket" class="form-control">
                  </div>

                  <div class="col-4 offset-5">
                      <button type="submit" class="btn btn-lg btn-primary">Check In</button>
                  </div>
              </div>
          </form>
          <br>


          @if (session('success'))
              <div class="alert alert-success alert dismissible fade show" role="alert" id="success-alert">
                  <strong>{{ session('success') }}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          @endif

          @if (session('danger'))
              <div class="alert alert-danger alert dismissible fade show" role="alert" id="danger-alert">
                  <strong>{{ session('danger') }}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          @endif

          @if (isset($dataCheckin))
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
                          <th>Status</th>
                      </tr>
                  </thead>
                  <tbody>
                      @php
                          $no = 1;
                      @endphp
                      @foreach ($dataCheckin as $d)
                          <tr>
                              <td>{{ $no }}</td>
                              <td>{{ $d->id_ticket }}</td>
                              <td>{{ $d->nama }}</td>
                              <td>{{ substr($d->nik, 0, 6) }}*****</td>
                              <td>{{ substr($d->email, 0, 3) }}********</td>
                              <td>{{ substr($d->nohp, 0, 5) }}****</td>
                              <td>
                                  {{ $d->jenis == 1 ? 'REGULAR' : ($d->jenis == 2 ? 'PREMIUM' : ($d->jenis == 3 ? 'PLATINUM' : null)) }}
                              </td>
                              <td>
                                  <span class="badge badge-success badge-sm"> CHECKED </span>
                              </td>
                          </tr>
                          @php
                              $no++;
                          @endphp
                      @endforeach
                  </tbody>
              </table>
          @endif
      </div>

      <aside class="control-sidebar control-sidebar-dark">
      </aside>
  @endsection

  @extends('main')

  @section('judul')
      Dashboard
  @endsection

  @section('isi')
      <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
              <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                      <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-ticket-alt"></i></span>
                      <div class="info-box-content">
                          <span class="info-box-text">TIKET REGULAR</span>
                          <span class="info-box-number">
                              {{ $regular }}
                              <small>orang</small>
                          </span>
                      </div>
                      <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-ticket-alt"></i></span>

                      <div class="info-box-content">
                          <span class="info-box-text">TIKET PREMIUM</span>
                          <span class="info-box-number">
                              {{ $premium }}
                              <small>orang</small>
                          </span>
                      </div>
                      <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <!-- fix for small devices only -->
              <div class="clearfix hidden-md-up"></div>

              <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-ticket-alt"></i></span>

                      <div class="info-box-content">
                          <span class="info-box-text">TIKET PLATINUM</span>
                          <span class="info-box-number">
                              {{ $platinum }}
                              <small>orang</small>
                          </span>
                      </div>
                      <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                      <div class="info-box-content">
                          <span class="info-box-text">TOTAL PEMESAN</span>
                          <span class="info-box-number">
                              {{ $total }}
                              <small>orang</small>
                          </span>
                      </div>
                      <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
              </div>
              <!-- /.col -->
          </div>
      </div>
      <!--/. container-fluid -->


      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
  @endsection

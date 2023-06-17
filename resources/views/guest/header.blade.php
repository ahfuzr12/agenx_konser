  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <a href="/">
              <h3 class="mx-auto w-100">
                  <span class="brand-text font-weight-light">
                      <img src="{{ asset('lte/dist/img/logo3.png') }}" alt="AdminLTE Logo" class="rounded"
                          style="opacity: .7; width:60px; height:50px;"> KONSER
                  </span>
              </h3>
          </a>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">
                  Login
                  <i class="fas fa-sign-in-alt"></i>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="{{ route('belitiket') }}">
                  Beli Tiket
                  <i class="fas fa-shopping-cart"></i>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="{{ route('faq') }}">
                  FAQ
                  <i class="fas fa-question-circle"></i>
              </a>
          </li>
      </ul>
  </nav>
  <!-- /.navbar -->

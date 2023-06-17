@extends('guest')

@section('judul')
    Konser Musik X Bandung
@endsection

@section('isi')
    <div class="col-md-12">
        <div class="card card-primary collapsed-card">
            <div class="card-header text-center">
                <div class="d-flex align-items-center">
                    <h3 class="mx-auto w-100">LINE UP</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        @for ($i = 1; $i < 13; $i++)
                            <div class="item col-sm-6 col-md-4 col-lg-3 mb-4">
                                <a href="{{ asset('lineup/' . $i . '.jpg') }}" class="fancybox" data-fancybox="gallery1"
                                    data-caption="Lampiran">
                                    <img src="{{ asset('lineup/' . $i . '.jpg') }}" width="100%" height="200px">
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if (session('success'))
        <div class="alert alert-success alert dismissible fade show" role="alert" id="success-alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header text-center">
                <div class="d-flex align-items-center">
                    <h3 class="mx-auto w-100">PRICE LIST</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card card-secondary">
                            <div class="card-header text-center">
                                <div class="d-flex align-items-center">
                                    <h3 class="mx-auto w-100">REGULAR</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li class="text-warning"> Akses 1 Hari (21 / 22 /23) </li>
                                    <li class="text-warning"> Tempat di Stage E / Stage D</li>
                                    <li class="text-danger"> Tidak Gratis Parkir </li>
                                    <li class="text-danger"> Tidak Dapat Jas Hujan </li>
                                    <li class="text-danger"> Tidak Dapat kaos </li>
                                </ul>
                            </div>
                            <div class="card-footer text-right bg-white">
                                <div class="row">
                                    <div class="col-8">
                                        <h3>Rp. 125.000</h3>
                                    </div>
                                    <div class="col-2">
                                        <a href="{{ route('belitiket') }}">
                                            <div class="btn btn-primary btn-lg btn-flat">
                                                <i class="fas fa-cart-plus fa-lg"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <div class="btn btn-danger btn-lg btn-flat">
                                            <i class="fas fa-heart fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card card-info">
                            <div class="card-header text-center position-relative">
                                <div class="ribbon-wrapper ribbon-xl">
                                    <div class="ribbon bg-success text-xl">
                                        PALING LAKU
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <h3 class="mx-auto w-100">PREMIUM</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li class="text-warning"> Akses 2 Hari (21 & 22 / 22 & 23 / 21 & 23) </li>
                                    <li class="text-warning"> Tempat di Stage C / Stage B</li>
                                    <li> Gratis Parkir </li>
                                    <li> Gratis Jas Hujan </li>
                                    <li class="text-danger"> Tidak Dapat kaos </li>
                                </ul>
                            </div>
                            <div class="card-footer text-right bg-white">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center">
                                                <s>
                                                    <h6>Rp. 250.000</h6>
                                                </s>
                                            </div>
                                            <div class="col-8">
                                                <h3>Rp. 195.000</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <a href="{{ route('belitiket') }}">
                                            <div class="btn btn-primary btn-lg btn-flat">
                                                <i class="fas fa-cart-plus fa-lg"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <div class="btn btn-danger btn-lg btn-flat">
                                            <i class="fas fa-heart fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card card-success">
                            <div class="card-header text-center">
                                <div class="d-flex align-items-center">
                                    <h3 class="mx-auto w-100">PLATINUM</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li> Akses FULL 3 HARI </li>
                                    <li> Tempat di Stage A (UTAMA)</li>
                                    <li> Gratis Parkir </li>
                                    <li> Gratis Jas Hujan </li>
                                    <li> Gratis Kaos Exklusif Konser X </li>
                                </ul>
                            </div>
                            <div class="card-footer text-right bg-white">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center">
                                                <s>
                                                    <h6>Rp. 370.000</h6>
                                                </s>
                                            </div>
                                            <div class="col-8">
                                                <h3>Rp. 335.000</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <a href="{{ route('belitiket') }}">
                                            <div class="btn btn-primary btn-lg btn-flat">
                                                <i class="fas fa-cart-plus fa-lg"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <div class="btn btn-danger btn-lg btn-flat">
                                            <i class="fas fa-heart fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <!-- ====== Header Start ====== -->
    <header class="ud-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="#">
                <img src="{{asset('assets/images/logo/logo.svg')}}" alt="Logo" />
              </a>

              <div class="navbar-collapse">
                <div class="navbar-btn d-none d-sm-inline-block position-absolute end-0">
                    <a href="#" class="ud-main-btn ud-login-btn">
                    {{Auth()->guard('masyarakat')->user()->nama}}
                    </a>
                    <a class="ud-main-btn ud-white-btn" href="#">
                        Log Out
                    </a>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ====== Header End ====== -->

    <!-- ====== Hero Start ====== -->
    <section class="ud-hero" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
              <h1 class="ud-hero-title">
                Pengaduan Masyarakat
              </h1>
              <p class="ud-hero-desc">
                Laporkan Masalahmu terkait lingkungan disini
              </p>
              <!-- <ul class="ud-hero-buttons">
                <li>
                  <a href="https://links.uideck.com/play-bootstrap-download" rel="nofollow noopener" target="_blank" class="ud-main-btn ud-white-btn">
                    Download Now
                  </a>
                </li>
                <li>
                  <a href="https://github.com/uideck/play-bootstrap" rel="nofollow noopener" target="_blank" class="ud-main-btn ud-link-btn">
                    Learn More <i class="lni lni-arrow-right"></i>
                  </a>
                </li>
              </ul> -->
            </div>
            <div
              class="ud-hero-brands-wrapper wow fadeInUp"
              data-wow-delay=".3s"
            >
              <!-- <img src="assets/images/hero/brand.svg" alt="brand" /> -->
            </div>
            <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-lg-12 col-md-12 col-xl-6">
                    <div class="card shadow">
                        <div class="card-header text-center">
                            Masukkan Tanggapan
                        </div>
                        <div class="card-body">
                            @if($messege = Session::get('success'))
                                <div class="alert alert-success">
                                    {{ $messege }}
                                </div>
                            @endif

                            <form method="post" action="/pengaduan/store" enctype="multipart/form-data">
        
                                {{ csrf_field() }}
        
                                <div class="form-group">
                                    <label>Tanggal Pengaduan</label>
                                    <input type="datetime-local" name="tgl_pengaduan" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nik" value="{{Auth()->guard('masyarakat')->user()->nama}}" class="form-control" placeholder="Nama Pengadu ..">
                                </div>
        
                                <div class="form-group">
                                    <label>Laporan</label>
                                    <textarea name="isi_laporan" rows="10" class="form-control" placeholder="isi laporan .."></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>
        
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Simpan">
                                </div>
        
                            </form>
        
                        </div>
                    </div>
                </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Hero End ====== -->
@endsection

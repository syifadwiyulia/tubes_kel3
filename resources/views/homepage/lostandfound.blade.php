@extends('layouts.mainlayout')
<link rel="stylesheet" href="{{asset('admin/assets/js/main.js')}}" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@section('page_title','Homepage')
@section('content')
<!-- Bagian bawah navbar -->
<div class="position-relative iq-banner">
    <div class="iq-navbar-header">
        <div class="iq-header-img">
            <img src={{asset('admin/assets/img/top-header.png')}} alt="header">
            <div class="container-fluid iq-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-white">
                            <h1 class="text-white" style="font-weight: bold;">Hello {{ Auth::user()->name}} !</h1>
                            <p>Get your lost items back and report if you find items.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel Card -->
<div class="bg-card">
<div id="carouselCategory" class="carousel slide">
  <div class="carousel-inner">
    <h2 class="text-center py-5">Recent Post</h2>
      <div class="carousel-item active">
        <div class="media hstack gap-5 justify-content-center pb-5 ">
          <div class="col-md-3">
            <img src="admin/assets/img/jamtangan.png" height="280" width="250" class="card-img-top rounded" alt="airpods">
            <div class="card-body">
              <p class="timecard text-danger text-start mt-4">15 mins ago</p>
              <h4 class="card-title" style="font-weight: bold;">Jam Tangan</h4>
              <p class="card-text">Jam tangan berwarna silver, hilang di gedung FIT sekitar pukul 10 pagi tadi dekat MP Mart</p>
              <button type="button" class="btn btn-primary">See details</button>
            </div>
          </div>
          <div class="col-md-3">
            <img src="admin/assets/img/tumblr.png" height="280" width="250" class="card-img-top rounded" alt="Kunci">
            <div class="card-body">
              <p class="timecard text-danger text-start mt-4">30 mins ago</p>
              <h4 class="card-title" style="font-weight: bold;">Tumblr</h4>
              <p class="card-text">Tumblr berwarna pink, hilang di gedung Tokong Nanas lantai 8 ruang 13 </p>
              <button type="button" class="btn btn-primary">See details</button>
            </div>
          </div>
          <div class="col-md-3">
            <img src="admin/assets/img/buku.png" height="280" width="250" class="card-img-top rounded" alt="Dompet">
            <div class="card-body">
              <p class="timecard text-danger text-start mt-4">45 mins ago</p>
              <h4 class="card-title" style="font-weight: bold;">Buku</h4>
              <p class="card-text">Buku dengan hardcover berwarna biru, hilang di Gedung FIT Ruang Lab B5 </p>
              <button type="button" class="btn btn-primary">See details</button>
            </div>
          </div>
        </div> 
      </div>

      <div class="carousel-item">
        <div class="media hstack gap-5 justify-content-center pb-5 ">
          <div class="col-md-3">
            <img src="admin/assets/img/kuncikos.png" height="280" width="250" class="card-img-top rounded" alt="ktm">
            <div class="card-body">
              <p class="timecard text-danger text-start mt-4">50 mins ago</p>
              <h4 class="card-title" style="font-weight: bold;">Kunci Kos</h4>
              <p class="card-text">Kunci dengan gantungan berwarna merah dan biru, hilang di lab ruang A9 FIT.</p>
              <button type="button" class="btn btn-primary">See details</button>
            </div>
          </div>
          <div class="col-md-3">
            <img src="admin/assets/img/payung.png" height="280" width="250" class="card-img-top rounded" alt="Glasses">
            <div class="card-body">
              <p class="timecard text-danger text-start mt-4">57 mins ago</p>
              <h4 class="card-title" style="font-weight: bold;">Payung</h4>
              <p class="card-text">Payung berwarna hitam, terakhir kali di lihat  di atas meja dekat komputer ruang A4</p>
              <button type="button" class="btn btn-primary">See details</button>
            </div>
          </div>
          <div class="col-md-3">
            <img src="admin/assets/img/headphone.png" height="280" width="250" class="card-img-top rounded" alt="handphone">
            <div class="card-body">
              <p class="timecard text-danger text-start mt-4">1 hours ago</p>
              <h4 class="card-title" style="font-weight: bold;">Headphone</h4>
              <p class="card-text">Headphone berwarna putih, hilang di Open Library. Terakhir kali di lihat sekitar rak buku fiksi</p>
              <button type="button" class="btn btn-primary">See details</button>
            </div>
          </div>
        </div> 
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategory" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselCategory" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
-->
<div class="bg-primary mt-4">
    <div class="container"> 
        <div class="row">
            <h3 class="textintruksi text-center text-white" style="margin-top: 5%">Important Guidelines</h3>
            <div class="col-md-6">
                <div class="feature d-flex align-items-center">
                    <img src={{asset('admin/assets/img/no1.png')}} class="me-3" style="margin-top: -10%;">
                    <div>
                        <h4 class="text-white" style="margin-top: 10%">Found an Item</h4>
                        <p class="text-white font-size:small" style="height: 110px; max-width: 80%;">If you find an item that might be related to a lost item, please report your discovery to us. Your assistance is crucial in returning items to their rightful owners.</p>
                    </div>
                </div>
                <div class="feature d-flex align-items-center">
                    <img src={{asset('admin/assets/img/no2.png')}} class="me-3" style="margin-top: -9%">
                    <div>
                        <h4 class="text-white">Report Promptly</h4>
                        <p class="text-white" style="max-width: 80%;">Kindly report your lost items as soon as possible to initiate the search process.                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature d-flex justify-content-end">
                    <img src={{asset('admin/assets/img/no3.png')}} class="me-3" style="margin-top: 8%">
                    <div>
                        <h4 class="text-white" style="margin-top: 10%">Detailed Description</h4>
                        <p class="text-white" style="height: 100px; max-width: 80%;">A thorough description of the lost item aids in effective search efforts.</p>
                    </div>
                </div>
                <div class="feature d-flex justify-content-end">
                    <img src={{asset('admin/assets/img/no4.png')}} class="me-3" style="margin-top: 0%">
                    <div>
                        <h4 class="text-white">Check Found Items List</h4>
                        <p class="text-white" style="height: 110px; max-width: 80%;">Regularly check the list of found items to see if your lost item is listed.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategory" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselCategory" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>

<h3 class="text-center mt-4">Contact Us</h3>
<div class="d-flex justify-content-center mb-4">
    <form class="form-inline mt-4">
      <div class="row">
        <div class="col-auto">
          <div class="form-group mb-4">
            <label for="name">Your Name</label>
            <input type="text" class="form-control" >
          </div>
        </div>
        <div class="col-auto">
          <div class="form-group mb-4">
            <label for="email">Your Email</label>
            <input type="email" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group mt-2">
        <label for="message" class="sr-only">Message</label>
        <textarea class="form-control" ></textarea>
      </div>
      <button type="submit" class="btn btn-primary mt-4 mb-4">Send Message</button>
    </form>
  </div>
<!-- End -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="swiper-bundle.min.js"></script>
      <script src="script.js"></script> 
@endsection
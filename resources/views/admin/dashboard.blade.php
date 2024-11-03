@extends('layout.main')
@section('content')

<div class="row">
  <div class="col-3 mb-3">
      <div class="card border-0 zoom-in bg-light-info shadow-none">
          <div class="card-body text-center">
              <img src="{{ asset('assets/images/svgs/icon-bar.svg') }}" width="50" height="50" class="mb-3"
                  alt="" />
              <p class="fw-semibold fs-3 text-info mb-1">Total Pengajuan</p>
              <h5 class="fw-semibold text-info mb-0">#</h5>
          </div>
      </div>
  </div>
  <div class="col-3 mb-3">
      <div class="card border-0 zoom-in bg-light-danger shadow-none">
          <div class="card-body text-center">
              <img src="{{ asset('assets/images/svgs/icon-favorites.svg') }}" width="50" height="50"
                  class="mb-3" alt="" />
              <p class="fw-semibold fs-3 text-primary mb-1">Total Pengajuan Disetujui</p>
              <h5 class="fw-semibold text-primary mb-0">#</h5>
          </div>
      </div>
  </div>
  <div class="col-3 mb-3">
      <div class="card border-0 bg-light-primary shadow-none">
          <div class="card-body text-center">
              <img src="{{ asset('assets/images/svgs/icon-dd-date.svg') }}" width="50" height="50"
                  class="mb-3" alt="" />
              <p class="fw-semibold fs-3 text-primary mb-1">Jadwal Asesmen</p>
              <h5 class="fw-semibold text-primary mb-0">#</h5>
          </div>
      </div>
  </div>
  <div class="col-3 mb-3">
      <div class="card border-0 zoom-in bg-light-success shadow-none">
          <div class="card-body text-center">
              <img src="{{ asset('assets/images/svgs/icon-account.svg') }}" width="50" height="50"
                  class="mb-3" alt="" />
              <p class="fw-semibold fs-3 text-success mb-1">Asesor</p>
              <h5 class="fw-semibold text-success mb-0">#</h5>
          </div>
      </div>
  </div>
  <div class="col-3 mb-3">
      <div class="card border-0 zoom-in bg-light-success shadow-none">
          <div class="card-body text-center">
              <img src="{{ asset('assets/images/svgs/icon-account.svg') }}" width="50" height="50"
                  class="mb-3" alt="" />
              <p class="fw-semibold fs-3 text-success mb-1">Asesor</p>
              <h5 class="fw-semibold text-success mb-0">#</h5>
          </div>
      </div>
  </div>
  <div class="col-3 mb-3">
      <div class="card border-0 zoom-in bg-light-success shadow-none">
          <div class="card-body text-center">
              <img src="{{ asset('assets/images/svgs/icon-account.svg') }}" width="50" height="50"
                  class="mb-3" alt="" />
              <p class="fw-semibold fs-3 text-success mb-1">Asesor</p>
              <h5 class="fw-semibold text-success mb-0">#</h5>
          </div>
      </div>
  </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <section>
      <div class="row">
        <div class="col-12 mt-3 mb-1">
          <h5 class="text-uppercase">Hi, User</h5>
          <p>Welcome to dashboard</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-danger">278</h3>
                  <p class="mb-0">Tag</p>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-tags text-danger fa-3x"></i>
                </div>
              </div>
              <a class="btn btn-sm btn-danger w-100 mt-3">
                Lihat
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-success">156</h3>
                  <p class="mb-0">Category</p>
                </div>
                <div class="align-self-center">
                  <i class="far fa-user text-success fa-3x"></i>
                </div>
              </div>
              <a href="" class="btn btn-sm btn-success w-100 mt-3">
                Lihat
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-warning">64.89 %</h3>
                  <p class="mb-0">Conversion Rate</p>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-chart-pie text-warning fa-3x"></i>
                </div>
              </div>
              <a class="btn btn-sm btn-warning w-100 mt-3">
                Lihat
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-info">423</h3>
                  <p class="mb-0">Post</p>
                </div>
                <div class="align-self-center">
                  <i class="far fa-life-ring text-info fa-3x"></i>
                </div>
              </div>
              <a class="btn btn-sm btn-info w-100 mt-3">
                Lihat
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
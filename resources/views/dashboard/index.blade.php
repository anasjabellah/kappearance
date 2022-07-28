@extends('layouts.layout')
@section('content')

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/anasjabellah/k-appearance.git"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star anasjabellah/k-appearance.git on GitHub"
                    >Star</a>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                   
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                          <p class="mb-4">
                            You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                            your profile.
                          </p>

                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="{{ url('backEnd\man-with-laptop-light.png') }}"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <a href="{{ url('/products') }}">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img src="{{ url('backEnd\unicons\chart-success.png') }}" alt="chart success"  class="rounded" />
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Product</span>
                            <h3 class="card-title mb-2">{{ $getAllProduct }}</h3>
                          </div>
                        </div>
                      </a>
                    </div>

                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <a href="{{ url('/Category') }}">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img
                                  src="{{ url('backEnd\unicons\wallet-info.png') }}"
                                  alt="Credit Card"
                                  class="rounded"
                                />
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">categories</span>
                            <h3 class="card-title text-nowrap mb-1">{{ $getAllCategory }}</h3>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <!-- Total Revenue -->
                <div class="col-8 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <h5 class="card-header"> Product Men</h5>
                    <div class=" text-nowrap">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>image</th>
                            <th>name</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @foreach ($products as $product)
                          <tr>
                            <td><img src="{{ url('images', $product->image ) }}" style="width: 100px;"></td>
                            <td>{{ $product->name }}</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                      <a class="dropdown-item" href="{{ route('products.edit', $product->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                      <a  href="{{ route('products.show', $product->id) }}" class="dropdown-item"><i class='bx bx-show' ></i></i> Show</a >
      
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="dropdown-item" ><i class="bx bx-trash me-1"></i> Delete</button>
                                    </form>
                                </div>
                              </div>
                            </td>
                          </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->

                <div class="col-4 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    <div class="col-6 mb-4">
                      <a href="{{ url('/products') }}">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img src="{{ url('backEnd\unicons\paypal.png') }}" alt="Credit Card" class="rounded" />
                              </div>
                            </div>
                            <span class="d-block mb-1">Payments</span>
                            <h3 class="card-title text-nowrap mb-2">$ {{ $sumPriceProduct }}</h3>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-6 mb-4">
                      <a href="{{ url('/products') }}">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img src="{{ url('backEnd\unicons\cc-primary.png') }}" alt="Credit Card" class="rounded" />
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Transactions</span>
                            <h3 class="card-title mb-2">${{ $sumPriceOrder }}</h3>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>


@endsection
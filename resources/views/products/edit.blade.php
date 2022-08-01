@extends('layouts.layout')
@section('content')
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Form/</span> Edit  Product</h4>
              <a href="{{ url('/backend/products') }}" class="btn btn-primary text-bg-dark mb-3">back</a>

              <!-- Basic Layout & Basic with Icons -->
<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Edit Product Men</h5>
    
        </div>
         <!-- Basic Layout -->
         <div class="col-xxl">
            <div class="card p-5">
              <div class="card-header d-flex align-items-center justify-content-between">
              </div>
              <div class="card-body">

                <form action="{{ route('products.update', $Product->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <input name="category_id" value="{{ $Product->category_id }}" type="hidden"/>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label mb-3" for="basic-default-company">image</label>
                        <div class="col-sm-10">
                            <input name="image" value="{{ $Product->image }}" class="form-control" type="file"  />
                        </div> 
                        <div class="form-group">
                            <img src="{{ url('images', $Product->image ) }}" style="width: 100px; ">
                        </div>
                    </div> 

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label mb-3" for="basic-default-company">name</label>
                        <div class="col-sm-10">
                            <input name="name" class="form-control" type="text" id="formFile" value="{{ $Product->name }}" />
                        </div> 
                    </div> 
                  
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">description</label>
                    <div class="col-sm-10">
                      <textarea
                        name="description"
                        id="basic-default-message"
                        class="form-control"
                        placeholder="Enter description of the product"
                      >{{ $Product->description }}</textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-email">discount price</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <input
                          name="discount_price"
                          type="number"
                          id="basic-default-email"
                          class="form-control"
                          placeholder="Enter ur amount" value="{{ $Product->discount_price }}"
                          />

                      </div>
                    </div>
                  </div>

                  <div class="input-group">
                    <label class="col-sm-2 col-form-label" for="basic-default-email">Price</label>
                    <span class="input-group-text">$</span>
                    <input
                      name="price"
                      type="text"
                      class="form-control"
                      placeholder="Amount"
                      aria-label="Amount (to the nearest dollar)"
                      value="{{ $Product->price }}"
                    />
                    <span class="input-group-text">.00</span>
                  </div>
                  </div>
                  <div class="row justify-content-end">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

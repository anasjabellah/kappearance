@extends('layouts.layout')
@section('content')

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"id="layout-navbar">
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
                  <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a class="github-button" href="https://github.com/anasjabellah/k-appearance.git" data-icon="octicon-star" data-size="large"  data-show-count="true" aria-label="Star anasjabellah/k-appearance.git on GitHub">Star</a>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('backEnd/assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ asset('backEnd/assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
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




          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Form /</span> Setting</h4>

        
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-header"> General Settings </h5>
      </div>
         <!-- Basic Layout -->
         <div class="col-xxl">
            <div class="card p-5">
              <div class="card-header d-flex align-items-center justify-content-between">
              
            </div>
              <div class="card-body">

                @if(session('status'))
                  <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                  </div>
                @endif

                <form action="{{ route('Setting.store') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                    <div class="row mb-3">
                        <label  class="col-sm-2 col-form-label mb-3"  for="basic-default-company" >{{ $setting }}</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" name="logo" value="{{ $setting->logo }}"/>
                        </div> 
                    </div> 


                   <!-- <div class="row mb-3">
                        <label class="col-sm-2 col-form-label mb-3" for="basic-default-company">Favicon</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" name="favicon" />
                        </div> 
                    </div>-->
                    
                    <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name" >Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" placeholder="Enter a Name " name="name" value="{{ $setting->name }}" />
                                    </div>
                                      @error('name')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                      @enderror
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" placeholder="Enter an Address " name="address" value="{{ $setting->address }}" />
                                    </div>
                                      @error('address')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                      @enderror
                                </div>

                                <div class="row mb-3 ">
                        <label for="html5-tel-input" class="col-md-2 col-form-label" value="{{ $setting->phone }}">Phone</label>
                        <div class="col-md-10">
                          <input class="form-control" type="tel" placeholder="Enter Phone Number " id="html5-tel-input" />
                        </div>
                        @error('phone')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                         @enderror
                      </div>

                      
                      <div class="mb-3 row">
                        <label for="html5-email-input" class="col-md-2 col-form-label"value="{{ $setting->email }}">Email</label>
                        <div class="col-md-10">
                          <input class="form-control" type="email" placeholder="Enter an Email "id="html5-email-input" />
                        </div>
                        @error('email')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                      @enderror
                      </div>

                      <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name"value="{{ $setting->description }}">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" placeholder="Enter a Description " name="description" />
                                    </div>
                                      @error('description')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                      @enderror
                                </div>


                      <div class="mb-3 row">
                        <label for="html5-url-input" class="col-md-2 col-form-label"value="{{ $setting->facebook }}">URL Facebook</label>
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="url" id="html5-url-input"  placeholder="Enter a link " />
                        </div>
                        @error('facebook')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                      @enderror
                        </div>


                        <div class="mb-3 row">
                        <label for="html5-url-input" class="col-md-2 col-form-label" value="{{ $setting->twitter }}">URL Twitter</label>
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="url"  id="html5-url-input"  placeholder="Enter a link " />
                        </div>
                        @error('twitter')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                      @enderror
                        </div>

                        <div class="mb-3 row">
                        <label for="html5-url-input" class="col-md-2 col-form-label"value="{{ $setting->instagram }}">URL Instagram</label>
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="url"
                       id="html5-url-input"  placeholder="Enter a link " />
                        </div>
                        @error('instagram')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                      @enderror
                        </div>

                        <div class="mb-3 row">
                        <label for="html5-url-input" class="col-md-2 col-form-label"value="{{ $setting->youtube }}">URL Youtube</label>
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="url"
                           id="html5-url-input"  placeholder="Enter a link " />
                        </div>
                        @error('youtube')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                      @enderror
                        </div>
                        

                        <div class="row justify-content-end">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
          </form>
         
        </div>


@endsection

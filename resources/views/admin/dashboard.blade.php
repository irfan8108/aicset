@extends('layouts.admin')

@section('content')
  <div class="page-wrapper">
    <div class="page-content">
      <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
        <div class="col">
          <div class="card radius-10 overflow-hidden">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <p class="mb-0">Total Forms</p>
                  <h5 class="mb-0">867</h5>
                </div>
                <div class="ms-auto"> <i class='bx bx-box font-30'></i>
                </div>
              </div>
            </div>
            <div class="" id="chart1"></div>
          </div>
        </div>
        <div class="col">
          <div class="card radius-10 overflow-hidden">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <p class="mb-0">Applicant Fee</p>
                  <h5 class="mb-0">₹52,945</h5>
                </div>
                <div class="ms-auto"> <i class='bx bx-wallet font-30'></i>
                </div>
              </div>
            </div>
            <div class="" id="chart2"></div>
          </div>
        </div>
      </div><!--end row-->

     {{--   <div class="row">
       <div class="col-12 col-xl-4 d-flex">
        <div class="card radius-10 w-100 overflow-hidden">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div>
                <h5 class="mb-0">Stock In-Sort</h5>
              </div>
              <!-- <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
              </div> -->
            </div>
          </div>

          <div class="store-metrics p-3 mb-3">
            
                      <div class="card mt-3 radius-10 border shadow-none">
              <div class="card-body">
                              <div class="d-flex align-items-center">
                  <div>
                    <p class="mb-0 text-secondary">Product Name 1</p>
                    <h4 class="mb-0">6</h4>
                  </div>
                  <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bx-plus' ></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="card mt-3 radius-10 border shadow-none">
              <div class="card-body">
                              <div class="d-flex align-items-center">
                  <div>
                    <p class="mb-0 text-secondary">Product Name 2</p>
                    <h4 class="mb-0">2</h4>
                  </div>
                  <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bx-plus' ></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="card mt-3 radius-10 border shadow-none">
              <div class="card-body">
                              <div class="d-flex align-items-center">
                  <div>
                    <p class="mb-0 text-secondary">Product Name 3</p>
                    <h4 class="mb-0">0</h4>
                  </div>
                  <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bx-plus' ></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="card mt-3 radius-10 border shadow-none">
              <div class="card-body">
                              <div class="d-flex align-items-center">
                  <div>
                    <p class="mb-0 text-secondary">Product Name 4</p>
                    <h4 class="mb-0">5</h4>
                  </div>
                  <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bx-plus' ></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="card mt-3 radius-10 border shadow-none">
              <div class="card-body">
                              <div class="d-flex align-items-center">
                  <div>
                    <p class="mb-0 text-secondary">Product Name 5</p>
                    <h4 class="mb-0">5</h4>
                  </div>
                  <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bx-plus' ></i>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div> --}}
       </div>

      </div><!--end row-->
    </div>  
  </div>
@endsection
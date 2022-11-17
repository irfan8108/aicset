@extends('layouts.front')

@section('content') 

<div class="container">
  <div class="row">

  {{--   <div class="col-md-4">
      <div class="home_login">

        <h3>Student Login</h3>

        <div class="form-group">
          <label>Email</label>
          <input type="email" placeholder="Enter Email Address" class="form-control">
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" placeholder="Enter Email Address" class="form-control">
        </div>

      </div>
    </div> --}}

    <div class="col-md-12 ">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="{{ asset('uploads/banner1.png') }}">
          <!-- <img src="https://i.ytimg.com/vi/Lb1tm6G7oR8/maxresdefault.jpg"> -->
        </div>
        <div class="item">
          <img src="{{ asset('uploads/banner2.png') }}">
          <!-- <img src="https://www.stangerlaw.com/wp-content/uploads/2022/01/StangerLaw-LLC-Law-Scholarship-Contest-1024x555.jpg"> -->
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>

  </div>
</div>
<section class="container trigger section gutter-horizontal bg-gray gutter-vertical--m gutter-horizontal">
  <div class="customer-logos slider">
    <div class="slide-in-right slide">
      <a href="">
        <img src="{{ asset('images/nceg.png') }}">
      </a>
    </div>
    <div class="slide-in-right slide">
      <a href="">
        <img src="{{ asset('images/web-info-manager.png') }}">
      </a>
    </div>
    <div class="slide-in-right slide">
      <a href="">
        <img src="{{ asset('images/onlineservice_logo.png') }}">
      </a>
    </div>
    <div class="slide-in-right slide">
      <a href="">
        <img src="{{ asset('images/datagov_logo.png') }}">
      </a>
    </div>
    <div class="slide-in-right slide">
      <a href="">
        <img src="{{ asset('images/rti_logo.png') }}">
      </a>
    </div>
    <div class="slide-in-right slide">
      <a href="">
        <img src="{{ asset('images/my_visit.png') }}">
      </a>
    </div>
    <div class="slide-in-right slide">
      <a href="">
        <img src="{{ asset('images/NSP-logo.jpg') }}">
      </a>
    </div>
    <div class="slide-in-right slide">
      <a href="">
        <img src="{{ asset('images/my_gov_logo.png') }}">
      </a>
    </div>
    <div class="slide-in-right slide">
      <a href="">
        <img src="{{ asset('images/indiagov.jpg') }}">
      </a>
    </div>
</section>
{{-- notification --}}
<div class="container">
  <div class="row notifi flex-column-reverse flex-md-row">
    <div class="col-md-3 col-sm-6 order-sm-1 wow fadeInLeft delay-02s">
      <a class="twitter-timeline" data-height="300" href="https://twitter.com/Dir_Education?ref_src=twsrc%5Etfw">Tweets by Dir_Education</a>
    </div>

    <div class="col-md-6 col-sm-6 fadeCenter">  
        <ul class="nav  text-center">
          <li class="active text-center">
          Notifications</li>
        </ul>
        <div class="tab-content right_menu_bar" >
          <div id="tab1" class="tab-pane fade in active scroll">
            <ul class="text-left right-annouce" >
              @foreach($announcements as $announcement)
                <li>
                  <img src="{{ asset('images/new.gif') }}"
                  class="new_item_icon">
                  <div class="link-">{{ $announcement->title }}
                    <a href="#">
                      Read more
                    </a>
                  </div>
                </li>
              @endforeach
              <li class="text-left">
                <a href="#" style="color: #efc33f;">
                  Click here for all the announcements
                </a>
              </li>
            </ul>
          </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-12 ">
     {{--  <div class="vdo">
      <img src="uploads/123.jpg">
      </div> --}}
      <a href="{{ route('register') }}" class="apply-anc" style="text-decoration : none; ">
        <img src="uploads/scholarship.jpg">
        <div class="apply text-center mrgn_btm_zero animnew1">
          <span>
            Register Today
          </span>
          <p style="margin: 0px; line-height: 10px;">
            <small style="font-size: 12px;">
              Click Here to Apply Now  
            </small>
          </p>
        </div>
      </a>
    </div>

  </div>  
</div>    
{{-- end notification --}}
@endsection

@push('scripts')

@endpush
<section class="top_navbar scrolled_header">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ asset('images/logo.png') }}" width="111px">
        </a>
      </div>
      <div class="navbar-collapse collapse navbar-right main-nav" id="navbar">
        <ul class="nav navbar-nav ">
            @foreach($links as $link)
                <li><a href="{{ route('page', $link->slug) }}">{{ $link->title }}</a></li>
            @endforeach
        </ul>
        @if(Auth::check())
          
          <label class="dropdown">

            <div class="dd-button">
              Hello {{ Auth::user()->name }}
            </div>

            <input type="checkbox" class="dd-input" id="test">

            <ul class="dd-menu">
              <li><a href="{{ route('dashboard') }}">My Account</a></li>
              <li>Change Password</li>
              <li class="divider"></li>
              <li>
                <a href="javascript:void(0)" onclick="document.getElementById('logout_form').submit()">Logout</a>
                <form id="logout_form" action="{{ route('logout') }}" method="post" class="navbar-form navbar-right">
                  @csrf
                </form>
              </li>
            </ul>
            
          </label>
        @else
          <form action="{{ route('login') }}" method="get" class="navbar-form navbar-right">            
            <button type="submit" class="btn btn-warning">Student Login</button>
          </form>         
        @endif  
        <div class="bottom-arrow"></div>
      </div><!--/.navbar-collapse -->
    </div>
  </nav>
</section>

<div class="container scrolled_header">
  <div class="jumbotron logo_title">
    <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/National_emblem_of_Bangladesh.svg/1200px-National_emblem_of_Bangladesh.svg.png" width="110px"> -->
    <h3 class="logo_title"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><b>All India Combined Scholarship Entrance Test</b>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;अखिल भारतीय संयुक्त छात्रवृत्ति प्रवेश परीक्षा</h3>
    @if(Auth::user())    
      <a href="{{ route('dashboard') }}" class="btn btn-primary btn-apply">Apply For Scholarship</a>
    @else 
      <a href="{{ route('register') }}" class="btn btn-primary btn-apply">Register For Scholarship</a> 
    @endif  
  </div>
</div>

<div class="container marquee_container scrolled_header">
    <marquee class="blink" behavior="alternate" direction="left" class="marqueestyle" onmouseover="this.stop();" onmouseout="this.start();">
        <span class="marqueetext">
            <img src="{{ asset('images/new.gif') }}" class="new_item_icon">
            Application for session 2022-2023 will starting from 18th of Nov, 2022 <a href="{{ route('register') }}">Register Now</a><img src="{{ asset('images/new.gif') }}" class="new_item_icon"></span>
    </marquee>
    <!-- <p class="microsoft marquee">
        {{--@foreach($announcements as $announcement)
                            {{ ucfirst(strtolower($announcement->title)) }}
                        @endforeach--}}
        Application for session 2022-2023 will starting from 18th of Nov, 2022 <a href="{{ route('register') }}">Register Now</a>
        &nbsp;&nbsp;<span style="color: #ccc">|</span>&nbsp;&nbsp;
        Application for session 2022-2023 will starting from 18th of Nov, 2022 <a href="{{ route('register') }}">Register Now</a>
    </p> -->
</div>
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
          <li id="sub-3"><a href="{{ route('detail') }}">Scholarship Scheme</a></li>
          <!-- <li id="sub-2"><a href="{{ route('eligibility') }}">Eligibility Criteria</a></li> -->
          <li id="sub-2"><a href="#features">Affiliations</a></li>
          <li id="sub-4"><a href="{{ route('about') }}">About</a></li>
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
  <p class="microsoft marquee">Windows 8 and Windows RT are focused on your life—your friends and family, your apps, and your stuff. With new things like the <a href="#">Start screen</a>, <a href="#">charms</a>, and a <a href="#">Microsoft account</a>, you can spend less time searching and more time doing.</p>
</div>
@extends('welcome')

@section('content') 

{{-- left-sidebar --}}
<div class="container">
  <div class="row" style="margin: 10px 0px 50px 0px;">
    <div class="col-md-3 col-sm-push-9">
      <nav-left class='animated bounceInDown'>
        <ul>
          <li><a href='#profile'>Application Procedure</a></li>
          <li><a href='#profile'>Admission Procedure</a></li>
          <li><a href='#profile'>Scolarship</a></li>
          <li><a href='#message'>Messages</a></li>
          <li class='sub-menu'><a href='#settings'>Settings<div class='fa fa-caret-down right'></div></a>
            <ul>
              <li><a href='#settings'>Account</a></li>
              <li><a href='#settings'>Profile</a></li>
              <li><a href='#settings'>Secruity &amp; Privacy</a></li>
              <li><a href='#settings'>Password</a></li>
              <li><a href='#settings'>Notification</a></li>
            </ul>
          </li>
          <li class='sub-menu'><a href='#message'>Help<div class='fa fa-caret-down right'></div></a>
            <ul>
              <li><a href='#settings'>FAQ's</a></li>
              <li><a href='#settings'>Submit a Ticket</a></li>
              <li><a href='#settings'>Network Status</a></li>
            </ul>
          </li>
          <li><a href='#message'>FAQ's</a></li>
        </ul>
      </nav-left>
    </div>
    <div class="col-md-9 col-sm-pull-3 about-detail">
      <h3>About Scholarship Entrance Test</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <div class="apply-btn">
          <a href="{{ route('dashboard') }}">CLICK HERE TO APPLY</a>
      </div>    
    </div>

  </div>    
</div>

@endsection

@push('scripts')

<script type="text/javascript">
  $(".toggle").on("click", function () {
    $(".marquee").toggleClass("microsoft");
  });


  $('.sub-menu ul').hide();
    $(".sub-menu a").click(function () {
      $(this).parent(".sub-menu").children("ul").slideToggle("100");
      $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
    });
</script>

@endpush
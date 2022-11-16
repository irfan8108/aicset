@extends('layouts.front')

@section('content') 

{{-- left-sidebar --}}
<div class="container">
  <div class="row" style="margin: 10px 0px 50px 0px;">
    <div class="col-sm-2">
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
    <div class="col-sm-10 about-detail">
      <h3>Scholarship Scheme</h3>
      <p>This scholarship scheme is applicable to the qualified candidates of AICSET – 2023.</p>

        <table class="table table-bordered">
          <tr>
            <th class="head">Total Number of Scholarship</th>
            <th class="head">College Type</th>
            <th class="head">Admission condition</th>
            <th class="head">AICSET Ranks required</th>
            <th class="head">Scholarship Details</th>
          </tr>
          <tr>
            <td rowspan="3">1000</td>
            <td rowspan="3">IITs | NITs | IIITs | CFTIs</td>
            <td rowspan="3">Candidate must have taken admission through CSAB counselling using their JEE score</td>
            <td>1-200</td>
            <td>full tuition fees of 1st Year</td>
          </tr>
          <tr>
            <td>201-500</td>
            <td>full tuition fees of 1st semester</td>
          </tr>
          <tr>
            <td>501-1000</td>
            <td>Study Material (worth Rs. 10000)</td>
          </tr>

          <tr>
            <td rowspan="3">1000</td>
            <td rowspan="3">Medical Colleges (MBBS | BDS | BAMS | BHMS | B.V.Sc)</td>
            <td rowspan="3">Candidate must have taken admission through NEET counselling using their NEET score</td>
            <td>1-200</td>
            <td>full tuition fees of 1st Year</td>
          </tr>
          <tr>
            <td>201-500</td>
            <td>full tuition fees of 1st semester</td>
          </tr>
          <tr>
            <td>501-1000</td>
            <td>Study Material (worth Rs. 10000)</td>
          </tr>

          <tr>
            <td rowspan="3">5000</td>
            <td rowspan="3">AICSET associating colleges (B.E/B.Tech, Allied health science, Pharmacy)</td>
            <td rowspan="3">Candidate must have taken admission through AICSET admission allocation system using their AICSET score</td>
            <td>1-1000</td>
            <td>full tuition fees of 1st Year</td>
          </tr>
          <tr>
            <td>1001-2000</td>
            <td>full tuition fees of 1st semester</td>
          </tr>
          <tr>
            <td>2001-5000</td>
            <td>Study Material (worth Rs. 10000)</td>
          </tr>
        </table> 
        <h4>Kindly note the followings</h4> 
        <ol>
          <li>Scholarships would be distributed after finalization of the admission process and when classes of these courses would be started and as per the rank of AICSET-2023.</li>
          <li>This would be valid for 2023-24 admission session only</li>
          <li>If any candidate is found misleading us with fake and wrong information, will be debarred from the scholarship, and his/her candidature will be canceled.</li>
        </ol>
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
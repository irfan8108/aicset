@extends('welcome')

@section('content') 

{{-- left-sidebar --}}
<div class="container">
  <div class="row" style="margin: 10px 0px 50px 0px;">
    <div class="col-sm-2 ">
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
    <div class=" col-sm-10 about-detail">
      <h4>Age Limit</h4>

      <p>Candidates who wish to apply for AICSET 2023 must be born on or after July 1, 2001. Those applicants who would like to apply for scholarship for medical courses, Applicants must be 17 years old as of December 31, 2022. Also, the authorities will only consider the date of birth mentioned in the Class 10th/ SSC/ High School certificate.</p>

      <h4>List of Qualifying Examinations (QE)</h4>
      <ol>
        <li>The final examination of the 10+2 system, conducted by any recognized Central/ State Board, such as Central Board of Secondary Education, New Delhi; Council for the Indian School Certificate Examinations, New Delhi; etc.</li>

        <li>Intermediate or two-year Pre-University examination conducted by a recognized Board/University.</li>
        <li>Senior Secondary School Examination conducted by the National Institute of Open Schooling with a minimum of five subjects.</li>

        <li>A Diploma recognized by AICTE or a State board of technical education of at least 3 years duration.</li>
      </ol>
     
      <h4>Year of Appearance in Qualifying Examination</h4>

      <p>Those candidates who have passed the Class 12/equivalent examination or those who are appearing in Class 12/equivalent examination in 2023, are eligible to appear in AICSET – 2023.</p>

      <h4>State of Eligibility</h4>
      <p>State code of eligibility means the code of the State from where the candidate has passed Class XII (or equivalent) qualifying examination by virtue of which the candidate becomes eligible to appear in AICSET 2023.</p>

      <p>It is important to note that the State code of eligibility does NOT depend upon the native place or the place of residence of the candidate.Candidate passed/appearing for Class 12 from NIOS should select the State of Eligibility according to the State in which the study Centre is located.</p>
      {{-- <div class="apply-btn">
          <a href="{{ rute('dashboard') }}">CLICK HERE TO APPLY</a>
      </div>  --}}   
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
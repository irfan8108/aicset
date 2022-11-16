<div class="container govt_initiatives">

  <div class="row text-center">
    <div class="col-sm-2">
      <img class="img-responsive" src="https://www.aieeseprimary.co.in/webassets/images/logo2/msme.png">
    </div>
    <div class="col-sm-2">
      <img class="img-responsive" src="https://www.aieeseprimary.co.in/webassets/images/logo2/swatch%20bharat.png">
    </div>
    <div class="col-sm-2">
      <img class="img-responsive" src="https://www.aieeseprimary.co.in/webassets/images/logo2/skill%20india.png">
    </div>
    <div class="col-sm-2">
      <img class="img-responsive" src="https://www.aieeseprimary.co.in/webassets/images/logo2/digital%20india.png">
    </div>
    <div class="col-sm-2">
      <img class="img-responsive" src="https://www.aieeseprimary.co.in/webassets/images/logo2/make%20in%20india.png">
    </div>
    <div class="col-sm-2">
      <img class="img-responsive" src="https://www.aieeseprimary.co.in/webassets/images/logo2/skill%20india.png">
    </div>
  </div>

</div>

<footer id="footer" class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="copyright">
          <ul class="footer-privacy-link">
            <li><a href="#">Refund & Cancellation</a><span>|</span></li>
            <li><a href="#">Terms & Conditions</a><span>|</span></li>
            <li><a href="#">Privacy Policy</a><span>|</span></li>
            <li><a href="#">Sponsors</a><span>|</span></li><li>
            <li><a href="#">Online Fee Payment</a><span>|</span></li><li>
            <li><a href="#">About Us</a><span>|</span></li><li>
            <li><a href="#">Contact</a></li><li>
          </ul>
          <p class="copyrightText">
            All India Combined Scholarship Entrance Test. 
          </p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="copyright text-right rightCopywrite">
          <p class="mb-10">
            <span id="ContentPlaceHolder1_UserCMSFooter1_UserPageLastUpdateDate1_lblPageLastUpdateDate">
              Copyright © 2022
              <strong>
                All Rights Reserved.
              </strong>
            </span>
          </p>
          <p class="mb-10 displayNone">
            Website last updated on: 19-10-2022
          </p>
            <p class="displayNone">
              <img class="img-responsive" src="{{ asset('uploads/skill.png') }}">
              <img class="img-responsive" src="{{ asset('uploads/pngegg.png') }}">
            </p>
        </div>
      </div>
    </div>
  </div>
 {{--  <a href="#" id="backtotop" title="On click go to Top" class="active" style="display: block;">
    <i class="fa fa-angle-up">
    </i>
    Top
  </a> --}}
</footer>

@stack('scripts')

<script type="text/javascript">
  $(".toggle").on("click", function () {
    $(".marquee").toggleClass("microsoft");
  });
</script>

<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script type="text/javascript">
  
  $(document).ready(function(){
    $('.customer-logos').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1500,
    arrows: true,
    dots: false,
    pauseOnHover: false,
    prevArrow: '<i class="slick-prev fas fa-angle-left"></i>',
    nextArrow: '<i class="slick-next fas fa-angle-right"></i>',
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 2
      }
    }]
    });
  });

</script>
{{-- <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script> --}}
  <!--plugins-->
  {{-- <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script> --}}
 {{--  <script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script> --}}
  {{-- <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script> --}}

{{-- <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
</script>
<script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous">
</script>
<script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous">
</script> --}}

<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>

</body>
</html>
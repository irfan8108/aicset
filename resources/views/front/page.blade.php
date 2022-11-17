@extends('layouts.front')

@section('content') 

<div class="container">
  <div class="row" style="margin: 10px 0px 50px 0px;">
    

    <div class="col-md-3">
      <div id="accordian">
        <ul class="show-dropdown">

            @foreach($links['header'] as $link)
            <li>
                <a href="{{ $link->child->isEmpty() ? route('page', $link['slug']) : '#' }}">{{ $link['title'] }}</a>
                @if(!$link->child->isEmpty())
                <ul class="child_links">
                    @foreach($link->child as $child_link)
                        <li><a href="{{ route('page', $child_link->slug) }}">{{ $child_link->title }}</a></li>
                    @endforeach
                </ul>
                @endif

            </li>
            @endforeach

            @foreach($links['sidebar'] as $link)
            <li>
                <a href="{{ $link->child->isEmpty() ? route('page', $link['slug']) : '#' }}">{{ $link['title'] }}</a>
                @if(!$link->child->isEmpty())
                <ul class="child_links">
                    @foreach($link->child as $child_link)
                        <li><a href="{{ route('page', $child_link->slug) }}">{{ $child_link->title }}</a></li>
                    @endforeach
                </ul>
                @endif

            </li>
            @endforeach

            <!-- <li>
                <a href="javascript:void(0);">Scholarship Scheme</a>
                <ul>
                    <li><a href="javascript:void(0);">Scholarship Layout</a></li>
                    <li><a href="javascript:void(0);">Scholarship Structure</a></li>
                    <li><a href="javascript:void(0);">Get In Touch With Us</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);">Eligibility Criteria</a>
            </li>

            <li>
                <a href="javascript:void(0);">Affiliation</a>
            </li>

            <li>
                <a href="javascript:void(0);">Scholarship Structure</a>
            </li> -->
            
            <!-- <li class="active">
                <a href="javascript:void(0);"><i class="far fa-clone"></i>Components</a>
                <ul class="show-dropdown">
                    <li><a href="javascript:void(0);">Today's tasks</a></li>
                    <li class="active">
                        <a href="javascript:void(0);">DrillDown (active)</a>
                        <ul class="show-dropdown">
                            <li><a href="javascript:void(0);">Today's tasks</a></li>
                            <li class="active"><a href="javascript:void(0);">Urgent</a></li>
                            <li>
                                <a href="javascript:void(0);">Overdues</a>
                                <ul>
                                    <li><a href="javascript:void(0);">Today's tasks</a></li>
                                    <li><a href="javascript:void(0);">Urgent</a></li>
                                    <li><a href="javascript:void(0);">Overdues</a></li>
                                    <li><a href="javascript:void(0);">Recurring</a></li>
                                    <li>
                                        <a href="javascript:void(0);">Calendar</a>
                                        <ul>
                                            <li><a href="javascript:void(0);">Current Month</a></li>
                                            <li><a href="javascript:void(0);">Current Week</a></li>
                                            <li><a href="javascript:void(0);">Previous Month</a></li>
                                            <li><a href="javascript:void(0);">Previous Week</a></li>
                                            <li><a href="javascript:void(0);">Next Month</a></li>
                                            <li><a href="javascript:void(0);">Next Week</a></li>
                                            <li><a href="javascript:void(0);">Team Calendar</a></li>
                                            <li><a href="javascript:void(0);">Private Calendar</a></li>
                                            <li><a href="javascript:void(0);">Settings</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);">Recurring</a></li>
                            <li><a href="javascript:void(0);">Settings</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Overdues</a>
                        <ul>
                            <li><a href="javascript:void(0);">Today's tasks</a></li>
                            <li><a href="javascript:void(0);">Urgent</a></li>
                            <li><a href="javascript:void(0);">Overdues</a></li>
                            <li><a href="javascript:void(0);">Recurring</a></li>
                            <li><a href="javascript:void(0);">Settings</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);">Recurring</a></li>
                    <li><a href="javascript:void(0);">Settings</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
                <ul>
                    <li><a href="javascript:void(0);">Current Month</a></li>
                    <li><a href="javascript:void(0);">Current Week</a></li>
                    <li><a href="javascript:void(0);">Previous Month</a></li>
                    <li><a href="javascript:void(0);">Previous Week</a></li>
                    <li><a href="javascript:void(0);">Next Month</a></li>
                    <li><a href="javascript:void(0);">Next Week</a></li>
                    <li><a href="javascript:void(0);">Team Calendar</a></li>
                    <li><a href="javascript:void(0);">Private Calendar</a></li>
                    <li><a href="javascript:void(0);">Settings</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
                <ul>
                    <li><a href="javascript:void(0);">Global favs</a></li>
                    <li><a href="javascript:void(0);">My favs</a></li>
                    <li><a href="javascript:void(0);">Team favs</a></li>
                    <li><a href="javascript:void(0);">Settings</a></li>
                </ul>
            </li> -->

        </ul>
    </div>
    </div>

    
    <div class=" col-md-9 about-detail">
        <h3>{{ $page->content ? $page->content->title : ucwords($slug) }}</h3>

        @if($page->content)
            {!! htmlspecialchars_decode($page->content->long_description) !!}
        @else
            Not found..
        @endif


      {{-- <div class="apply-btn">
          <a href="{{ route('dashboard') }}">CLICK HERE TO APPLY</a>
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

<script type="text/javascript">
    // ADMIN SIDEBAR NAV SELECTION
    $('#accordian .show-dropdown').find('li').each(function(){
        link = $(this).find('a');
        current_page = window.location.href;
        
        if(current_page == $(link).attr('href')){
            $(link).parent('li').addClass('active');

            closestUl = $(link).closest('ul');
            if($(closestUl).hasClass('child_links')){
                $(closestUl).addClass('show-dropdown');
                parentLi = $(closestUl).parent('li');
                $(parentLi).addClass('active')
                // $(parentLi).find('>a').addClass('active')
            }

            return false;
        }
    });
</script>

@endpush
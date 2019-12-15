@extends('layouts.front.app')
@include('layouts.front.drop.style')

@section('content')

<header id="fh5co-header" class="fh5co-cover" role="banner"
        style="background-image:url(./images/3.jpeg);height:380px">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="display-t">
                        <div class="display-tc " >
                            <h1 class="mb30" style="padding-bottom: 98px;">
                            OHL Materials
                        
                        </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="content-section" style="padding-top:30px">>
 
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">

            @include('layouts.front.sidebar')
          
            </div>
            <div class="col-md-9 col-sm-12">
                <h3><span class="red">ULT</span><span class="blue">POWER</span> supplies all Overhead Line materials as follows :</h3>
          <ol>
          <li>  Cross Arms with accessories </li>
          <li>Tie strap Steel </li>
          <li>Machine & Eye Bolts </li>
          <li>Parallel Connectors </li>
          <li> AAAC & ACSR Conductors </li>
          
          </ol>

          <div class="swiper-container" style="padding:100px 0px">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('images/ohlmaterial/ACCC.jpg')}}" 
                                    alt="substation works">
                            </div>
                            <div class="swiper-slide"> 
                            <img src="{{asset('images/ohlmaterial/ASCR.jpg')}}"
                                     alt="substation works">
                            </div>
                            <div class="swiper-slide">
                            <img src="{{asset('images/ohlmaterial/D_bracket.jpg')}}" alt="substation works">

                            </div>

                            <div class="swiper-slide">
                            <img src="{{asset('images/ohlmaterial/parallel_connector.jpg')}}" alt="substation works">

                            </div>
                            
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Pagination -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

              



            </div>
        </div>
    </div>

    </section>



@endsection
@extends('layouts.front.app')
@section('css')
<style>
    .swiper-container .swiper-slide {
        height: 300px;
        text-align: center;
        line-height: 300px;
    }

    .swiper-container .swiper-slide:nth-child(2n) {
        height: 500px;
        line-height: 500px;
    }

</style>

@endsection
@section('content')




<header id="fh5co-header" class="fh5co-cover" role="banner"
        style="background-image:url(./images/3.jpeg);height:380px">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="display-t">
                        <div class="display-tc " >
                        <h1 style="margin-bottom: 180px;">
                            
                            
                            Fiber Optic Products</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="content-section" style="padding-top:30px">
 
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12" style="padding:12px 0px">

            @include('layouts.front.sidebar')
          
            </div>
            <div class="col-md-9 col-sm-12 sidebar-category " style="padding:20px 0px 80px 0px;">
                <h3>Supplying and installing all fiber optic system devices and materials </h3>
                <ul>
                    <li>(OPUG) Underground Fiber Optic Cables (2 - 48 ) hair .</li>
                    <li>SDH Optical Transmission System (Multiplixer SDH).</li>
                    <li>Optical MDF (Terminal Box Complete With All Accessories) .</li>
                    <li>All other devices and materials required for fiber optic systems used in controlling electrical plants and communications as well.</li>
                    <li>Maintenance Tools for Fiber Optic System.</li>
                    <li>Underground Buried PVC Pipe .</li>
                </ul>
                <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                            
                            <img src="{{asset('images/fiber/fiber-optic-ieee-c37.94-g.703-e1-multiplexer-133.jpg')}}" class="img-responsive" alt="fiber-optical">
                            </div>
                            <div class="swiper-slide">  <img src="{{asset('images/fiber/fibre-optic-cables-connected-8016b3.jpg')}}" class="img-responsive" alt="fiber-optical">
                            </div>
                            <div class="swiper-slide">
                            <img src="{{asset('images/fiber/corning_fiber_optic_cable_outdoor.jpg')}}" class="img-responsive" alt="fiber-optical">
                            
                            </div>
                           
                        </div> <!--end slider swiper -->
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Pagination -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div> <!--slider container --> 
            </div>
        </div>
    </div>

    </section>



@endsection


@section('js')

<script>
    var swiper = new Swiper('.swiper-container', {
        autoHeight: true, //enable auto height
        spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

</script>
@endsection

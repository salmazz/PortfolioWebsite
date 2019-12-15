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
                        <div class="display-tc display-tc-drop">
                        <h1 style="margin-bottom: 180px;">
                            Power Supply
                        
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
                <h3>Power Emergency Gensets :</h3>
                <p>(1500rpm), (10KVA- 2,500KVA)Open, Containerized and Mobile Types , provided with ATS , synchronizing panels and other accessories .</p>

                <h3>Power Base Load Gensets : </h3>
                <p>
                (1,000KW-15MW),One Unit Genset (750 rpm) , economic in fuel and spare parts consumption .
                </p>
                <h3>Renewable Energy :  </h3>
          <p>
          We supply and install : 

Solar  Power Generator , street Lighting posts , Solar Water Pumps & Solar Water Heater .

 
          </p>
          <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                            
                            <img src="{{asset('images/powersupply/Solar_Water_Pump.jpg')}}" style="margin:0px 200px" class="img-responsive" alt="fiber-optical">
                            </div>
                            <div class="swiper-slide"> 
                             <img src="{{asset('images/powersupply/DSC01008.jpg')}}" style="margin:0px 200px" class="img-responsive" alt="fiber-optical">
                            </div>
                            <div class="swiper-slide">
                            <img src="{{asset('images/powersupply/genset_2.jpg')}}" style="margin:0px 200px" class="img-responsive" alt="fiber-optical">
                            
                            </div>
                            <div class="swiper-slide">
                            <img src="{{asset('images/powersupply/power-supply.jpg')}}" style="margin: 54px 150px;" class="img-responsive" alt="fiber-optical">
                            
                            </div>
                            <div class="swiper-slide">
                            <img src="{{asset('images/powersupply/Home_-Solar-Panel.jpg')}}" style="margin:0px 200px" class="img-responsive" alt="fiber-optical">
                            
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

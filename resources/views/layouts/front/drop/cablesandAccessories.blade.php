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
                            Cables and Accessories
                        
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
            <h3>
             <span class="red">ULT</span><span class="blue">POWER</span>
              supplies all Back up System components as follows :
              </h3>
             <ol>
           <li> Low & High Voltage Power Cables </li>
           <li> Underground Armored & Unarmored , XLPE Insulated , PVC Sheathed , Copper & Aluminum Conductor</li>
           <li> ABC Cables .  </li>
           <li> Heatshrinkable Terminations , Joints & Lugs </li>
           <li> Cables Trays </li>

           </ol>

           <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('./images/cables/ABC_Cables.jpg')}}" alt="substation works">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('./images/cables/ct_cabletray1.jpg')}}" alt="substation works">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('./images/cables/end-termination-kit.jpg')}}" alt="substation works">

                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('./images/cables/HT-CABLE.jpg')}}" alt="substation works">

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
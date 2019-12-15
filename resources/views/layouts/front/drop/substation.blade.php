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

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(./images/3.jpeg);height:380px">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-center">
                <div class="display-t">
                    <div class="display-tc ">
                    <h1 style="margin-bottom: 180px;">
                            Substations Components
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="content-section" style="padding-top:30px">

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12" style="padding-top:12px;">

                @include('layouts.front.sidebar')

            </div>
            <div class="col-md-9 col-sm-12" style="padding:20px 0px 80px 0px;">
              <h3><span class="red">ULT</span><span class="blue">POWER</span> supplies all substation components as follows :</h3>
              <ol>
                  <li>Power Transformers (Oil Immersed), From 5MVA - 200MVA , up to 400 KV</li>
                  <li>Insulation Oil for Transformers & Switchgears</li>
                  <li>High Voltage Circuit Breaker & Disconnector up to 400 KV</li>
                  <li> Cast Resin Transformers Type up to 8MVA for commercial and industrial complexes </li>
                  <li> Low, Medium & High Voltage Power Switchgears (VCB & SF6)</li>
                  <li>Distribution Boards with ACB, MCCB From 10A - 4,000A(1KV, 12KV, 36KV) </li>
                  <li> Ring Main Units (Oil & SF6) with ( Fuse , LBS & C.B ) </li>
                  <li> Auto Re-Closer 11KV, 33KV (VCB & SF6) </li>
                  <li> Instrumentation Transformers C.T's , V.T's </li>
                  <li> Capacitors Banks & Static VAR Compensation ( SVC ) </li>
                  <li> Batteries (Ni-Cd and Lead Acid) and Battery Chargers</li>
</ol>

                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('./images/categoryone/current_transformer.jpg')}}" 
                                   alt="substation works">
                            </div>
                            <div class="swiper-slide"> 
                            <img src="{{asset('./images/categoryone/Nynas_drum.jpg')}}"
                             alt="substation works">
                            </div>
                            <div class="swiper-slide">
                            <img src="{{asset('./images/categoryone/subst_1.jpg')}}"  alt="substation works">

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

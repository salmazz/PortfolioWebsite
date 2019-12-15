@extends('layouts.front.app')
@include('layouts.front.drop.style')
@section('content')

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(./images/3.jpeg);height:380px">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-center">
                <div class="display-t">
                    <div class="display-tc">
                        <h1 class="mb30" style="padding-bottom: 160px;">
                            Substations Protection <br> Devices

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
            <div class="col-md-3 col-sm-12" style="padding:12px 0px;">

                @include('layouts.front.sidebar')

            </div>
            <div class="col-md-9 col-sm-12" style="padding:20px 0px 80px 0px;">
                <h3> <span class="red">ULT</span><span class="blue">POWER</span> supplies all substation protection devices as follows : </h3>
                <ol>

                    <li> 11 - 33 KV Surge Arresters . </li>
                    <li>11 - 33 KV Cutout Fuses .

                    </li>
                    <li>11 - 33 KV Disconnect Switches .

                    </li>
                    <li>11 - 33 KV Disc & Post Insulators .

                    </li>
                    <li>11 - 33 KV Composite Line Insulators .

                    </li>

                </ol>

                <div class="swiper-container" style="padding:100px 0px">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('images/protectiondevice/Polymer_Housed_Fuse_Cutout.jpg')}}" alt="substation works">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('images/protectiondevice/post_insulator.jpg')}}" alt="substation works">
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

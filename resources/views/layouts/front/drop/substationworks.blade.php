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
                            Substations Works
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

                <p class="lead">A substation is a part of an electrical generation, transmission, and distribution system.
                    Substations transform voltage from high to low, or the reverse, or perform any of several other
                    important functions</p>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('./images/categoryone/current_transformer.jpg')}}" alt="substation works">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('./images/categoryone/Nynas_drum.jpg')}}" alt="substation works">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('./images/categoryone/subst_1.jpg')}}" alt="substation works">

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

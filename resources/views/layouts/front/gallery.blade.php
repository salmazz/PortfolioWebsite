@extends('layouts.front.app')


@section('css')
<style>
.swiper-container {
      width: 100%;
      height:400px
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
      border:5px solid #443636;border-radius:5px;
      transition: transform 1s, filter 2s ease-in-out;
  filter: blur(2px);
  transform: scale(1.2);
    }

    /* The Transformation */
.swiper-slide:hover  {
  filter: blur(0);
  transform: scale(1);
}

    </style>

@endsection



<header id="fh5co-header" class="fh5co-cover" role="banner"
        style="background-image:url(./images/3.jpeg);height:380px">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="display-t">
                        <div class="display-tc " >
                        <h1 style="margin-bottom: 180px;">
                            
                            Our Gallery</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


@section('content')

 <!-- Swiper -->

 <section class="gallery">
 <div class="container">
 <div class="row">
 <div class="col-md-12 text-center">
 <h2> Customers visits to our partners <br> (Manufacturers) factories </h2>
 
 <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(./images/visits/2.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/visits/3.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/visits/4.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/visits/5.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/visits/6.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/visits/7.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/visits/8.jpg)"></div>

     
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 
 
 
 
 </div>
 
 
 </div>
 <div class="row">
 <div class="col-md-12 text-center">
 <h2>Our projects in Yemen </h2>
 
 <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(./images/projectyeman/1.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/projectyeman/2.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/projectyeman/3.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/projectyeman/4.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/projectyeman/6.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/projectyeman/7.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/projectyeman/8.jpg);"></div>

     
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
 
 
 
 </div>
 
 
 </div>
 

 


 
 

 </div>
 
 
 </section>


@endsection
@section('js')
<script>

var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 30,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows : true,
      },
    //   pagination: {
    //     el: '.swiper-pagination',
    //   },
    });
</script>

@endsection 
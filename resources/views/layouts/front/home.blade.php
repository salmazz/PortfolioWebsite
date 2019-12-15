@extends('layouts.front.app')


@section('css')

<style>
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

 #particles-js {
	position: absolute;
	width: 100%;
    height: 100%;
   
  }

</style>
@endsection
@section('content')
    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url('./images/backk.jpeg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center" >
                    <div class="display-t">
                        <div class="display-tc animate-box" style="z-index:3444" data-animate-effect="fadeInUp">
                            <h1 class="mb30">Always Up.</h1>
                            <p >
                                <a href="{{route('company.about')}}" target="_blank" class="btn btn-primary">Know
                                    More</a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    </div>
    <div id="particles-js" ></div>



    <div id="fh5co-services" class="fh5co-bg-section">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-8 col-md-offset-2 text-center animate-box" data-animate-effect="fadeInUp">
                    <div class="fh5co-heading">
                        <span>We're expert</span>
                        <h2>Our Core Business</h2>
                        <p class="lead">We are specialized and dedicated in the field of Electrical products and
                            Communication systems to present our best services for our customers in Yemen market.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="feature-center animate-box" data-animate-effect="fadeInUp">
                        <span class="icon">
                            <i class="icon-eye"></i>
                        </span>
                        <h3>Electrical Equipment</h3>
                        <p class="lead">Supply all electrical equipment (L.V , M.V & H.V) control , measuring &
                            protection instruments and devices of the state of the art technology and from wel-known
                            brands in the world.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 ">
                    <div class="feature-center animate-box" data-animate-effect="fadeInUp">
                        <span class="icon">
                            <i class="icon-command"></i>
                        </span>
                        <h3>Experienced Teams</h3>
                        <p class="lead">We have skillful and experienced teams (Engineers & Technicians) or installing
                            and commissioning the electrical equipment (L.V , M.V & H.V ) at sight under worst
                            conditions.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 ">
                    <div class="feature-center animate-box" data-animate-effect="fadeInUp">
                        <span class="icon">
                            <i class="icon-power"></i>
                        </span>
                        <h3>Comprehensive Support</h3>
                        <p class="lead">We provide customers with studies and engineering for any electrical project
                            (Power plant & Substations) with all needful calculations and drawings AUTOCAD.</p>


                    </div>
                </div>
            </div>
        </div>

    <!-- start section picture -->
    <div class="picture picture-first text-center">
        <div class="overlay">
            <div class="container">

            <div class="picture-box">

                <h2>Comprehensive Support</h3>
                    <p class="lead">We provide customers with studies and engineering for any electrical project
                    </p>
                    <p>
                        <a href="{{route('company.about')}}" target="_blank"  class="btn btn-danger btn-lg">Know More</a>

                    </p>

            </div>
            </div>

        </div>
    </div>

    <!-- end section picture-->
    <!--our partners-->
    <div class="partners text-center">

        <div class="row">
            <div class="container">

                <div class="fh5co-heading">
                    <h2>Our Partners</h2>
                    <p class="lead">Suppliers and Manufacturing Companies Deal & Represented by ULTPOWER :

                    </p>
                </div>
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    
                        <div class="swiper-slide">
                            <img src="{{asset('./images/flags/relko.png')}}" style="padding-top:70px" class="img-responsive" alt="relko energy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('./images/flags/man.png')}}" class="img-responsive" alt="relko energy">

                        </div>
                        <div class="swiper-slide">
                        <img src="{{asset('./images/flags/abb.jpg')}}" class="img-responsive" alt="abb saudi arabia">

                        </div>
                        <div class="swiper-slide">"'
                            <img src="{{asset('./images/flags/rsisolsec.jpg')}}" style="padding-top:70px" class="img-responsive" alt="rs isolsec logo">

                        </div>
                     
                        <div class="swiper-slide">
                            <!-- <i class="fa fa-circle italy fa-lg"></i> -->
                         <img src="{{asset('./images/flags/coelme.png')}}"  style="padding-top:70px" class="img-responsive" alt="">
                        </div>
                        <div class="swiper-slide">
                        <img src="{{asset('./images/flags/elsewedy.png')}}"  alt="elsewedy">

                        </div>
                     
                        <div class="swiper-slide">
                        <img src="{{asset('./images/flags/nynas.jpg')}}"  class="img-responsive" alt="giza cables">

                                </div>
                        <div class="swiper-slide">
                            <img src="{{asset('./images/flags/giza.png')}}"  style="padding-top:70px" class="img-responsive" alt="giza cables">

                          
                        </div>
                        <div class="swiper-slide">
                         <img src="{{asset('./images/flags/shneider.jpg')}}"  style="padding-top:70px"  class="img-responsive" alt=" Schneider Electric logo">
                        </div>
                        <div class="swiper-slide">
                        <img src="{{asset('./images/flags/rockwill.jpg')}}"   class="img-responsive" alt=" ROCKWILL Electrico">

                        </div>
                     
                     
                        <div class="swiper-slide">
                        <img src="{{asset('./images/flags/tecnogen.png')}}"  style="padding-top:70px" class="img-responsive" alt="">

                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('./images/flags/pom.jpg')}}"  style="padding-top:90px" class="img-responsive" alt="Pomanique Electric">

                        </div>
                   
                    
                        <div class="swiper-slide">
                  <img src="{{asset('./images/flags/wksolar.png')}}"   style="padding-top:70px" class="img-responsive" alt="WK Solar Power Systems">
                        </div>
                        <div class="swiper-slide">
                        <img src="{{asset('./images/flags/tuolima.jpg')}}"   class="img-responsive" alt=" ROCKWILL Electrico">

                       </div>
                
                    <!-- Add Pagination -->
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- Call to Action Section -->

    <!-- start section picture -->
    <div class="picture picturetwo text-center">
        <div class="overlay">
            <div class="row">
                <div class="col-md-4">
                    <div class="picture-box">
                        <h1><i class="fa fa-users fa-3x"></i></h1>
                        <p class="lead number">{{$tracker}} <i class="fa fa-plus"></i></p>

                        <p>VISTORS </p>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="picture-box">
                        <h1><i class="fa fa-clone fa-3x"></i></h1>
                        <p class="lead number">12 <i class="fa fa-plus"></i></p>

                        <p>SERVICES </p>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="picture-box">
                        <h1><i class="fa fa-certificate fa-3x"></i></h1>
                        <p class="lead number"> 15 <i class="fa fa-plus"></i></p>

                        <p>PARTNERS </p>


                    </div>
                </div>

            </div>


        </div>
    </div>
    <div class="clearfix"></div>

    <!-- end section picture-->

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

</section>
@endsection

@section('js')
<script>
      var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
      }
    });

</script>
<!-- <script src="{{asset('js/particle.js')}}"></script> -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

<script>
    const particlesJSON = {
"particles": {
        "number": {
            "value": 50,
            "density": {
                "enable": true,
                "value_area": 700 //Denser the smaller the number.
            }
        },
        "color": { //The color for every node, not the connecting lines.
            "value": "#01579b" //Or use an array of colors like ["#9b0000", "#001378", "#0b521f"]
        },
        "shape": {
            "type": "circle", // Can show circle, edge (a square), triangle, polygon, star, img, or an array of multiple.
            "stroke": { //The border
                "width": 1,
                "color": "#145ea8"
            },
            "polygon": { //if the shape is a polygon
                "nb_sides": 5
            },
            "image": { //If the shape is an image
                "src": "",
                "width": 100,
                "height": 100
            }
        },
        "opacity": {
            "value": 0.7,
            "random": true
        },
        "size": {
            "value": 10,
            "random": true
        },
        "line_linked": {
            "enable": true,
            "distance": 200, //The radius before a line is added, the lower the number the more lines.
            "color": "#007ecc",
            "opacity": 0.5,
            "width": 2
        },
        "move": {
            "enable": true,
            "speed": 2,
            "direction": "top", //Move them off the canvas, either "none", "top", "right", "bottom", "left", "top-right", "bottom-right" et cetera...
            "random": true,
            "straight": false, //Whether they'll shift left and right while moving.
            "out_mode": "out", //What it'll do when it reaches the end of the canvas, either "out" or "bounce".
            "bounce": false, 
            "attract": { //Make them start to clump together while moving.
                "enable": true,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },
  //Negate the default interactivity
  "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": false,
                "mode": "repulse"
            },
            "onclick": {
                "enable": false,
                "mode": "push"
            },

            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 800,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 800,
                "size": 80,
                "duration": 2,
                "opacity": 0.8,
                "speed": 3
            },
            "repulse": {
                "distance": 400,
                "duration": 0.4
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 6
            }
        }
    },
    "retina_detect": true
}

particlesJS("particles-js", particlesJSON)



</script>
@endsection

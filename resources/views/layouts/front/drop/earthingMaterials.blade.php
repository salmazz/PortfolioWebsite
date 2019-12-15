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
                        <h1 style="margin-bottom: 180px;">
                            Earthing Materials
                        
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
            <h3> <span class="red">ULT</span><span class="blue">POWER</span> supplies all Earthing Materials as follows :</h3>
              <ol>
                 <ol>
                 <li> Copper Bond Earth Rod</li>
                 <li> Threaded ÂÂ Coupling & Driving Heads</li>
                 <li> U Bolt Clamps</li>
                 <li> Ground Clamp Two Cables</li>
                 <li> Rod to Cable Lug Clamp</li>
                 <li> Solid Copper Lattice Mat</li>
                 <li> Earth Bars</li>
                 <li> Split Bolt Connector</li>
                 <li> Exothermic Welding Tool Kit </li>
                 <li> Exothermic Weld metal powder</li>

                 </ol>

                 <div class="swiper-container" style="padding:100px 0px">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('images/etharing/connector.jpg')}}" 
                                    alt="substation works">
                            </div>
                            <div class="swiper-slide"> 
                            <img src="{{asset('images/etharing/copper_bonded_earthing_rods.jpg')}}"
                                     alt="substation works">
                            </div>
                            <div class="swiper-slide">
                            <img src="{{asset('images/etharing/Lattice_mat.jpg')}}" alt="substation works">

                            </div>

                            <div class="swiper-slide">
                            <img src="{{asset('images/etharing/Exothermic-Welding-Powder2.jpg')}}" alt="substation works">

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
    </div>

    </section>



@endsection


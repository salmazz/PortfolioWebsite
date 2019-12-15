@extends('layouts.front.app')

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

            </div>
        </div>
    </div>

    </section>



@endsection
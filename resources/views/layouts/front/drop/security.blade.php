@extends('layouts.front.app')

@section('content')

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(./images/3.jpeg);height:380px">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-center">
                <div class="display-t">
                    <div class="display-tc ">
                        <h1 class="mb30" style="padding-bottom: 98px;">
                        Security System

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
                <h3>Security System Supply :</h3>
                <p>With  <span class="red">ULT</span><span class="blue">POWER</span>, your facility will be more safe as we provide you with the following:</p>
              <ol>
              <li> CCTV Cameras </li>
              <li> Archiving Systems</li>
              <li> Access Control systems</li>
              <li>Finger Print </li>
              <li> ID Cards (Proximity, Magnetic & Smart Cards)</li>
              <li> Security Gates </li>
              
              </ol>
            </div>
        </div>
    </div>

</section>



@endsection

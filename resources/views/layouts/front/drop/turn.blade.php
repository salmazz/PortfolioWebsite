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
                        <h1 style="margin-bottom: 180px;">
                            Turn Key Projects                        
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
                   <h3>Managing and developing Turn-Key Projects</h3>
                   <p class="lead">Power Plants Projects (Diesel and Gas)</p>
                   <img src='{{asset("images/turn-key-projects.jpg")}}' class="img-responsive img-thumbnail" alt="">
            </div>
        </div>
    </div>

    </section>



@endsection
@extends('layouts.front.app')
@section('content')

    <header id="fh5co-header" class="fh5co-cover" role="banner"
        style="background-image:url(./images/3.jpeg);height:380px">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="display-t">
                        <div class="display-tc ">
                        <h1 style="margin-bottom: 180px;">
                            
                            About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <div id="fh5co-about">
        <div class="container">

            <div class="row" style="padding-top:20px;">
                <div class="col-md-6 col-sm-12">

                <div class="desc">
                 <h3 class="head-style">About Us</h3>
                    <p>
                            <span class="red">ULT</span><span class="blue">POWER</span> Co. Ltd, is one of the pioneers
                            companies, a leading professionally
                            managed and Specialized in the field of Power Generation and Distribution
                            Equipments, and materials , Installation and Erecion works located at Sana'a
                            city , the capital of Yemen.

                        </p>
                        <p>
                            <span class="red">ULT</span><span class="blue">POWER</span> Co. Ltd, is registred at the
                            Ministry of Commerce and Industry with
                            a Commercial Registration No. 2011010440, Taxation Card No. 152727,
                            Business Office License No. 523.

                        </p>
                        <p>
                            <span class="red">ULT</span><span class="blue">POWER</span> Co. Ltd, is formed by a group of
                            professional electrical, mechanical
                            & civil engineers and Businessmen who have worked with many companies for
                            their projects in and out of Yemen , and have vast experience in the field of
                            electrical & mechanical equipment supply and electromichanical & civil works.
                        </p>
                        <p>
                            <span class="red">ULT</span><span class="blue">POWER</span> Co. Ltd, has a well trained,
                            experienced, skilled self-motivated team
                            of Mechanical , Electrical & Civil Engineers. Who have the full integrated
                            experiences in install, erect and commissioning of Turn Key Projects (Power
                            Plants and Substations), with high quality manufacturing within shortest
                            period, with high reliability and long-life operating cycle.
                        </p>
                        <!-- <p>
						
						We at <span class="red">ULT</span><span class="blue">POWER</span> Co. Ltd, can do and implement Turn-Key projects ( Power
Plants and Substations ) by the cooperation and under a supervision of the
manufacturers of the plant major components.
Besides , we are able to provid power genera􀆟on & electrical equipments to our
customers under different and difficult condi􀆟ons with high quality and
efficiency.
						</p> -->
                        <!-- <p>
						
						ULTPOWER Co. Ltd, has well known reputa􀆟on as a highly professional and
experienced in electrical power solution working in the field of renewable
energy solutions, power genera􀆟on plants & substations with feasibility
studies, consulting, training & providing integrated solutions for electrical
power generation & renewable energy.
						</p> -->
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <img class="img-responsive img-thumbnail" style="margin-top:40px" src="{{asset('images/about1.jpeg')}}" alt="about">
                    <!-- <img class="img-responsive " src="{{asset('images/about.jpg')}}" alt="about"> -->


                </div>



            </div>
            <div class="row" style="padding-top:20px;">

                <div class="col-md-6 col-sm-12">

                    <img class="img-responsive img-thumbnail" style="margin-top:40px" src='{{asset("images/about2.jpeg")}}' alt="about">

                </div>

                <div class="col-md-6 col-sm-12 team">
                    <div class="desc">
                        <h3 class="head-style">Our Team</h3>
                        <p>
                            <span class="red">ULT</span><span class="blue">POWER</span> Co. Ltd, is managed by dedicated
                            and motivated professional staff.
                            The well experienced and professionally qualified team of Mechanical,
                            Electrical and Civil Engineers take complete care of each service and activity.

                        </p>
                        <p>
                            Our team role with clients starts from the phase of defining their exact need
                            and equipment specifications, and it continues far atier the project completion
                            through a consistent atier-sale service that ensures our customers full
                            satisfaction with the delivered service and therefore, helps customers to
                            achieve the intended results of their own projects.
                        </p>
                    </div>
                </div>

            </div>

            <div class="row" style="padding-top:20px;">
                <div class="col-md-6 col-sm-12">
                    <div class="desc">
                        <h3 class="head-style">Business Fields</h3>
                        <ul>
                            <li> Perform Power Plants & Substations Turn Key Projects. </li>
                            <li>Supply Substations Components</li>
                            <li> Supply Renewable Energy System Components.</li>
                            <li> Supply Fiber Optic Products.</li>
                            <li>Supply Protection and control system devices.</li>
                            <li> Supply Security system Products.</li>
                            <li> Supply Back up System.</li>
                            <li>Supply Overhead line (OHL) Materials.</li>
                            <li>Supply Earthing Materials.</li>
                            <li>Supply Cables and Accessories.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">

                    <img class="img-responsive img-thumbnail" src='{{asset("images/about3.jpeg")}}' alt="about">

                </div>



            </div>
        </div>

    </div>
    </div>

@endsection
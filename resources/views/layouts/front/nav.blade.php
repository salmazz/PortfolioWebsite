


<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div id="fh5co-logo"><a href="index.html">ULT POWER <span>.</span></a></div>
            </div>
            <div class="col-xs-12 text-center menu-1">
                <ul>
                <li class="{{request()->is('/') ? 'active' : ''}}"><a  href="{{url('/')}}">Home</a></li>
                    <li class="has-dropdown {{ request()->is('company/*') ? 'active' : '' }}">
                    
                    <a href="#">Company</a>
                    <ul class="dropdown">


                            <li><a href="{{route('company.about')}}"> <i class="fa fa-angle-right"></i>  About Us</a></li>
                            <li><a href="{{route('company.mission')}}"> <i class="fa fa-angle-right"></i> Mission And Vision</a></li>


                        </ul>
                    
                    
                    </li>

                    <li class="has-dropdown {{request()->is('scope/*') ? 'active' : ''}}">
                        <a href="#">Score OF Business</a>
                        <ul class="dropdown" >
                            <li><a href="{{route('scope.fiber')}}"> <i class="fa fa-angle-right"></i> Fiber Optic Products</a></li>
                            <li><a href="{{route('scope.powersupply')}}"> <i class="fa fa-angle-right"></i> Power Supply</a></li>
                            <li><a href="{{route('scope.substation')}}"> <i class="fa fa-angle-right"></i> Substations Components</a></li>
                            <li><a href="{{route('scope.turnkey')}}"> <i class="fa fa-angle-right"></i> Turn Key Projects</a></li>
                            <li><a href="{{route('scope.substationworks')}}"> <i class="fa fa-angle-right"></i> Substation Works</a></li>
                            <li><a href="{{route('scope.backup')}}"> <i class="fa fa-angle-right"></i> Back up System</a></li>
                            <li><a href="{{route('scope.protectiondevice')}}"> <i class="fa fa-angle-right"></i> Substation Protection Devices</a></li>
                            <li><a href="{{route('scope.Ohlmaterial')}}"> <i class="fa fa-angle-right"></i> OHL Materials</a></li>
                            <li><a href="{{route('scope.EarthingMaterials')}}"> <i class="fa fa-angle-right"></i> Earthing Materials</a></li>
                            <li><a href="{{route('scope.CablesandAccessories')}}"> <i class="fa fa-angle-right"></i> Cables and Accessories</a></li>
                        </ul>
                    </li>

                    <!-- <li><a href="partner.html">Our Partner</a></li> -->
                    <li class="{{request()->is('gallery') ? 'active' : ''}}"><a href="{{route('gallery')}}">Gallery</a></li>
                    <li class="{{request()->is('contact') ? 'active' : ''}}"><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
        
    </div>
</nav>
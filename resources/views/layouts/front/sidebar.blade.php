<ul class="nav nav-pills nav-stacked" style="border:2px solid #ccc;border-radius:5px;">

    <li class="{{ Route::is('scope.fiber') ? 'active' : '' }} "><a href="{{route('scope.fiber')}}">Fiber Optic
            Products</a></li>
    <li class="{{ Route::is('scope.powersupply') ? 'active' : '' }} "><a href="{{route('scope.powersupply')}}">Power
            Supply</a></li>
    <li class="{{ Route::is('scope.substation') ? 'active' : '' }} "><a href="{{route('scope.substation')}}">Substations
            Components</a></li>
    <li class="{{ Route::is('scope.turnkey') ? 'active' : '' }} "><a href="{{route('scope.turnkey')}}">Turn Key
            Projects</a></li>

    <li class="{{ Route::is('scope.substationworks') ? 'active' : '' }} "><a
            href="{{route('scope.substationworks')}}">Substation Works</a></li>
    <li class="{{ Route::is('scope.backup') ? 'active' : '' }} "><a href="{{route('scope.backup')}}">Back up System</a>
    </li>
    <li class="{{ Route::is('scope.protectiondevice') ? 'active' : '' }} "><a
            href="{{route('scope.protectiondevice')}}">Substation Protection Devices</a></li>
    <li class="{{ Route::is('scope.Ohlmaterial') ? 'active' : '' }} "><a href="{{route('scope.Ohlmaterial')}}">OHL
            Materials</a></li>
    <li class="{{ Route::is('scope.EarthingMaterials') ? 'active' : '' }} "><a
            href="{{route('scope.EarthingMaterials')}}">Earthing Materials</a></li>
    <li class="{{ Route::is('scope.CablesandAccessories') ? 'active' : '' }} "><a
            href="{{route('scope.CablesandAccessories')}}">Cables and Accessories</a></li>
    <!-- <li class="{{ Route::is('scope.meteringProtection') ? 'active' : '' }} "><a
            href="{{route('scope.meteringProtection')}}">Metering & protection devices</a></li> -->
</ul>

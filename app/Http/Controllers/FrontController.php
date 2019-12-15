<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('vistors');

     }
    public function index()
    {
        $tracker = \App\Tracker::count();
        return view('layouts.front.home', compact('tracker'));
    }

      public function gallery(){
            return view('layouts.front.gallery');
            
          }

       public function contact(){
        return view('layouts.front.contact'); 
       }
       public function about(){
        return view('layouts.front.about'); 
       }

       public function mission(){
           return view('layouts.front.mission');
       }
       public function fiber(){
         return view('layouts.front.drop.fiber');
       }
       public function power(){
        return view('layouts.front.drop.power');
      }
      public function substation(){
        return view('layouts.front.drop.substation');
      }
      public function turnkey(){
        return view('layouts.front.drop.turn');
      }
      public function security(){
        return view('layouts.front.drop.security');
      }

      public function substationWorks(){
        return view('layouts.front.drop.substationworks');

      }
      public function backup(){
        return view('layouts.front.drop.backup');

      }
      public function protectionDevice(){
        return view('layouts.front.drop.protectiondevice');

      }
      public function Ohlmaterial(){
        return view('layouts.front.drop.Ohlmaterial');

      }
      public function EarthingMaterials(){
        return view('layouts.front.drop.earthingMaterials');

      }
      public function CablesandAccessories(){
        return view('layouts.front.drop.cablesandAccessories');

      }
      public function meteringProtection(){
        return view('layouts.front.drop.meteringProtection');

      }



}

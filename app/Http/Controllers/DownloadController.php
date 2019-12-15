<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    //
    public function download() {
        // $file= public_path(). "/uploads/ultpowerprofile.pdf";   

        // return response()->download($file);
           //PDF file is stored under project/public/download/info.pdf

    $file= public_path(). "/uploads/ultpowerprofile.pdf";

 

    $headers = [
    
                  'Content-Type' => 'application/pdf',
    
               ];
    
     
    
    return response()->download($file, 'ultpowerprofile.pdf', $headers);
      }
}

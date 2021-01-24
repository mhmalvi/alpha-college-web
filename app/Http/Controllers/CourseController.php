<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\Downloads;

class CourseController extends Controller
{
    use Downloads;

    /**
     * Download qualification file
     */
    public function downloadQualification($code){
        return $this->qualifications($code);
    }

    /**
    * AHC30916
    */
    public function courseAHC30916(){
        return view('pages.AHC30916');
    }


    /**
     * BSB51918
     */
    public function courseBSB51918(){
        return view('pages.BSB51918');
    }


    /**
     * CPC10111
     */
    public function courseCPC10111(){
        return view('pages.CPC10111');
    }


    /**
     * RII30815
     */
    public function courseRII30815(){
        return view('pages.RII30815');
    }
}

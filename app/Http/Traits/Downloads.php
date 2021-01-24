<?php
    namespace App\Http\Traits;

    use Illuminate\Support\Facades\Storage;

    trait Downloads{

        /**
         * Download course qualification file
         * pdf version
         */
        public function qualifications($file){
            return Storage::download('public/pdf/'.$file.'.pdf');
        }
    }
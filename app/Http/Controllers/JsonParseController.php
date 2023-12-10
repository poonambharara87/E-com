<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonParseController extends Controller
{
    public function index()
    {
        $jsonContent = file_get_contents(storage_path('app\public\example.json'));

        $data = json_decode($jsonContent, true);
        
        // Access Contacts
            // foreach($data['contacts'] as $contacts)
            // {
            //     return $contacts['type'];
            // }
          

        // Access Coursess
            // foreach($data['courses'] as $courses)
            // {
            //     return $courses['course_name'];
            // }


        // return $data;
        // const firebaseConfig = {
        //     apiKey: "AIzaSyA1xHEpp6wF8ktXfKICHtLfODVTLJ9lGsc",
        //     authDomain: "otp-verfication-c2881.firebaseapp.com",
        //     databaseURL: "https://otp-verfication-c2881-default-rtdb.firebaseio.com",
        //     projectId: "otp-verfication-c2881",
        //     storageBucket: "otp-verfication-c2881.appspot.com",
        //     messagingSenderId: "576314757478",
        //     appId: "1:576314757478:web:ef676992df2dcb886078a7",
        //     measurementId: "G-D2TLRW4K6B"
        //   };
          
        //   // Initialize Firebase
        //   const app = initializeApp(firebaseConfig);
        //   const analytics = getAnalytics(app);
    }
}

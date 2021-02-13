<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function countrylist()
    {
        return response()->download(public_path('4.jpg'),'User Image');//User Image is filename
    }

    public function countrysave(Request $request)
    {
        $fileName = "user_image.jpg";
        $path = $request->file('photo')->move(public_path("/"),$fileName);
        $photoURL = url('/'.$fileName);
        return response()->json(['url'=> $photoURL],200);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Rate;
use App\product;

class ratingController extends Controller
{
    public function saveRate(Request $request)
    {        
        $data = new Rate();
        $data->rating_number = $request->star;
        $data->save();
        $data = Rate::select('rating_number')->get();
        $totalRating = 0;
        
        foreach($data as $index => $rObj)
        {
            $totalRating += $rObj->rating_number;
        }
        $totalRaters = $index + 1;
        $averageRating = ceil($totalRating / $totalRaters);
        $shirts = product::all();
        return view('front.home', ['averageRating'=> $averageRating, 'shirts'=>$shirts] );
    }
}

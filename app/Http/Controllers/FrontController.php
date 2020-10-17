<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;
use App\Rate;

class FrontController extends Controller
{
    public function index()
    {   
        
        $shirts = product::all();
        // $data = new Rate();
        // $data->rating_number = $request->star;
        // $data->save();
        $data = Rate::select('rating_number')->get();
        $totalRating = 0;
        foreach($data as $index => $rObj)
        {
            $totalRating += $rObj->rating_number;
        }
        
       
        $totalRaters = $index + 1;
        $averageRating = ceil($totalRating / $totalRaters);
        return view('front.home', ['shirts'=>$shirts, 'averageRating'=>$averageRating]);
    }

    public function shirts()
    {
        $shirts = product::all();
        return view('front.shirts', compact('shirts'));
    }

    public function shirt(){
        $product = product::all();
        return view('front.shirt', compact('product'));
    }

    public function rate(){
        return view('rate');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $now = Carbon::now();
        $categories = Category::orderBy('category_name', 'ASC')->get();
        $adverts = Ad::orderBy('id', 'DESC')->paginate(20);
        foreach($adverts as $advert){
            if($advert->end_date > $now->today()){
                $advert->status = 4;
                $advert->save();
            }
        }
        return view('home',['categories'=>$categories, 'adverts'=>$adverts]);
    }
}

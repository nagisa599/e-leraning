<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ranking;
use Illuminate\Support\Facades\Auth;

class RankingController extends Controller
{

    public function index(){
        $user = Auth::user();

        $myranking2=ranking::select('name','point')->where('name',$user->name)->first();
        
        
        $myranking=ranking::select('name','point')->where('point','>',$myranking2->point)->count();
        $allranking=ranking::select('name','point')->count();
         
        

        $rankings=ranking::select('name','point')
        ->orderBy('point','desc')->take(10)->get();
        

        return view('Ranking.Ranking',compact('rankings','myranking','allranking'));
    }
}

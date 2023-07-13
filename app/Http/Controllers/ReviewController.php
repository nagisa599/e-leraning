<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\review;
use Illuminate\Support\Facades\Auth;
use App\Models\content;
use App\Models\EnglishSelection;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Review.index');

    }


    public function question(){
        $user = Auth::user();
        $userquestion=review::select('id','name','contentnnumber')
        ->where('name',$user->name)->inRandomOrder()->first();
        
        if(is_null($userquestion)){
            return view('Review.finish');
        }

        $question=EnglishSelection::select('id','contentnumber','content','answer','selection1','selection2','selection3')
        ->where('id',$userquestion->contentnnumber)->first();
       
        $contents=content::select('content')
        ->where('id',$question->contentnumber)->first();
        
        return view('Review.question',compact('question','contents','userquestion'));

        
        
    }
    public function answer(Request $request){
        $user = Auth::user();
    
        if($request->selection== $request->answer){
            $rs = "正解";
            review::where('name',$user->name)->where('id',$request->id)->delete();
        }
        else{
            $rs= "不正解";
        }
        $question=$request;
       
        return view('Review.answer',compact('question','rs'));

        
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

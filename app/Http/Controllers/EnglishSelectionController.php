<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnglishSelection;
use App\Models\userdata;
use App\Models\content;
use App\Models\ranking;
use App\Models\review;
use Illuminate\Support\Facades\Auth;

class EnglishSelectionController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('English.Englishselection');//
         
     //s
    }
    public function question($category){
        $number=1;
        if($category==1){
            $testflagr=false;
            $questions=EnglishSelection::select('id','content','answer','selection1','selection2','selection3')
            ->where('category',1)->inRandomOrder()->first();
            return view('English.Wordtest',compact('questions','number'));
        }
        else if($category==4){


            $contents=content::select('id','category','content')
            ->inRandomOrder()->first();

            $questions=EnglishSelection::select('id','content','answer','selection1','selection2','selection3')
            ->where('contentnumber',$contents->id)->get();
            
            return view('English.Longtest',compact('questions','contents','number'));
        }   
        else if($category==5){
            $contents=content::select('id','category','content')
            ->inRandomOrder()->first();

            $questions=EnglishSelection::select('id','content','answer','selection1','selection2','selection3')
            ->where('contentnumber',$contents->id)->get();
            
            return view('English.test',compact('questions','contents','number'));
        }
    }
    
    public function back(){
        $user = Auth::user();

        $results=userdata::select('id','yourname','questionnumber','answer')
        ->where('yourname',$user->name)->take(10)->get();
        return view('English.result',compact('results'));
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
        $user = Auth::user();

        if($request->selection== $request->answer){
            $rs = "正解";
        }
        else{
            $rs= "不正解";
        }
        userdata::create([
            'yourname'=>$user->name,
            'questionnumber'=>$request->id,
            'answer'=>$rs
        ]);
        
        $number=$request->number+1;
        if($number==11){
            $results=userdata::select('id','yourname','questionnumber','answer')
            ->where('yourname',$user->name)->take(10)->get();
      
            return view('English.Result',compact('results'));
        }
        else{
            $questions=EnglishSelection::select('id','content','answer','selection1','selection2','selection3')
            ->where('category',1)->inRandomOrder()->first();
            return view('English.Wordtest',compact('questions','number'));
        }
    }
    
   

    public function detailshow($id)
    {

       
        $detail=EnglishSelection::select('id','content','answer','selection1','selection2','selection3')
        ->where('id',$id)->first();
    
        return view('English.Resultdetail',compact('detail'));

    }
    
   
    
    
    public function longanswer(Request $request)
    {
        $user = Auth::user();
        $number=$request->number;
        if(!is_null($request->question1)){
            if($request->selection1 == $request->answer1){
                $rs = "正解";
        }
            else{
                $rs= "不正解";
                
                review::create([
                    'name'=>$user->name,
                    'contentnnumber'=>$request->id1,
                    
                ]);
                
        }
            userdata::create([
            'yourname'=>$user->name,
            'questionnumber'=>$request->id1,
            'answer'=>$rs
        ]);}
        if(!is_null($request->question2)){
            if($request->selection2 == $request->answer2){
                $rs = "正解";
        }
            else{
                $rs= "不正解";
                
                review::create([
                'name'=>$user->name,
                'contentnnumber'=>$request->id2,
                
            ]);
        }
            

            userdata::create([
            'yourname'=>$user->name,
            'questionnumber'=>$request->id2,
            'answer'=>$rs
        ]);}
        if(!is_null($request->question3)){
            if($request->selection3 == $request->answer3){
                $rs = "正解";
        }
            else{
                $rs= "不正解";
                
                review::create([
                'name'=>$user->name,
                'contentnnumber'=>$request->id3,
                
            ]);
        }
            userdata::create([
            'yourname'=>$user->name,
            'questionnumber'=>$request->id3,
            'answer'=>$rs
        ]);}
        if(!is_null($request->question4)){
            if($request->selection4 == $request->answer4){
                $rs = "正解";
        }
            else{
                $rs= "不正解";
                
                review::create([
                'name'=>$user->name,
                'contentnnumber'=>$request->id4,
                
            ]);
        }
            userdata::create([
            'yourname'=>$user->name,
            'questionnumber'=>$request->id4,
            'answer'=>$rs
        ]);}
        if(!is_null($request->question5)){
            if($request->selection5 == $request->answer5){
                $rs = "正解";
        }
            else{
                $rs= "不正解";
                review::create([
                'name'=>$user->name,
                'contentnnumber'=>$request->id5,
                    
                ]);
        }
            
            userdata::create([
            'yourname'=>$user->name,
            'questionnumber'=>$request->id5,
            'answer'=>$rs
        ]);}
        if($number>=11){
            return view('English.GoResult');
        }
        else{
        
        $contents=content::select('id','category','content')
        ->inRandomOrder()->first();

        $questions=EnglishSelection::select('id','content','answer','selection1','selection2','selection3')
        ->where('contentnumber',$contents->id)->get();
        
        return view('English.Longtest',compact('questions','contents','number'));
        }
    }
    public function Test(Request $request)
    {
        $user = Auth::user();
        $number=$request->number;
        if(!is_null($request->question1)){
            if($request->selection1 == $request->answer1){
                $rs = "正解";
        }
            else{
                $rs= "不正解";
                review::create([
                    'name'=>$user->name,
                    'contentnnumber'=>$request->id1,
                        
                    ]);
        }
            userdata::create([
            'yourname'=>$user->name,
            'questionnumber'=>$request->id1,
            'answer'=>$rs
        ]);}
        if(!is_null($request->question2)){
            if($request->selection2 == $request->answer2){
                $rs = "正解";
        }
            else{
                $rs= "不正解";
                review::create([
                    'name'=>$user->name,
                    'contentnnumber'=>$request->id2,
                        
                    ]);
        }
            userdata::create([
            'yourname'=>$user->name,
            'questionnumber'=>$request->id2,
            'answer'=>$rs
        ]);}
        if(!is_null($request->question3)){
            if($request->selection3 == $request->answer3){
                $rs = "正解";
        }
            else{
                $rs= "不正解";
                review::create([
                    'name'=>$user->name,
                    'contentnnumber'=>$request->id3,
                        
                    ]);
        }
            userdata::create([
            'yourname'=>$user->name,
            'questionnumber'=>$request->id3,
            'answer'=>$rs
        ]);}
        if(!is_null($request->question4)){
            if($request->selection4 == $request->answer4){
                $rs = "正解";
        }
            else{
                $rs= "不正解";
                review::create([
                    'name'=>$user->name,
                    'contentnnumber'=>$request->id4
                    
                        
                    ]);
        }
            userdata::create([
            'yourname'=>$user->name,
            'questionnumber'=>$request->id4,
            'answer'=>$rs
        ]);}
        if(!is_null($request->question5)){
            if($request->selection5 == $request->answer5){
                $rs = "正解";
        }
            else{
                $rs= "不正解";
                review::create([
                    'name'=>$user->name,
                    'contentnnumber'=>$request->id5,
                        
                    ]);
        }
            userdata::create([
            'yourname'=>$user->name,
            'questionnumber'=>$request->id5,
            'answer'=>$rs
        ]);}
        if($number>=25){
           return view('English.GoTestResult');
        }
        else{
        $contents=content::select('id','category','content')
        ->inRandomOrder()->first();

        $questions=EnglishSelection::select('id','content','answer','selection1','selection2','selection3')
        ->where('contentnumber',$contents->id)->get();
            
        return view('English.test',compact('questions','contents','number'));
        }
    }
    public function result(){
            $user = Auth::user();
            
            $results=userdata::select('id','yourname','questionnumber','answer')
            ->where('yourname',$user->name)->take(10)->get();
            
            return view('English.Result',compact('results'));
     }
     public function testresult(){
        $user = Auth::user();
      
        $results=userdata::select('id','yourname','questionnumber','answer')
        ->where('yourname',$user->name)->take(25)->get();
        
        
      



        return view('English.Result',compact('results'));
 }




    public function finish(Request $request)
    {
        $user = Auth::user();
        
        
      

        $exists = ranking::where('name', $user->name)->exists();
        
        if($exists){
            $forward_point = ranking::select('point')
            ->where('name',$user->name)->first();
           
            
             if(($request->point)>($forward_point->point)){
               
                
                ranking::where('name', $user->name)->update([
                    'name'  => $user->name,
                    'point' => $request->point,
                ]);

             }
             else{
           
             }
        }
        else {
            ranking::create([
                'name'=>$user->name,
                'point'=>$request->point,
               
            ]);
        }
        userdata::where('yourname',$user->name)->delete();
        return view('English.Englishselection');
    }
    public function tangofinish()
    {
        $user = Auth::user();
 
        userdata::where('yourname',$user->name)->delete();
        return view('English.Englishselection');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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

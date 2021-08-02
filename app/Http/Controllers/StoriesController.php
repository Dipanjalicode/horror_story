<?php

namespace App\Http\Controllers;

use App\Models\stories;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;



class StoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $title=Stories::all();
      
      
      return view('story_title')->with('t',$title);
      
      
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $r)
    {
      
$r->validate([
        
        'image'=>'required|mimes:png,jpeg,jpg'
        
        
      ]);
      
      
      
$newImage=time().'-'.$r->name .'.'.$r->image->extension();
      
      
$r->image->move(public_path('assets/Images'),$newImage);
      
      
$name=$r->post('name');
      $email=$r->post('email');
      $title=$r->post('title');
      $story=$r->post('story');
      Stories::insert(array('name'=>$name,'email'=>$email,'title'=>$title,'image'=>$newImage,'story'=>$story));
      
 return view('home');


      
      
 }
        
        
        
        
        

        
    
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
      
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stories  $stories
     * @return \Illuminate\Http\Response
     */
    public function show(Request $r)
    {
        $id=$r->id;
        $data=stories::find($id);
        
        
       return view('story')->with('data' ,$data);
     
       
       
       
       
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stories  $stories
     * @return \Illuminate\Http\Response
     */
    public function edit(stories $stories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stories  $stories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stories $stories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stories  $stories
     * @return \Illuminate\Http\Response
     */
    public function destroy(stories $stories)
    {
        //
    }
}

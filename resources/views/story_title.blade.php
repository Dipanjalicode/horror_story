@extends('layout')
@section('title','story_titles')
@section('body')


  
  


<section class="text-gray-600 body-font" id="con">
 
 @foreach($t as $t)
  
  <div class="container px-5 py-3 mx-auto flex flex-wrap">
   <div class="p-4 lg:w-1/2 md:w-full">
        <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
       
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3" id="feed" ><span class="dec"><a href="stories?id={{$t['id']}}">{{ $t['title'] }}</a></span></h2>
          
          </div>
        </div>
      </div>
    </div>
  
  </div>
  @endforeach
  
</section>













  




@endsection






<style>

header{
  background-color:#4C516D;
}
footer{
  background-color:#4C516D;
}
#con{
  background-image:url('assets/Images/h4.jpeg');

  background-size: cover;
  height: 100%;
}


#feed{
  
  justify-content:center;
  margin:auto;
  margin-top:3%;
  margin-left:25%;
  word-spacing:0.5rem;
  
width: 60%;
  font-family:eater;
  font-size:1.5rem;
  
  background-color:transparent;
  
}



.dec{
background-image: linear-gradient(yellow,white);
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        color: transparent;
}




</style>


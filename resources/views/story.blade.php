@extends('layout')
@section('title','story_title')
@section('body')



<section class="text-gray-600 body-font h-f" style="background-color:gray;height:auto;min-height:100%;">
  <div class="container px-5 py-24 mx-auto flex flex-col">
    <div class="lg:w-4/6 mx-auto" >
      <div class="rounded-lg h-64 overflow-hidden" id="imag">
         <img  alt="content"  src="<?= asset('assets/Images/'.$data->image) ?>">
      </div>
       <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center text-xl " style="width:90%;background-color:white;margin-top:5%;border: 5px solid red;margin-left:5%
       ">
         <h1><span id="title">{{ $data->title }}</span> </h1>
          <p class="leading-relaxed text-xl mb-15 my-0" style="margin-right:3%;margin-top:5%">{{ $data->story }}</p>
          <a class="text-indigo-500 inline-flex items-center">thanks for reading  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>





@endsection
<style>
#imag{
 margin-left:32%;
height:0%;
width:30%;
border: 5px solid red;
  
  
}
#title{
  margin:auto;
  color:black;
 font-size:2rem;
  font:arial;
  text-decoration: underline;
  
}

header{
  background-color:#4C516D;
}
footer{
  background-color:#4C516D;
}

body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

</style>
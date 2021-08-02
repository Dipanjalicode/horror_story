@extends('layout')
@section('title', 'write_feedback')
@section('body')


<section class="relative" style="height:100%">
  <form method="post" action="feedbacks">
    {{ @csrf_field() }}
  
  <div class="absolute inset-0" id="back">
    
  </div>
  <div class="container px-5 py-24 mx-auto flex">
    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md" id="feed">
      <h2 class="text-gray-900 text-2xl mb-1 font-medium title-font"><span class="dec">Feedback</span></h2>
      <p class="leading-relaxed mb-5 text-gray-600"><span class="dec">Post-yout thought regarding website,stories.</span></p>
  

      <div class="relative mb-4">
        <label for="name" class="leading-7 text-lg text-gray-600"><span class="dec">name</span></label>
        <input type="name" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
  

      <div class="relative mb-4">
        <label for="email" class="leading-7 text-lg text-gray-600"><span class="dec">email</span></label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
  
  
  
  
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-lg text-gray-600"><span class="dec">Message</span></label>
       
        <textarea type="text" name="message" id="message"  class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        
      </div>
      <button class="text-white bg-gray-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded text-lg"><span class="dec">send</span></button>
      
    </div>
  </div>
  </form>
</section>




@endsection
<style>

header{
  background-color:#4C516D;
}
footer{
  background-color:#4C516D;
}
#feed{
  border-width:0.5rem;
  border-color:black;
  justify-content:center;
  margin:auto;
  margin-top:50%;
  margin-right:10%;
  word-spacing:0.5rem;
  
width: 70%;
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
#back{
  background-image:url('assets/Images/h1.jpg');

  background-size: cover;
  height: auto;
  
  
}

</style>
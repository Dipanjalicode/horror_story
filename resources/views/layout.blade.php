<!DOCTYPE html>
<html>
  <head>
    
<script src='http://use.edgefonts.net/eater.js'></script>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

  
    <title>@yield('title')</title>
  </head>
  
  <audio src="assets/sound/sound.mp3" autoplay>
</audio>
  
  
  <!-- <embed  src="assets/sound/sound.mp3" autostart="1" hidden="true">-->
  
  <body>
<header class="text-red-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center " style=" margin:20px; content:center;">

   <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 border-2 border-red-500"
   >
      
   <a class="mr-3 hover:text-pink-900 text-xl" href="story_title">Read_stories</a>
   
    </button>
    
   <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0
  border-2 border-red-500" >
      
   <a class="mr-3 hover:text-red-900 text-xl" href="write">write_stories</a>
      
    </button>
    


   <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 border-2 border-red-500">
      
   <a class="mr-3 hover:text-red-900 text-xl" href="/">home</a>
      
    </button>
      
   <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 border-2 border-red-500">
      
   <a class="mr-3 hover:text-red-900 text-xl" href="feedback">Feedback</a>
      
    </button>
      
      
    </nav>

  </div>
</header>



@section('body');
@show





  </body>
    
  

<footer class="text-gray-600 body-font" >
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col" style="color:red;">
    


    

    <a class="flex title-font font-medium items-center md:justify-start justify-center text-red-9">
      <span class="ml-3 text-3xl">Dipanjali</span>
    </a>
    <p class="text-3xl text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4" style="color:red;">© 2021 Dipanjali —
      <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1 text-3xl" rel="noopener noreferrer" target="_blank"style="color:red;">@creation</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-red-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-red-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-red-500" >
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-red-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>
</body>
<style>

footer {

  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  
  text-align: center;

  
  

}
button{
  margin-right: 1.5rem;
  color:red;
  
  
}
</style>

<script>
  
window.addEventListener("DOMContentLoaded", event => {
  const audio = document.querySelector("audio");
  audio.volume = 0.5;
  audio.play();
});

  </script>
  
  
</html>
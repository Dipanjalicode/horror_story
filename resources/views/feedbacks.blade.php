@extends('layout')
@section('title','feedbacks')
@section('body')


<section class="text-gray-600 body-font">
   
   <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0
  border-2 border-red-500"  style="margin:10%;margin-bottom:1%">
      
   <a class="mr-3 hover:text-red-900 text-xl" href="write_feedback">write_feedback</a>
      
    </button>
    
  
  
  
   @foreach($feed->reverse() as $feeds)
  
  <div class="container px-5 py-3 mx-auto flex flex-wrap">
   <div class="p-4 lg:w-1/2 md:w-full">
        <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
          <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">{{ $feeds['name'] }}</h2>
            <p class="leading-relaxed text-base">{{ $feeds['feedback'] }}</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  @endforeach
  
</section>

<style>
  
header{
  background-color:#4C516D;
}
footer{
  background-color:#4C516D;
}
  
  
  
</style>

@endsection
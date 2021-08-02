@extends('layout')
@section('title','Home')
@section('body')
<div class="container" id="center">

<p>
<span class="multicolortext">
  write your own real hprror experience and share your feelings about ghost.
  <br/>
  </br>
  
  And
  
  
  <br/>
  read other real ghost stories
  
<br/>
<br/>
  
  share your feedback.
  </span>
</p>
</div>


@endsection

  <style>
    body{
      
background: url(assets/Images/images.jpeg) no-repeat center center fixed;
  background-size: cover;
  height: 100%;
  overflow: hidden;
      

}



#center {
  margin:auto;
  margin-top:40%;
  position: relative;
  width:100%;
  
  padding: 10px;
  
  font-family:eater;
  font-size:2.5rem;
  word-spacing:1rem;
  
}

.multicolortext {
        background-image: linear-gradient(red,yellow);
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        color: transparent;
      }


    
    
    
    
  </style>


  
  
</html>
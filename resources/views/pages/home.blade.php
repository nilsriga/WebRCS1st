@extends('layout')

@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-10 col-sm-10 col-md-10 col-lg-10 slider" >   
                <div class="slides"> 
                <a class="fancybox slider " rel="group" data-fancybox="group" href="resources/cat.jpg"><img class="cat" src="resources/cat.jpg"></a>
                </div>
                <div class="slides">
                <a class="fancybox slider " rel="group" data-fancybox="group" href="resources/sliderImg2.png"><img class="cat" src="resources/sliderImg2.png" alt=""></a>
                </div>
                <div class="slides">
                <a class="fancybox slider " rel="group" data-fancybox="group" href="resources/sliderImg3.jpg"><img class="cat" src="resources/sliderImg3.jpg" alt=""></a>
                </div>
                <div class="slides">
                <a class="fancybox slider " rel="group" data-fancybox="group" href="resources/sliderImg1.jpg"><img class="cat" src="resources/sliderImg1.jpg" alt=""></a>
                </div>
                <div class="slider_title"><h3>Latest 3 articles:</h3></div>
                

  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle">
    <span class="w3-badge w3-border w3-transparent w3-hover-black slider-dot" onclick="currentDiv(1)"></span>
    <span class="w3-badge w3-border w3-transparent w3-hover-black slider-dot" onclick="currentDiv(2)"></span>
    <span class="w3-badge w3-border w3-transparent w3-hover-black slider-dot" onclick="currentDiv(3)"></span>
    <span class="w3-badge w3-border w3-transparent w3-hover-black slider-dot" onclick="currentDiv(4)"></span>
</div>





                <div>
                <button class="w3-button w3-display-left slider-button w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-display-right slider-button w3-right w3-hover-text-khaki" onclick="plusDivs(+1)">&#10095;</button>  
                </div>
                
            </div>
            <div class="row col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-10 col-lg-offset-1 col-xl-offset-1 col-xl-10">
                <div class="col-xs-12 col-sm-6 col-md-4 slider-border ">
                    <div class="row slider-container">
                        <div class="col-sm-6 small-article">
                        <a class="slider" href="/articles1"><img src="resources/sliderImg1.jpg" alt=""></a>
                        </div>
                        <div class="hidden-xs">
                            <p><h3>Title</h3><a href="/articles1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 slider-border">
                    <div class="row slider-container">
                        <div class="col-sm-6 small-article">
                        <a class="slider" href="/articles1"> <img src="resources/sliderImg2.png" alt=""></a>
                        </div>
                        <div  class="hidden-xs">
                            <p><h3>Title</h3><a href="/articles1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 slider-border">
                    <div class="row slider-container">
                        <div class="col-sm-6 small-article">
                        <a class="slider" href="/articles1"><img src="resources/sliderImg3.jpg" alt=""></a>
                        </div>
                        <div class="hidden-xs">
                            <p><h3>Title</h3><a href="/articles1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    


    @endsection
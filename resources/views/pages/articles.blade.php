@extends('layout')

@section('content')


<main>
        <div class="container-fluid">
            <div class="row">
                <div>
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="/">Home</a>
                        <span class="breadcrumb-item active" href="/articles">Articles</span>
                    </nav>
                </div>
            </div>
                <div class="row article_container images-col">
                    <div class="article col-xs-12 col-sm-2 col-md-3 col-lg-3 col-xl-2">
                        <div>
                            <a href="/articles1"><img src="resources/sliderImg3.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="article_content row col-xs-offset-0 col-xs-12 col-sm-8 col-md-7 col-lg-19 col-xl-10">
                        <a href="/articles1"><p><h1>Article Title</h1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis eros sapien. Etiam vel rutrum diam.
                            Aliquam vehicula, metus quis rutrum fermentum, ante nulla pulvinar enim, in tristique tortor mi sed
                            enim. Phasellus tristique libero et consectetur gravida. Nullam purus libero, fermentum eu sagittis
                            eget, suscipit a erat. Suspendisse at nunc nec velit volutpat fermentum tempor at leo. Class aptent
                            taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tincidunt
                            purus quis sem laoreet, eu gravida sapien rhoncus. Sed ut ante malesuada, placerat mauris eu, consequat
                            ante. Morbi pulvinar eget tortor sed molestie.</p></a>
                    </div>
                </div>
            <div class="row article_container">
                <div class=" article col-xs-12 col-sm-2 col-md-3 col-lg-3 col-xl-2">
                    <div>
                        <img src="resources/sliderImg1.jpg" alt="">
                    </div>
                </div>
                <div class="article_content row col-xs-offset-0 col-xs-12 col-sm-8 col-md-7 col-lg-19 col-xl-10">
                    <p><h1>Article Title</h1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis eros sapien. Etiam vel rutrum diam.
                        Aliquam vehicula, metus quis rutrum fermentum, ante nulla pulvinar enim, in tristique tortor mi sed
                        enim. Phasellus tristique libero et consectetur gravida. Nullam purus libero, fermentum eu sagittis
                        eget, suscipit a erat. Suspendisse at nunc nec velit volutpat fermentum tempor at leo. Class aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tincidunt
                        purus quis sem laoreet, eu gravida sapien rhoncus. Sed ut ante malesuada, placerat mauris eu, consequat
                        ante. Morbi pulvinar eget tortor sed molestie.</p>
                </div>
            </div>
            <div class="row article_container">
                <div class="article col-xs-12 col-sm-2 col-md-3 col-lg-3 col-xl-2">
                    <div>
                        <img src="resources/sliderImg2.png" alt="">
                    </div>
                </div>
                <div class="article_content row col-xs-offset-0 col-xs-12 col-sm-8 col-md-7 col-lg-19 col-xl-10">
                    <p><h1>Article Title</h1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis eros sapien. Etiam vel rutrum diam.
                        Aliquam vehicula, metus quis rutrum fermentum, ante nulla pulvinar enim, in tristique tortor mi sed
                        enim. Phasellus tristique libero et consectetur gravida. Nullam purus libero, fermentum eu sagittis
                        eget, suscipit a erat. Suspendisse at nunc nec velit volutpat fermentum tempor at leo. Class aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tincidunt
                        purus quis sem laoreet, eu gravida sapien rhoncus. Sed ut ante malesuada, placerat mauris eu, consequat
                        ante. Morbi pulvinar eget tortor sed molestie.</p>
                </div>
            </div>
            <div class="row">
                <div class="page_menu">
                    <ul class="pagination">
                        <li><a class="active" href="/articles">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul> 
                </div>
            </div>
        </div>
    </main>


    @endsection
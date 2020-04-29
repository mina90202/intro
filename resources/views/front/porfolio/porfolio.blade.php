
@extends('layouts.master')

@section('title', 'Porfolio')

@section('content')
				<div class="wrapage">
                    <div class="layer">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="asset/img/Layer-38.jpg" alt="Chania" >
                      </div>
                      <div class="item">
                        <img src="asset/img/Layer-281.jpg" alt="Chania" >
                      </div>

                    </div>
                </div>
                        <div class="container container_header">
                                <div class="row row_top">
                                    <div class="col-sm-12 ">
                                        <h1>Porfolio</h1>
                                        <ol class="breadcrumb">
                                             <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Porfolio</li>
                                        </ol>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </header>
                <main>
                    <div class="wrappage">
                        <div class="container porfolio">
                            <div class="row">
                <div class="col-md-12">
                                <div class="nav_main">
                                        <ul class="nav nav-tabs">
                  <li class="active"><a class=" filter-button " data-filter="all" href="#1">ALL</a> </li>
                   <li><a class=" filter-button" data-filter="web" href="#1">WEB</a></li>
                   <li><a class=" filter-button" data-filter="advertsing" href="#1" >ADVERTISING</a> </li>
                   <li><a class=" filter-button" data-filter="branring" href="#1">BRANRING</a> </li>
                   <li><a class=" filter-button" data-filter="design" href="#1">DESIGN</a> </li>
                   <li class="clear-375"><a class=" filter-button" data-filter="photography" href="#1">PHOTOGRAPHY</a></li>
                </ul>
                  </div> </div>
                  <div  class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter photography"><div class="item"> <img src="asset/img/6.jpg" class="img-responsive" alt=""> </div>
                  </div>
                  <div  class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter web"> <div class="item"><img src="asset/img/1.jpg" class="img-responsive" alt="">
                  </div> </div>
                  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter advertsing"><div class="item"> <img src="asset/img/2.jpg" class="img-responsive" alt="">
                  </div> </div>
                  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter design"> <div class="item"><img src="asset/img/4.jpg" class="img-responsive" alt="">
                  </div> </div>
                  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter branring"><div class="item"> <img src="asset/img/3.jpg" class="img-responsive" alt="">
                  </div> </div>
                  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter design"><div class="item"> <img src="asset/img/7.jpg" class="img-responsive" alt="">
                  </div> </div>
                  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter branring"> <div class="item"><img src="asset/img/8.jpg" class="img-responsive" alt="">
                  </div> </div>
                  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter design"><div class="item"> <img src="asset/img/9.jpg" class="img-responsive" alt="">
                  </div> </div>
                  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter photography"> <div class="item"><img src="asset/img/10.jpg" class="img-responsive" alt="">
                  </div> </div>
                  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter web"><div class="item"> <img src="asset/img/13.jpg" class="img-responsive" alt="">
                  </div> </div>
                  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter advertsing"> <div class="item"><img src="asset/img/111.jpg" class="img-responsive" alt="">
                  </div> </div>
                  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter web"> <div class="item"><img src="asset/img/12.jpg" class="img-responsive" alt="">
                  </div> </div>
                  <div class="col-md-12 button-por"><button class="button_see">SEE ALL PROJECT <span></span> <span class="xoay"></span></button></div>

                 </div>
                </div>

                </div>


                    </main>

                @endsection

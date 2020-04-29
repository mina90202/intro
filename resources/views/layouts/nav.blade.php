@if(request()->is('/'))
<div class="home-1">
@elseif(request()->is('about-us'))
<div class="about-1">
@elseif(request()->is('services'))
<div class="services-1">
@elseif(request()->is('blog'))
<div class="blog-1">
@elseif(request()->is('porfolio'))
<div class="porfolio-1">
@elseif(request()->is('contact-us'))
 <div class="contact-1">
@endif

    <div class="sidenav side" id="right">

<nav class="navbar navbar-inverse">
<ul class="nav navbar-nav">
<li class="list-group-item">HOME <button data-toggle="collapse"  data-target="#menu-mobile4" id="btn1">
    <span class="chid"></span>
    <span class="chid1"></span>
</button>
              <ul id="menu-mobile4" class="collapse menu-mobile-lv2">
              <li><a href="{{url('/')}}"> HOME</a></li>
              </ul></li>
<li class="list-group-item">SERVICES</li>


  <li class="list-group-item">PORFOLIO <button data-toggle="collapse" data-target="#menu-mobile2"  id="btn3">
  <span class="chid4"></span>
    <span class="chid5"></span>
  </button>
              <ul id="menu-mobile2" class="collapse menu-mobile-lv2 liststyly">
          <li><a href="porfolio-01.html"> PORFOLIO 1</a></li>
          <li><a href="porfolio-02.html"> PORFOLIO 2</a></li>
              </ul>
          </li>
      <li class="list-group-item">ABOUT <button data-toggle="collapse" data-target="#menu-mobile5" id="btn4">
          <span class="chid6"></span>
    <span class="chid7"></span>
  </button>
              <ul id="menu-mobile5" class="collapse menu-mobile-lv2">
          <li><a href="about-01.html"> ABOUT 1</a></li>
          <li><a href="about-02.html"> ABOUT 2</a></li>
          <li><a href="about-03.html"> ABOUT 3</a></li>
          <li><a href="about-04.html"> ABOUT 4</a></li>
              </ul></li>
              <li class="list-group-item"> <a href="{{url('blog')}}"> BLOG </a>

          </li>
       <li class="list-group-item"> <a href="{{url('contact-us')}}"> CONTACTS </a>

          </li>
</ul>
</nav>

</div>
<div class="baobaseright">
<div class="baseright">
<header>

<div class="wrappage row_header"  data-spy="affix" data-offset-top="10">
<div class="affixx container">
<div class="row">
<div class="logo col-md-3 col-xs-3 col-sm-3" >
<span></span>
</div>

<div class="sidenav sidena col-sm-9 col-md-9 col-xs-9" >
        <nav class="navbar navbar-inverse header-lap">
        <div class="active-mobile search-popup pull-right">
<div class="search-popup dropdown" data-toggle="modal" data-target="#myModall"><i class="icon-magnifier icons"></i>
</div>
</div>
<ul class="nav navbar-nav">
<li ><a href="{{url('/')}}">HOME</a>
</li>
<li><a href="{{url('services')}}">SERVICES</a>
</li>
<li><a href="{{url('porfolio')}}">PORFOLIO</a>
</li>
<li><a href="{{url('about-us')}}">ABOUT</a>
</li>
<li><a href="{{url('blog')}}">BLOG</a>
</li>
<li><a href="{{url('contact-us')}}">CONTACTS</a>
</li>
</ul>
</nav>
<!-- <div class="basel hidden-lg" id="baselMobile"></div> -->
<!-- mobi -->
<div class="header-mobi">


<div  class="button1">
<div class="butt">
<span id="child1"></span>
<span class="child2"></span>
<span class="child3"></span></div>
<div class="vuong" ></div> </div>
<div class="active-mobile search-popup pull-right">
<div class="search-popup dropdown" data-toggle="modal" data-target="#myModall"><i class="icon-magnifier icons"></i>
</div>
</div>
</div>

</div>
<div class="modal fade" id="myModall" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="submit" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">WHAT ARE  YOUR <br>LOOKING FOR ?</h4>
</div>
<div class="modal-body">
<div class="input-group">
    <form method="get" class="searchform" action="/search" role="search">
        <input type="hidden" name="type" value="product">
        <input type="text" name="q" placeholder="Enter search..." class="form-control control-search">
        <span class="input-group-btn">
          <button class="btn btn-default button_search" type="submit" >SEARCH</button>
        </span>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

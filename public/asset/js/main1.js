jQuery(document).ready(function($) {
    "use strict";

        

          // 22222222222222222222222222222222222222222222222222222222
           $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
           // ...........................................................................
        $('.js-click-product').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.js-product-slider',
        asNavFor: '.js-product-slider2',
        dots: true,
        focusOnSelect: true,
        infinite: true,
        arrows: false,
        vertical: true,
         centerMode: true,
        responsive: [

            {
                breakpoint: 1367,
                settings: {
                    vertical: false
                }
            }
        ]
    });

    $('.js-product-slider').slick({
        slidesToShow: 3,	
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.js-click-product',
        asNavFor: '.js-product-slider2',
    });
    $('.js-product-slider2').slick({
        slidesToShow: 1,	
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.js-click-product',
        asNavFor: '.js-product-slider',
    });
    // ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

         
      // ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

// sssssssssssssssssssssssssssssssssssssssssssss\
  window.onscroll = function() {scrollFunction()};
function scrollFunction() {
 
  if ($("body,html").scrollTop() > 1) {
    $(".row_header").css("transition","all .5s ease");
    $(".row_header").css("background","#333333");
    $(".row_header").css("box-shadow","0 10px 10px rgba(0,0,0,0.05)");


  } else {
      $(".row_header").css("background","unset");
      $("nav").css("display","block");
      $(".row_header").css("box-shadow","unset");
      $(".row_header").css("padding-top","30px");
    }
  }
    // scrol3//
      window.onscroll = function() {scrollFunction()};
function scrollFunction() {
 
  if ($("body,html").scrollTop() > 100) {
    $(".row_header3").css("transition","all .5s ease");
    $(".row_header3").css("background","#333333");
    $(".row_header3").css("box-shadow","0 10px 10px rgba(0,0,0,0.05)");
    $(".slidee").css("display","none");
    $(".row_header3").css("padding-top","10px");
    $(".sile1").css("top","200px");
  } else {
      $(".row_header3").css("background","unset");
      $("nav").css("display","block");
      $(".row_header3").css("box-shadow","unset");
      $(".row_header3").css("padding-top","60px");
      $(".slidee").css("display","block");
    }
  }
    // scrol4//
  
  // scrol1////////////////////////////////////////////////////
        window.onscroll = function() {scrollFunction()};
function scrollFunction() {
 
  if ($("body,html").scrollTop() > 1) {
    $(".affixx").css("transition","all .5s ease");
    $(".affixx").css("background","#333");
    $(".affixx").css("box-shadow","0 10px 10px rgba(0,0,0,0.05)");
    $(".affixx").css("padding-top","20px");
    $(".affixx").css("padding-bottom","0px");
    $(".affixx").css("position","fixed");
    $(".affixx").css("top","0px");
    $(".side").css("padding-top","150px;");
    $(".home4").css("color","#fff");
    $(".home44").css("background","#fff");
     $(".affixx .logo-js span").css("background-image","url(asset/img/logo.png)");
     $(" .phonee-js").css("background-image","url(asset/img/phone.png)");



  } else {
    $(".slide").css("padding-top","0px;");
     $(".affixx").css("padding-top","40px");
      $(".affixx").css("background","unset");
      $(".affixx").css("box-shadow","unset");
         $(".affixx").css("top","20px");
            $(".affixx").css("padding-bottom","0");
             $(".home4").css("color","#333");
             $(".home44").css("background","#333");
             $(".affixx .logo-js span").css("background-image","url(asset/img/logo1.png)");
             $(".phonee-js").css("background-image","url(asset/img/phone1.png)");

  

   }
   
  }
  
  var x= $(window).width() ;
  if (x <=2000) {$(".row_header5").attr("data-offset-top","990");}
 if(x <=1680) {$(".row_header5").attr("data-offset-top","876");}
 if(x <=1440) {$(".row_header5").attr("data-offset-top","750");}
  if(x <=1360) {$(".row_header5").attr("data-offset-top","703");}
    if(x <=1240) {$(".row_header5").attr("data-offset-top","646");}
        if(x <=1170) {$(".row_header5").attr("data-offset-top","610");}
           if(x <=1024) {$(".row_header5").attr("data-offset-top","10");}

  
  
  

  


  // sllick4{}
   $(".slick-centermode").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth: true
      });
   // mobi sidevar
$('.butt').on('click', function(){
   $("#mySidenav").css("visibility","visible")
    $("#mySidenav").css("left","0");
     $("#mySidenav").css("display","inline-block");
      $(".base").css("visibility","visible");
      $(".base").css("marginLeft","470px");
       $(".baobase").css("overflow-x","hidden");
     $(".vuong").css("display","inline-block");
     $("#child1").css("transform","translateY(8px) rotate(45deg"); 
      $(".child3").css("transform","translateY(-8px) rotate(-45deg"); 
       $(".child2").css("width","0");

});

$('.vuong').on('click', function(){
   $(".vuong").css("display","none");
  $(".child2").css("width","25px");
$("#child1").css("-webkit-transform","rotate(0deg)"); 
$(".child3").css("-webkit-transform","rotate(0deg)"); 
    $("#mySidenav").css("visibility","hidden");
    $("#mySidenav").css("left","-568px");
     $(".base").css("marginLeft","0");
     $(".baobase").css("overflow-x","hidden");

});


$('.butt').on('click', function(){
   $("#mySidenav").css("visibility","visible")
    $("#mySidenav").css("left","0");
    $("#right").css("right","0");
     $("#right").css("visibility","visible")
     $("#mySidenav").css("display","inline-block");
      $(".base").css("visibility","visible");
      $(".base").css("marginLeft","470px");
       $(".baobase").css("overflow-x","hidden");
     $(".vuong").css("display","inline-block");
     $("#child1").css("transform","translateY(8px) rotate(45deg"); 
      $(".child3").css("transform","translateY(-8px) rotate(-45deg"); 
       $(".child2").css("width","0");
             $(".baseright").css("visibility","visible");
      $(".baseright").css("marginLeft","-470px");
       $(".baobaseright").css("overflow-x","hidden");

});

$('.vuong').on('click', function(){
   $(".vuong").css("display","none");
  $(".child2").css("width","25px");
$("#child1").css("-webkit-transform","rotate(0deg)"); 
$(".child3").css("-webkit-transform","rotate(0deg)"); 
    $("#mySidenav").css("visibility","hidden");
    $("#mySidenav").css("left","-568px");
    $("#right").css("right","-568px");
    $("#right").css("visibility","hidden")
     $(".base").css("marginLeft","0");
     $(".baobase").css("overflow-x","hidden");
          $(".baseright").css("marginLeft","0");
     $(".baobaseright").css("overflow-x","hidden");

});

// thu>
   $('#btn1').on('click', function(){
        $(".chid").css("transform","translateX(-7px) rotate(-45deg)"); 
              $(".chid1").css("transform","translateY(-1px) rotate(45deg");
   });
    $('#btn2').on('click', function(){
        $(".chid2").css("transform","translateX(-7px) rotate(-45deg)"); 
              $(".chid3").css("transform","translateY(-1px) rotate(45deg");
   });
     $('#btn3').on('click', function(){
        $(".chid4").css("transform","translateX(-7px) rotate(-45deg)"); 
              $(".chid5").css("transform","translateY(-1px) rotate(45deg");
   });
    $('#btn4').on('click', function(){
        $(".chid6").css("transform","translateX(-7px) rotate(-45deg)"); 
              $(".chid7").css("transform","translateY(-1px) rotate(45deg");
   });
     $('#btn5').on('click', function(){
        $(".chid8").css("transform","translateX(-7px) rotate(-45deg)"); 
              $(".chid9").css("transform","translateY(-1px) rotate(45deg");
   });
    $('#btn6').on('click', function(){
        $(".chid10").css("transform","translateX(-7px) rotate(-45deg)"); 
              $(".chid11").css("transform","translateY(-1px) rotate(45deg");
   });



$('.goto1').on('click', function(){

    $("html, body").animate({
            scrollTop: 0
        }, 1500);
        return false;
});

 $(".filter-button").click(function(){     
        var value = $(this).attr('data-filter');               
         if(value == "all")        {           
          $('.filter').show('1000');        }       
           else        {           
            $(".filter").not('.'+value).hide('3000');           
             $('.filter').filter('.'+value).show('3000');                    }    });





  $('.fiter').on('click', function(){
    $("#mySidenavv").css("left","0");
    $("#mySidenavv").css("opacity","1");
    $("#baselMobile").css("visibility","visible");
    $("#baselMobile").css("opacity","1");

});

$('.closebtn').on('click', function(){
    $("#mySidenavv").css("left","-317px");
   $("#mySidenavv").css("opacity","0");
       $("#baselMobile").css("visibility","hidden");
    $("#baselMobile").css("opacity","0");

});
$('.basel').on('click', function(){
    $("#mySidenavv").css("left","-317px");
   $("#mySidenavv").css("opacity","0");
       $("#baselMobile").css("visibility","hidden");
    $("#baselMobile").css("opacity","0");

});

// counter
// 

$('.counte').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 8000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  
  

});








// video
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    
}


});



  function initMap() {

        // Create a new StyledMapType object, passing it an array of styles,
        // and the name to be displayed on the map type control.
        var myLatLng = {lat: 40.752988, lng: -73.976869};
        var map = new google.maps.Map(document.getElementById('googlemap1'), {
            center: { lat: 40.752988, lng: -73.976869 },
            zoom: 10,
            styles: [
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    }
]
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });

    }
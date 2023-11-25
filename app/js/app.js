var winHT = $(window).height();
var winWD = $(window).width();
// var navHt = $("header").outerHeight();
// var bannerHt = winHT - navHt;
// var loc = window.location.pathname.split("/").pop();
const lenis = new Lenis({
  content: document.section,
  lerp:100,
  duration: 1.2,
  easing: (t) => (t === 1 ? 1 : 1 - Math.pow(2, -10 * t)),
  direction: "vertical",
  gestureDirection: "vertical",
  smooth: true,
  smoothWheel: true,
  smoothTouch: false,
  wheelMultiplier: 1.5,
  touchMultiplier: 20,
});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

// // set height of the svg path as constant
// const svg = document.getElementById("svgPath");
// const length = svg.getTotalLength();

// // start positioning of svg drawing
// svg.style.strokeDasharray = length;

// // hide svg before scrolling starts
// svg.style.strokeDashoffset = length;

// window.addEventListener("scroll", function () {
//   const scrollpercent = (document.body.scrollTop + document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);

//   const draw = length * (scrollpercent * 1); 

//   // Reverse the drawing when scroll upwards
//   svg.style.strokeDashoffset = length - draw;
// });

if (winWD <= 992) {     
	$('.banner-image-main').each(function() {
		var src = $(this).attr("src");
		$(this).attr("src", src.replace(/\-desk.webp$/i, "-mob.webp"));
	});

  $('.banner-image').each(function() {
		var src = $(this).attr("data-lazy");
		$(this).attr("data-lazy", src.replace(/\-desk.webp$/i, "-mob.webp"));
	});
}

// setTimeout(function() {
//   $('#light').fadeIn();       
// }, 1000000);

// setTimeout(function() {
//   $('#fade').fadeIn();        
// }, 10000);

var nextbtn = "url(assets/images/next.svg),auto";
var prevbtn = "url(assets/images/prev.webp),auto";

$(window).on('scroll', function() {
  $(".lastrow").each(function() {
    if (isScrolledIntoView($(this))) {
      $('.lasta').addClass("center");
      $('.centertxt1').fadeIn();
    }
  });
});

// $(document).ready(function(){
//   var mouseY = 0;
//   var topValue = 0;
//   window.addEventListener("mouseout",function(e){
//       mouseY = e.clientY;
//       if(mouseY<topValue) {
//           $('#light').show();
//           $('#fade').show();
//       }
//   },
//   false);
// });

// function isScrolledIntoView(elem) {
//   var docViewTop = $(window).scrollTop();
//   var docViewBottom = docViewTop + $(window).height();

//   var elemTop = $(elem).offset().top;
//   var elemBottom = elemTop + $(elem).height();

//   return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
// }

$(document).ready(function () {
      //   var childrenSelector = $(".nav-links a");
      //   var aChildren = $(".nav-links a"); // find the a children of the list items
      //   if(winWD <= 700)
      //     var gap = 55;// $(".header-wrapper").outerHeight(); //Navigation height
      //   else
      //     var gap = 100;
      //   var aArray = []; // create the empty aArray
      //   for (var i=0; i < childrenSelector.length; i++) {
      //     var aChild = aChildren[i];
      //     if (!$(aChild).hasClass('extLink')) {
      //       if ($(aChild).attr('rel')) {
      //         var ahref = $(aChild).attr('rel');
      //         aArray.push(ahref);
      //       }
      //     }
      //   }

      //        //On Scroll - Add class active to active tab
      // $(window).scroll(function(){
      //   var scroll = $(window).scrollTop();
      //   var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
      //   var docHeight = $(document).height();
      //   for(i=0;i<aArray.length;i++){
      //     var theID = aArray[i];
      //     var divPos = $("#"+theID).offset().top; // get the offset of the div from the top of page
      //     var divHeight = $("#"+theID).outerHeight(); // get the height of the div in question
      //     if (windowPos >= (divPos - gap) && windowPos < ((divPos - gap) + divHeight)) {
      //       if (!$("a[rel='" + theID + "']").hasClass("active")){
      //         // ga('set', 'page', '/'+theID);
      //         // ga('send', 'pageview');
      //         $("a[rel='" + theID + "']").addClass("active"); 
      //       }
      //     } 
      //     else{
      //       $("a[rel='" + theID + "']").removeClass("active");
      //     }
      //   }
   

        $(".lazy").each(function() {
          if ($(this).attr("data-src")) {
              (this.tagName == "IMG" || this.tagName == "IFRAME") ? $(this).attr("src", $(this).data("src")): $(this).css("background-image",
                  "url(" + $(this).data("src") + ")");
              $(this).removeAttr("data-src");
          }
      });

      $('.banner-slider').slick({
        arrows: true,
        autoplay:true,
        lazyLoad: 'ondemand',
        dots: false,
        autoplaySpeed: 5000,
        speed: 1000,
        cssEase: 'linear',
        fade:true,       
        prevArrow:'#banner-prev',
        nextArrow:'#banner-next',   
      });


      $('.instrument-slider').slick({
        arrows: true,
        autoplay:false,
        lazyLoad: 'ondemand',
        dots: false,
        autoplaySpeed: 5000,
        speed: 1000,
        centerMode:true,
        centerPadding:'230px',      
        prevArrow:'#inst-prev',
        nextArrow:'#inst-next',
        responsive: [
          {
            breakpoint:1025,
            settings:{
              // slidesToShow:2,
              centerPadding:'150px',
            }
          },
          {
            breakpoint: 993,
            settings: {
              arrows: true,
              autoplay:false,
              lazyLoad: 'ondemand',
              dots: false,
              autoplaySpeed: 5000,
              speed: 1000,
              centerMode:false,
              centerPadding:'0',
              prevArrow:'#inst-prev',
              nextArrow:'#inst-next',
            }
          },
        ]   
      });
      $('.specInfoSlider').slick({
        slidesToShow:3,
        // slidesToScroll:1,
        asNavFor:'.towe-a-slider',
        focusOnSelect:true,
        autoplay:false,
        vertical:true,
      })
      $('.specInfoSlider2').slick({
        slidesToShow:3,
        // slidesToScroll:1,
        asNavFor:'.towe-b-slider',
        focusOnSelect:true,
        autoplay:false,
        vertical:true,
      })
      $('.locationIconWrapper').slick({
        slidesToShow:4,
        arrows:false,
        autoplay:true,
        responsive: [
          {
            breakpoint: 640,
            settings: {
              // rows:2,
              slidesToShow:1,
              // slidesPerRow: 1,
              // rows: 4
            }
          },
        ]
      });
      $('.locMobSlider').slick({
        slidesToShow:1,
        arrows:true,
        prevArrow:'#locMobLeft',
        nextArrow:'#locMobRight',
      })

      $('.gallery-slider').slick({
        arrows: true,
        autoplay:true,
        lazyLoad: 'ondemand',
        dots: false,
        autoplaySpeed: 5000,
        speed: 1000,      
        prevArrow:'#gallery-prev',
        nextArrow:'#gallery-next',   
      });


      $('.tabs-wrapper a').on('click',function(){    
            var link = $(this).attr('rel');
            $('.tabs-wrap').hide();
            $('#'+link).fadeIn();
            $('.tabs-wrapper a').removeClass('tab-active');
            $(this).addClass('tab-active');
            $('.towe-a-slider, .towe-b-slider, .specInfoSlider, .specInfoSlider2').slick('refresh');
      });

      $('.towe-a-slider').slick({
        arrows: true,
        autoplay:true,
        lazyLoad: 'ondemand',
        dots: false,
        autoplaySpeed: 5000,
        speed: 1000,
        asNavFor:'.specInfoSlider',      
        prevArrow:'#tower-a-prev',
        nextArrow:'#tower-a-next',   
      });

      $('.towe-b-slider').slick({
        arrows: true,
        autoplay:true,
        lazyLoad: 'ondemand',
        dots: false,
        autoplaySpeed: 5000,
        speed: 1000,  
        asNavFor:'.specInfoSlider2',    
        prevArrow:'#tower-b-prev',
        nextArrow:'#tower-b-next',   
      });

      $('.amenities-slider-1').slick({
        arrows: false,
        autoplay:true,
        lazyLoad: 'ondemand',
        dots: false,
        autoplaySpeed: 5000,
        speed: 1000,      
        asNavFor: '.amenities-slider-2',
        prevArrow:'#ame-prev',
        nextArrow:'#ame-next', 
        responsive: [{
                 breakpoint: 992,
                 settings: {      
                   arrows: true,                              
                 },

               }
              ]  
      });

      $('.amenities-slider-2').slick({
        slidesToShow: 10,
        slidesToScroll: 1,
        // rows:10;
        arrows: false,
        autoplay:false,
        vertical: true,
        focusOnSelect: true,
        asNavFor: '.amenities-slider-1',
        lazyLoad: 'ondemand',
        dots: false,
        autoplaySpeed: 5000,
        speed: 1000,   
      });


      if (winWD <= 992) {        
        $('.galleryImg').each(function() {
          var src = $(this).attr("src");
          $(this).attr("src", src.replace(/\.webp$/i, "-mob.webp"));
        });
      }


      jQuery(".phoneVal").on("keypress", function (evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    });
    jQuery(".phoneVal").on("keyup", function (event) {
        var mobval=parseInt(jQuery(".phoneVal").val().substr(0,2));
        var mobvalfirstdigit=parseInt(jQuery(".phoneVal").val().substr(0,1));
        if (mobval<60 && mobvalfirstdigit!=6 && mobvalfirstdigit!=7 && mobvalfirstdigit!=8 && mobvalfirstdigit!=9) {
            jQuery(".phoneVal").val("");
            return false;
        }
    });


      });

        if(winWD > 992){
          var get_custom_margin = winWD - $(".container").width();
          $(".amenity-wrapper").css("margin-left", (get_custom_margin / 2));
      }

      $(document).on("click",".open-form, .frmclose",function() {
        if ($(".form-container").is(':visible')) {
            $(".form-container").slideUp();
        } else {
            $(".form-container").slideToggle();
        }
    });
    $(document).on("click","#download-brochure",function() {
          $('#light').show();
          $('#fade').show();
          download_brochure = 1;
          // console.log(download_brochure);
    });

    



$('.testimonial-slider').slick({
    dots: true,
    arrows: false,
    slidesToShow:3,
    slidesToScroll: 1,
    rtl:true,
    responsive: [
       
        {
            breakpoint: 992,
            settings: {
                slidesToShow:2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint:768,
            settings: {
                slidesToShow:1,
                slidesToScroll: 1,
            }
        }
    ]
   
});
$('.features-slider').slick({
    dots: false,
    arrows: false,
    slidesToShow:3,
    slidesToScroll: 1,
    rtl:true,
    responsive: [
       
        {
            breakpoint: 900,
            settings: {
                slidesToShow:2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint:768,
            settings: {
                slidesToShow:1,
                slidesToScroll: 1,
            }
        }
    ]
   
});
$('.logos-slider').slick({
    dots: false,
    arrows: false,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '60px',
    slidesToShow:5,
    autoplay: true,
  autoplaySpeed:2000,
  speed:700,
    rtl:true,
    responsive: [
       
        {
            breakpoint: 992,
            settings: {
                slidesToShow:4,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint:768,
            settings: {
                slidesToShow:3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint:576,
            settings: {
                slidesToShow:2,
                slidesToScroll: 1,
            }
        }
    ]
   
});
$('.project-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.project-thumb-slider',
    rtl:true
  });
  $('.project-thumb-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.project-slider',
    dots: false,
   // centerMode: true,
    focusOnSelect: true,
    rtl:true
  });
          
$(document).ready(function() {
    $(".sticky-bar").css("opacity",0);
	$(window).bind('scroll', function() {
        if ($(window).scrollTop() > 90) {
            $(".SH-header").addClass("header-sticky");
            $(".sticky-bar").css("opacity",1)
        }
        else{
            $(".SH-header").removeClass("header-sticky");
            $(".sticky-bar").css("opacity",0)
        }
    });
})
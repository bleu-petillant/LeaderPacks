$(document).ready(function(){

    $('.prev').click(function(){
        $('.members-image-container').slick('slickPrev');
    })
        
    $('.next').click(function(){
        $('.members-image-container').slick('slickNext');
    }) 
    
    $('.members-image-container').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),
        adaptiveHeight: false,
        dots: false,
        responsive: [
            {
            breakpoint: 1226,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                nextArrow: $('.next'),
                prevArrow: $('.prev'),
            }
            },
            {
            breakpoint: 850,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                nextArrow: $('.next'),
                prevArrow: $('.prev'),
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        
    });


    //mobile

    $('.prev-mobile').click(function(){
        $('.members-image-container-mobile').slick('slickPrev');
    })
        
    $('.next-mobile').click(function(){
        $('.members-image-container-mobile').slick('slickNext');
    }) 

    $('.members-image-container-mobile').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),
        adaptiveHeight: false,
        dots: false,
    });


});

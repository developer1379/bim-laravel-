$('.slide').slick({
    dots: false,
    prevArrow: '<span><i class=fa fa-chevron-left></i></span>',
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: false,
    nextArrow: false,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
            breakpoint: 1300,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true,
                prevArrow: false,
                nextArrow: false,
            }
        },

        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true,
                prevArrow: false,
                nextArrow: false,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                prevArrow: false,
                nextArrow: false,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                prevArrow: false,
                nextArrow: false,
            }
        },

        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: false,
                nextArrow: false,
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

$('.sponso').slick({
    dots: false,
    prevArrow: '<span><i class=fa fa-chevron-left></i></span>',
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: false,
    nextArrow: false,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
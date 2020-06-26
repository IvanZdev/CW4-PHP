
document.addEventListener("DOMContentLoaded", function(event) {



    var swiper = new Swiper('.swiper-container', {

        slidesPerView: 3,
        spaceBetween: 20,
        centeredSlides: true,
        initialSlide: 2,
        loop:true,


        // init: false,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },


        breakpoints:{

        900:{

            slidesPerView: 1,

            centeredSlides: true,


        }


        }

    });

});
document.addEventListener("DOMContentLoaded", function(event) {


    var slideIndex = 1;
    showSlides(slideIndex);
    window.plusSlides = function(n) {
        showSlides(slideIndex += n);
    };

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[slideIndex-1].style.display = "block";

    }

    //Menu qui s'oeuvre sur clique

    var button = document.getElementById('menu-hamburger');
    button.addEventListener('click', BurgaZ);


    function BurgaZ() {

        console.log("test");

        if (!document.querySelector(".dropdown-content").classList.contains("show")) {

            document.querySelector(".dropdown-content").classList.add("show");
            document.querySelector(".bouton-drop").style.color = "#A42223";
        }

        else {
            document.querySelector(".dropdown-content").classList.remove("show");
            document.querySelector(".bouton-drop").style.color = "#fff";
        }
    }


    //Menu qui s'oeuvre sur clique
    // var button = document.getElementById('menu-hamburger');
    // button.addEventListener('click', BurgaZ);
    // function BurgaZ() {
    //     console.log("test");
    //
    //     if(document.querySelector(".dropdown-content").style.display === "flex"){
    //
    //         document.querySelector(".dropdown-content").style.display = "none"
    //
    //     }
    //
    //     else{
    //
    //         document.querySelector(".dropdown-content").style.display = "flex"
    //     }
    //
    // }


    //fleche qui fait le page glisser vers le top du page

    var clickTop = document.getElementById("fleche-haut");


    clickTop.addEventListener("click", scrollToTop);

    var timeout;




    function scrollToTop() {


        if (document.body.scrollTop != 0 || document.documentElement.scrollTop != 0) {
            window.scrollBy(0, -30);
            timeout = setTimeout(scrollToTop, 0)
        }


        else {


            clearTimeout(timeout);
        }


        window.addEventListener('mousewheel', function () {
            clearTimeout(timeout)
        });


    }




});







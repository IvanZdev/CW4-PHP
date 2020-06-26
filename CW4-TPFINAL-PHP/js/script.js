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







//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJzY3JpcHQuanMiXSwic291cmNlc0NvbnRlbnQiOlsiZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcIkRPTUNvbnRlbnRMb2FkZWRcIiwgZnVuY3Rpb24oZXZlbnQpIHtcclxuXHJcblxyXG4gICAgdmFyIHNsaWRlSW5kZXggPSAxO1xyXG4gICAgc2hvd1NsaWRlcyhzbGlkZUluZGV4KTtcclxuICAgIHdpbmRvdy5wbHVzU2xpZGVzID0gZnVuY3Rpb24obikge1xyXG4gICAgICAgIHNob3dTbGlkZXMoc2xpZGVJbmRleCArPSBuKTtcclxuICAgIH07XHJcblxyXG4gICAgZnVuY3Rpb24gc2hvd1NsaWRlcyhuKSB7XHJcbiAgICAgICAgdmFyIGk7XHJcbiAgICAgICAgdmFyIHNsaWRlcyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoXCJteVNsaWRlc1wiKTtcclxuICAgICAgICBpZiAobiA+IHNsaWRlcy5sZW5ndGgpIHtzbGlkZUluZGV4ID0gMX1cclxuICAgICAgICBpZiAobiA8IDEpIHtzbGlkZUluZGV4ID0gc2xpZGVzLmxlbmd0aH1cclxuICAgICAgICBmb3IgKGkgPSAwOyBpIDwgc2xpZGVzLmxlbmd0aDsgaSsrKSB7XHJcbiAgICAgICAgICAgIHNsaWRlc1tpXS5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICAgICAgfVxyXG5cclxuICAgICAgICBzbGlkZXNbc2xpZGVJbmRleC0xXS5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG5cclxuICAgIH1cclxuXHJcbiAgICAvL01lbnUgcXVpIHMnb2V1dnJlIHN1ciBjbGlxdWVcclxuXHJcbiAgICB2YXIgYnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ21lbnUtaGFtYnVyZ2VyJyk7XHJcbiAgICBidXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBCdXJnYVopO1xyXG5cclxuXHJcbiAgICBmdW5jdGlvbiBCdXJnYVooKSB7XHJcblxyXG4gICAgICAgIGNvbnNvbGUubG9nKFwidGVzdFwiKTtcclxuXHJcbiAgICAgICAgaWYgKCFkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmRyb3Bkb3duLWNvbnRlbnRcIikuY2xhc3NMaXN0LmNvbnRhaW5zKFwic2hvd1wiKSkge1xyXG5cclxuICAgICAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5kcm9wZG93bi1jb250ZW50XCIpLmNsYXNzTGlzdC5hZGQoXCJzaG93XCIpO1xyXG4gICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmJvdXRvbi1kcm9wXCIpLnN0eWxlLmNvbG9yID0gXCIjQTQyMjIzXCI7XHJcbiAgICAgICAgfVxyXG5cclxuICAgICAgICBlbHNlIHtcclxuICAgICAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5kcm9wZG93bi1jb250ZW50XCIpLmNsYXNzTGlzdC5yZW1vdmUoXCJzaG93XCIpO1xyXG4gICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmJvdXRvbi1kcm9wXCIpLnN0eWxlLmNvbG9yID0gXCIjZmZmXCI7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG5cclxuXHJcbiAgICAvL01lbnUgcXVpIHMnb2V1dnJlIHN1ciBjbGlxdWVcclxuICAgIC8vIHZhciBidXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbWVudS1oYW1idXJnZXInKTtcclxuICAgIC8vIGJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIEJ1cmdhWik7XHJcbiAgICAvLyBmdW5jdGlvbiBCdXJnYVooKSB7XHJcbiAgICAvLyAgICAgY29uc29sZS5sb2coXCJ0ZXN0XCIpO1xyXG4gICAgLy9cclxuICAgIC8vICAgICBpZihkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmRyb3Bkb3duLWNvbnRlbnRcIikuc3R5bGUuZGlzcGxheSA9PT0gXCJmbGV4XCIpe1xyXG4gICAgLy9cclxuICAgIC8vICAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5kcm9wZG93bi1jb250ZW50XCIpLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIlxyXG4gICAgLy9cclxuICAgIC8vICAgICB9XHJcbiAgICAvL1xyXG4gICAgLy8gICAgIGVsc2V7XHJcbiAgICAvL1xyXG4gICAgLy8gICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmRyb3Bkb3duLWNvbnRlbnRcIikuc3R5bGUuZGlzcGxheSA9IFwiZmxleFwiXHJcbiAgICAvLyAgICAgfVxyXG4gICAgLy9cclxuICAgIC8vIH1cclxuXHJcblxyXG4gICAgLy9mbGVjaGUgcXVpIGZhaXQgbGUgcGFnZSBnbGlzc2VyIHZlcnMgbGUgdG9wIGR1IHBhZ2VcclxuXHJcbiAgICB2YXIgY2xpY2tUb3AgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImZsZWNoZS1oYXV0XCIpO1xyXG5cclxuXHJcbiAgICBjbGlja1RvcC5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgc2Nyb2xsVG9Ub3ApO1xyXG5cclxuICAgIHZhciB0aW1lb3V0O1xyXG5cclxuXHJcblxyXG5cclxuICAgIGZ1bmN0aW9uIHNjcm9sbFRvVG9wKCkge1xyXG5cclxuXHJcbiAgICAgICAgaWYgKGRvY3VtZW50LmJvZHkuc2Nyb2xsVG9wICE9IDAgfHwgZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LnNjcm9sbFRvcCAhPSAwKSB7XHJcbiAgICAgICAgICAgIHdpbmRvdy5zY3JvbGxCeSgwLCAtMzApO1xyXG4gICAgICAgICAgICB0aW1lb3V0ID0gc2V0VGltZW91dChzY3JvbGxUb1RvcCwgMClcclxuICAgICAgICB9XHJcblxyXG5cclxuICAgICAgICBlbHNlIHtcclxuXHJcblxyXG4gICAgICAgICAgICBjbGVhclRpbWVvdXQodGltZW91dCk7XHJcbiAgICAgICAgfVxyXG5cclxuXHJcbiAgICAgICAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ21vdXNld2hlZWwnLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIGNsZWFyVGltZW91dCh0aW1lb3V0KVxyXG4gICAgICAgIH0pO1xyXG5cclxuXHJcbiAgICB9XHJcblxyXG5cclxuXHJcblxyXG59KTtcclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuIl0sImZpbGUiOiJzY3JpcHQuanMifQ==

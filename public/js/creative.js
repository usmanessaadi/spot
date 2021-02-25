(function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 56)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function () {
        $('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 57
    });

    // Collapse Navbar
    var navbarCollapse = function () {
        if ($("#mainNav").offset().top > 110) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);

    // Scroll reveal calls
    window.sr = ScrollReveal();

    sr.reveal('.community-scale', {
        delay: 1000,
        scale: 0
    });
    sr.reveal('.co-working-left', {
        delay: 200,
        distance: '15%',
        duration: 1000,
        origin: 'left',
        easing: 'ease-in-out'
    });
    sr.reveal('.creativity-right', {
        delay: 200,
        distance: '15%',
        duration: 1000,
        origin: 'right',
        easing: 'ease-in-out'
    });
    sr.reveal('.scale-icons', {
        delay: 600,
        scale: 0
    });
    sr.reveal('.fade-out', {
        delay: 200,
        opacity: 0,
        scale: 0,
    });
    sr.reveal('.fade-out-1', {
        delay: 400,
        opacity: 0,
        scale: 0,
    });
    sr.reveal('.fade-out-2', {
        delay: 600,
        opacity: 0,
        scale: 0,
    });
    sr.reveal('.fade-out-3', {
        delay: 300,
        opacity: 0,
        scale: 0,
    });
    sr.reveal('.fade-out-4', {
        delay: 500,
        opacity: 0,
        scale: 0,
    });
    sr.reveal('.fade-out-5', {
        delay: 700,
        opacity: 0,
        scale: 0,
    });
    sr.reveal('.from-left', {
        delay: 200,
        distance: "30%",
        opacity: 0,
        origin: "left",
    });
    sr.reveal('.from-right', {
        delay: 1100,
        distance: "50%",
        opacity: 0,
        origin: "right",
    });
    sr.reveal('.from-bottom-1', {
        delay: 300,
        distance: "50%",
        duration: 1000,
        opacity: 0,
        origin: "bottom",
    });
    sr.reveal('.from-bottom', {
        delay: 1100,
        distance: "50%",
        opacity: 0,
        origin: "bottom",
    });
    sr.reveal('.sr-contact-2', {
        delay: 400,
        scale: 0
    });

})(jQuery); // End of use strict

particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 80,
            "density": {
                "enable": true,
                "value_area": 800
            }
        },
        "color": {
            "value": "#ffffff"
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
            "polygon": {
                "nb_sides": 5
            },
            "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
            }
        },
        "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
            "value": 2,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
            }
        },
        "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 2,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": true,
                "mode": "grab"
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 150,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 200,
                "duration": 0.4
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }
        }
    },
    "retina_detect": true
});



var prevScrollPos = 100;
window.onscroll = () => {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollPos > currentScrollPos) {
        document.getElementById("contact-navbar").style.top = "0";
        document.getElementById("mainNav").style.marginTop = "40px";
        document.getElementById("mainNav").style.padding = "7px";
        document.getElementById("logo").style.width = "84px";
        document.querySelector(".badge").style.display = "block";
        $('.c').removeClass('blackit')

    } else {
        document.getElementById("contact-navbar").style.top = "-100px";
        document.getElementById("mainNav").style.marginTop = "0";
        document.getElementById("mainNav").style.padding = "0";
        document.getElementById("logo").style.width = "60px";
        document.querySelector(".badge").style.display = "none";
        $('.c').addClass('blackit');
    }
}

const righty = document.getElementById('right'), // right button
    lefty = document.getElementById('left'), // left button
    gallery = document.getElementById('gallery'), // Gallery
    galleryTest = document.getElementById('test'), // Gallery
    scrollbar_progress = document.getElementById('scrollbar'),
    scrollStep = document.getElementById('card').offsetWidth // dynamic card width; to increase by card width for responsivity



/* handling left right click button */
// scroll to next card
righty.addEventListener('click', () => screolltoRight());

// scroll to prev card
lefty.addEventListener('click', () => scrolltoLeft());


/* handling auto play scrolling gallery */
//  auto play Gallery
let autoScroll = setInterval(() => screolltoRight(), 3000)

/* start/resume auto play on moouse out gallery */
gallery.addEventListener('mouseout', () => {
    autoScroll = setInterval(() => screolltoRight(), 3000)
})

/* Stop auto play on mouseover gallery */
gallery.addEventListener('mouseover', () => {
    if (autoScroll) {
        clearInterval(autoScroll)
    }
})


/*  Progress scrollbar */
gallery.onscroll = function () {
    var scrolled = (gallery.scrollLeft / gallery.scrollWidth) * 200; // 100 ?
    scrollbar_progress.style.width = scrolled + "%";
};


/***********************************************************************************/

/* Helper functions */
// scroll to right function
function screolltoRight() {
    gallery.scrollTo({
        left: scrollStep + gallery.scrollLeft,
        behavior: 'smooth'
    });
    // if scrolling reaches the edge go back to start
    if (gallery.scrollLeft >= gallery.scrollWidth / 2) {
        gallery.scrollTo({
            left: 0,
            behavior: 'smooth'
        });
    }
}

// scroll to left function
function scrolltoLeft() {
    gallery.scrollTo({
        left: (gallery.scrollLeft - scrollStep),
        behavior: 'smooth',
    })
}



// Magnific popup calls
$("#gallery").magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1]
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
});

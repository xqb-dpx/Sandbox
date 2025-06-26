//========= testimonial
tns({
    container: '.testimonial-slider',
    items: 3,
    slideBy: 'page',
    autoplay: false,
    mouseDrag: true,
    gutter: 0,
    nav: true,
    controls: false,
    responsive: {
        0: {
            items: 1,
        },
        540: {
            items: 1,
        },
        768: {
            items: 2,
        },
        992: {
            items: 2,
        },
        1170: {
            items: 3,
        }
    }
});

//====== counter up
var cu = new counterUp({
    start: 0,
    duration: 2000,
    intvalues: true,
    interval: 100,
    append: " ",
});
cu.start();

//========= glightbox
GLightbox({
    'href': 'assets/videos/website.mp4',
    'type': 'video',
    'source': 'local', //vimeo, youtube or local
    'width': 1000,
    'autoplayVideos': true,
});
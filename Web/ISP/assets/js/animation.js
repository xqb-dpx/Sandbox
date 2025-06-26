window.onload = function () {
    window.setTimeout(fadeout, 200);
    const target = document.getElementById('onload');
    if (target) {
        const position = target.offsetTop;
        window.scrollTo({
            top: position,
            behavior: 'smooth'
        });
    }
}

function fadeout() {
    document.querySelector('.preloader').style.opacity = '0';
    document.querySelector('.preloader').style.display = 'none';
}
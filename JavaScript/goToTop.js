// GESTION DE LA REMONTÉE SUR CLIC FLÈCHE

var btn = document.getElementById("scroll_to_top");
document.getElementById('bdy').onscroll = function() {
    console.log("scoll");
    if (window.scrollY > 120) {

        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
};

btn.addEventListener('click', () => window.scrollTo({
    top: 0,
    left: 0,
    behavior: 'smooth',
}));
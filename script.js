// Wrap every letter in a span
var textWrapper = document.querySelector(".ml1 .letters");
textWrapper.innerHTML = textWrapper.textContent.replace(
    /\S/g,
    "<span class='letter'>$&</span>"
);

anime
    .timeline({ loop: true })
    .add({
        targets: ".ml1 .letter",
        scale: [0.3, 1],
        opacity: [0, 1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 600,
        delay: (el, i) => 70 * (i + 1),
    })
    .add({
        targets: ".ml1 .line",
        scaleX: [0, 1],
        opacity: [0.5, 1],
        easing: "easeOutExpo",
        duration: 700,
        offset: "-=875",
        delay: (el, i, l) => 80 * (l - i),
    })
    .add({
        targets: ".ml1",
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000,
    });

/* Scroll effect */
const scrollElements = document.querySelectorAll(".scroll");

const handleScrollAnimation = () => {
    let visible = 200;
    scrollElements.forEach((el) => {
        let distance = el.getBoundingClientRect().top;
        if (distance < window.innerHeight - visible) {
            el.classList.add("scrolled");
        } else {
            el.classList.remove("scrolled");
        }
    });
};

window.addEventListener("scroll", () => {
    handleScrollAnimation();
    scrollFunction();
});

/* Smooth scroll */
var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,
});

// Get the button
const mybutton = document.getElementById("btn-back-to-top");
const refToTop = document.getElementById('about')

function scrollFunction() {
    if (
        refToTop.getBoundingClientRect().top < 20 
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

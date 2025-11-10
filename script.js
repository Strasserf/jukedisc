gsap.registerPlugin(ScrollTrigger) 
let mm = gsap.matchMedia();

mm.add("(min-width: 786px)", () => {
let instruments = document.querySelector(".instruments");


let animation = gsap.from(
    ".instruments",
    {
        x: -350,
        duration: .5,
        ease:"sine.inOut",
        paused: true, 
    }
);


instruments.addEventListener("mouseenter", () => animation.play());
instruments.addEventListener("mouseleave", () => animation.reverse());

});
mm.add("(max-width: 786px)", () => {
let instruments = document.querySelector(".instruments");


let animation = gsap.from(
    ".instruments",
    {
        x: -161,
        duration: .5,
        ease:"sine.inOut",
        paused: true, 
    }
);


instruments.addEventListener("mouseenter", () => animation.play());
instruments.addEventListener("mouseleave", () => animation.reverse());
});
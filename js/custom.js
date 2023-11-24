$(".owl_content")
  .on(
    "initialized.owl.carousel change.owl.carousel changed.owl.carousel",
    function (e) {
      if (
        !e.namespace ||
        (e.type != "initialized" && e.property.name != "position")
      )
        return;

      var current = e.relatedTarget.current();
      var items = $(this).find(".owl-stage").children();
      var add = e.type == "changed" || e.type == "initialized";

      items
        .eq(e.relatedTarget.normalize(current))
        .toggleClass("middle_beside", add);
      items
        .eq(e.relatedTarget.normalize(current + 1))
        .toggleClass("middle", add);
      items
        .eq(e.relatedTarget.normalize(current + 2))
        .toggleClass("middle_beside", add);
    }
  )
  .owlCarousel({
    items: 3,
    nav: false,
    loop: true,
    dots:true,
    autoplay: true,
    autoPlaySpeed: 3000,
    autoPlayTimeout: 3000,
    autoplayHoverPause: true
  });


AOS.init();


gsap.registerPlugin(ScrollTrigger);


// --- menu1 ---
gsap.from(".line-1", {
  scrollTrigger: {
    trigger: ".hero",
    scrub: true,
    start: "top top",
    end: "+=100%"
  },
  scaleX: 0,
  transformOrigin: "right left",
  ease: "none"
});

// --- menu2 ---
gsap.from(".line-2", {
  scrollTrigger: {
    trigger: ".how-we-help",
    scrub: true,
    start: "top top",
    end: "+=100%"
  },
  scaleX: 0,
  transformOrigin: "left center",
  ease: "none"
});

// --- menu3 ---
gsap.from(".line-3", {
  scrollTrigger: {
    trigger: ".we-work-with",
    scrub: true,
    start: "top top",
    end: "+=100%"
  },
  scaleX: 0,
  transformOrigin: "left center",
  ease: "none"
});

// --- menu4 ---
gsap.from(".line-4", {
  scrollTrigger: {
    trigger: ".platform",
    scrub: true,
    start: "top top",
    end: "+=100%"
  },
  scaleX: 0,
  transformOrigin: "left center",
  ease: "none"
});

// --- menu5 ---
gsap.from(".line-5", {
  scrollTrigger: {
    trigger: ".our-story",
    scrub: true,
    start: "top top",
    end: "+=20%"
  },
  scaleX: 0,
  transformOrigin: "left center",
  ease: "none"
});

// --- menu6 ---
gsap.from(".line-6", {
  scrollTrigger: {
    trigger: ".our-purpose",
    scrub: true,
    start: "top top",
    end: "+=20%"
  },
  scaleX: 0,
  transformOrigin: "left center",
  ease: "none"
});

// --- menu7 ---
gsap.from(".line-7", {
  scrollTrigger: {
    trigger: ".our-purpose",
    scrub: true,
    start: "+=30%",
    end: "+=10%"
  },
  scaleX: 0,
  transformOrigin: "left center",
  ease: "none"
});

// --- menu8 ---
gsap.from(".line-8", {
  scrollTrigger: {
    trigger: ".hero",
    scrub: true,
    start: "top top",
    end: "+=100%"
  },
  scaleX: 0,
  transformOrigin: "left center",
  ease: "none"
});

// --- menu9 ---
gsap.from(".line-9", {
  scrollTrigger: {
    trigger: ".get-to-know",
    scrub: true,
    start: "top top",
    end: "+=100%"
  },
  scaleX: 0,
  transformOrigin: "left center",
  ease: "none"
});

// --- menu10 ---
gsap.from(".line-10", {
  scrollTrigger: {
    trigger: ".our-story",
    scrub: true,
    start: "top top",
    end: "+=100%"
  },
  scaleX: 0,
  transformOrigin: "left center",
  ease: "none"
});

// --- menu11 ---
gsap.from(".line-11", {
  scrollTrigger: {
    trigger: ".our-values",
    scrub: true,
    start: "top top",
    end: "+=50%"
  },
  scaleX: 0,
  transformOrigin: "left center",
  ease: "none"
});



// --- menu12 ---
gsap.from(".line-12", {
  scrollTrigger: {
    trigger: ".office-locations",
    scrub: true,
    start: "top top",
    end: "+=50%"
  },
  scaleX: 0,
  transformOrigin: "left center",
  ease: "none"
});

// --- menu13 ---
gsap.from(".line-13", {
  scrollTrigger: {
    trigger: ".contact-us",
    scrub: true,
    start: "top top",
    end: "+=10%"
  },
  scaleX: 0,
  transformOrigin: "left center",
  ease: "none"
});
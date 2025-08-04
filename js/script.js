gsap.registerPlugin(ScrollTrigger);

gsap.to(".nav-divition", {
  backgroundColor: "var(--primary-color-50)",
  duration: 0.4,
  ease: "power1.out",
  scrollTrigger: {
    trigger: ".position-sticky",
    start: "top top",
    toggleActions: "play reverse play reverse",
    markers: false,
  },
});

const menuIcon = document.getElementById("menu-icon");
const menu = document.getElementById("menu");
const menuLinks = menu.querySelectorAll("a");

menuIcon.addEventListener("mouseenter", () => {
  if (!menuIcon.classList.contains("open")) {
    menuIcon.classList.add("hovered");
  }
});

menuIcon.addEventListener("mouseleave", () => {
  menuIcon.classList.remove("hovered");
});

menuIcon.addEventListener("click", () => {
  const isOpen = menuIcon.classList.toggle("open");
  if (isOpen) {
    menu.classList.remove("d-none");
    gsap.fromTo(
      menuLinks,
      {y: 30, opacity: 0},
      {
        y: 0,
        opacity: 1,
        duration: 0.48,
        ease: "spring(1, 80, 10, 0)",
        stagger: {
          each: 0.15,
          from: "end",
        },
      }
    );
  } else {
    gsap.to(menuLinks, {
      y: 30,
      opacity: 0,
      duration: 0.3,
      ease: "power1.in",
      stagger: {
        each: 0.1,
        from: "start",
      },
      onComplete: () => menu.classList.add("d-none"),
    });
  }
});
document.addEventListener("click", (event) => {
  const isClickInsideMenu = menu.contains(event.target);
  const isClickOnMenuIcon = menuIcon.contains(event.target);

  if (menuIcon.classList.contains("open") && !isClickInsideMenu && !isClickOnMenuIcon) {
    menuIcon.classList.remove("open");
    gsap.to(menuLinks, {
      y: 30,
      opacity: 0,
      duration: 0.3,
      ease: "power1.in",
      stagger: {
        each: 0.1,
        from: "start",
      },
      onComplete: () => menu.classList.add("d-none"),
    });
  }
});
window.addEventListener("load", () => {
  gsap.from("h5", {
    x: 50,
    opacity: 0,
    duration: 5,
    ease: "power3.out",
  });

  gsap.from(".hero-word", {
    y: 30,
    opacity: 0,
    duration: 10,
    ease: "power3.out",
    stagger: 0.15,
    delay: 0.5,
  });
});

gsap.registerPlugin(ScrollTrigger);
gsap.from(".about-quote p", {
  scrollTrigger: {
    trigger: ".container.mt-5",
    start: "top 80%",
    toggleActions: "play none none reverse",
  },
  x: 100,
  opacity: 0,
  duration: 1,
  ease: "power3.out",
});

gsap.utils.toArray(".about-us-card").forEach((card, i) => {
  gsap.from(card, {
    scrollTrigger: {
      trigger: card,
      start: "top 80%",
      toggleActions: "play none none reverse",
    },
    y: 50,
    opacity: 0,
    duration: 0.7,
    ease: "power2.out",
    delay: i * 0.3,
  });
});

gsap.registerPlugin(ScrollTrigger);

const cards = document.querySelectorAll(".percentage-card .number");

gsap.utils.toArray(cards).forEach((card) => {
  const targetValue = parseInt(card.textContent.trim(), 10);

  card.textContent = "0";

  gsap.to(card, {
    textContent: targetValue,
    duration: 4,
    ease: "power1.out",
    snap: {textContent: 1},
    scrollTrigger: {
      trigger: ".row.g-4",
      start: "top 80%",
      toggleActions: "play none none none",
    },
    onUpdate: function () {
      card.textContent = Math.round(card.textContent) + "%";
    },
  });
});

window.addEventListener("load", () => {
  gsap.to(".hero-image-wrapper img", {
    duration: 4,
    opacity: 1,
    y: 0,
    ease: "power2.out",
  });
});

/*about us page */
window.addEventListener("DOMContentLoaded", () => {
  const letters = document.querySelectorAll(".aboutUs-page-hero-text span");
  const diamond = document.querySelector(".diamond");

  const itemsToAnimate = [...letters, diamond];

  gsap.from(itemsToAnimate, {
    y: 60,
    opacity: 0,
    duration: 1.2,
    stagger: 0.2,
    ease: "elastic.out(1.5, 0.7)",
  });
});

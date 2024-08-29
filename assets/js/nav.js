window.addEventListener("resize", function () {
  var windowWidth = window.innerWidth;

  var desktop1 = document.querySelector(".desktop");
  var mobile1 = document.querySelector(".mobile");
  var desktop2 = document.querySelector(".desktop2");
  var mobile2 = document.querySelector(".mobile2");
  var desktop3 = document.querySelector(".desktop3");
  var mobile3 = document.querySelector(".mobile3");
  var desktop4 = document.querySelector(".desktop4");
  var mobile4 = document.querySelector(".mobile4");
  var desktop5 = document.querySelector(".desktop5");
  var mobile5 = document.querySelector(".mobile5");

  var navDesktop = document.querySelector(".navDesktop");
  var mobileDesktop = document.querySelector(".mobileDesktop");

  if (windowWidth <= 991) {
    navDesktop.style.display = "none";
    mobileDesktop.style.display = "flex";
  } else {
    mobileDesktop.style.display = "none";
    navDesktop.style.display = "flex";
  }

  if (windowWidth <= 768) {
    desktop5.style.display = "none";
    mobile5.style.display = "flex";
    desktop1.style.display = "none";
    mobile1.style.display = "flex";
    desktop2.style.display = "none";
    mobile2.style.display = "flex";
    desktop3.style.display = "none";
    mobile3.style.display = "flex";
    desktop4.style.display = "none";
    mobile4.style.display = "flex";

    tl.to(".gsap-img", {
      scale: 0.85,
    });
  } else {
    desktop5.style.display = "flex";
    mobile5.style.display = "none";
    desktop1.style.display = "flex";
    mobile1.style.display = "none";
    desktop2.style.display = "flex";
    mobile2.style.display = "none";
    desktop3.style.display = "flex";
    mobile3.style.display = "none";
    desktop4.style.display = "flex";
    mobile4.style.display = "none";
    tl.to(".gsap-img", {
      scale: 0.65,
    });
  }
});

window.dispatchEvent(new Event("resize"));

window.addEventListener("load", function () {
  var windowWidth = window.innerWidth;

  var desktop1 = document.querySelector(".desktop");
  var mobile1 = document.querySelector(".mobile");
  var desktop2 = document.querySelector(".desktop2");
  var mobile2 = document.querySelector(".mobile2");
  var desktop3 = document.querySelector(".desktop3");
  var mobile3 = document.querySelector(".mobile3");
  var desktop4 = document.querySelector(".desktop4");
  var mobile4 = document.querySelector(".mobile4");
  var desktop5 = document.querySelector(".desktop5");
  var mobile5 = document.querySelector(".mobile5");

  var navDesktop = document.querySelector(".navDesktop");
  var mobileDesktop = document.querySelector(".mobileDesktop");

  if (windowWidth <= 991) {
    navDesktop.style.display = "none";
    mobileDesktop.style.display = "flex";
  } else {
    mobileDesktop.style.display = "none";
    navDesktop.style.display = "flex";
  }

  if (windowWidth <= 768) {
    desktop5.style.display = "none";
    mobile5.style.display = "flex";
    desktop1.style.display = "none";
    mobile1.style.display = "flex";
    desktop2.style.display = "none";
    mobile2.style.display = "flex";
    desktop3.style.display = "none";
    mobile3.style.display = "flex";
    desktop4.style.display = "none";
    mobile4.style.display = "flex";

    tl.to(".gsap-img", {
      scale: 0.85,
    });
  } else {
    desktop5.style.display = "flex";
    mobile5.style.display = "none";
    desktop1.style.display = "flex";
    mobile1.style.display = "none";
    desktop2.style.display = "flex";
    mobile2.style.display = "none";
    desktop3.style.display = "flex";
    mobile3.style.display = "none";
    desktop4.style.display = "flex";
    mobile4.style.display = "none";
    tl.to(".gsap-img", {
      scale: 0.65,
    });
  }
});
const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.style.display = "block";
	logoLight.style.display = "none";
};

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.style.display = "none";
	logoLight.style.display = "block";
};

const openMenu = (event) => {
  menu.classList.add("is-open");
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden";
  lightModeOn();
};

const closeMenu = (event) => {
  menu.classList.remove("is-open");
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = "";
  lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper(".swiper", {
  speed: 400,
  autoHeight: false,
  slidesPerView: 1,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1.6,
    },
    475: {
      slidesPerView: 1.9,
    },
    576: {
      slidesPerView: 2.4,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 5,
    },
  },
});

const swiperSteps = new Swiper(".swiper.swiper-steps", {
  speed: 400,
  autoHeight: false,
  slidesPerView: 1.5,
  navigation: {
    nextEl: ".swiper-steps .slider-button-next",
    prevEl: ".swiper-steps .slider-button-prev",
  },
  breakpoints: {
    576: {
      slidesPerView: 1.3,
    },
    768: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 2.5,
    },
    1024: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  },
});

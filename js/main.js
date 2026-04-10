const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
};

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
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
  this.scrollY > 1 ? changeNavHeight("48px") : changeNavHeight("68px");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper(".header-features-slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".features-button-next",
    prevEl: ".features-button-prev",
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

const swiperSteps = new Swiper(".steps-slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1.3,
    },
    576: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  slidesPerView: 1,
  spaceBetween: 0,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
  },
});

const modal = document.querySelector(".modal");
const modalSuccess = document.querySelector(".modal-success");
const modalDialog = document.querySelector(".modal-dialog");
const ctaForm = document.querySelector(".cta-form");

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }

  if (
    event.target.dataset.toggle == "modal-success" ||
    event.target.parentNode.dataset.toggle == "modal-success" ||
    (!event.composedPath().includes(modalDialog) &&
      modalSuccess.classList.contains("is-open"))
  ) {
    ctaForm.reset();
    event.preventDefault();
    modalSuccess.classList.toggle("is-open");
  }
});

document.addEventListener("keyup", function (event) {
  if (event.key === "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }

  if (event.key === "Escape" && modalSuccess.classList.contains("is-open")) {
    modalSuccess.classList.toggle("is-open");
  }
});

const phoneInputs = document.querySelectorAll("[name=userphone]");
phoneInputs.forEach((phoneInput) => {
  let phoneMask = IMask(phoneInput, {
    mask: "+{7} (000) 000-00-00",
  });
});

const forms = document.querySelectorAll("form");
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });

  validation
    .addField("[name=username]", [
      {
        rule: "required",
        errorMessage: "Укажите имя",
      },
      {
        rule: "maxLength",
        value: 50,
        errorMessage: "Максимально 50 символов",
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите телефон",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target;
      const formData = new FormData(thisForm);
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((response) => {
          console.log(response);
          if (response.ok) {
            thisForm.reset();
          } else {
            alert("Ошибка. Текст ошибки: ".response.statusText);
          }
        });
      };

      ajaxSend(formData);
    });
});

const wrapper = document.querySelector(".wrapper");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");
const btnPopup = document.querySelector(".btnLogin-popup");
const iconClose = document.querySelector(".icon-close");
const homeLink = document.querySelector(".home-link");
const aboutusLink = document.querySelector(".aboutus-link");

registerLink.addEventListener("click", () => {
  wrapper.classList.add("active");
});

loginLink.addEventListener("click", () => {
  wrapper.classList.remove("active");
});
btnPopup.addEventListener("click", () => {
  wrapper.classList.add("active-popup");
});
iconClose.addEventListener("click", () => {
  wrapper.classList.remove("active-popup");
});
homeLink.addEventListener("click", () => {
  wrapper.classList.remove("active-popup");
});
aboutusLink.addEventListener("click", () => {
  wrapper.classList.remove("active-popup");
});

const password = document.getElementById("password");
const pass = document.getElementById("pass");
const eyeIcon = document.getElementById("toggle");

function showHideone() {
  if (password.type === "password") {
    password.setAttribute("type", "text");
    eyeIcon.classList.add("hide");
  } else {
    password.setAttribute("type", "password");
    eyeIcon.classList.remove("hide");
  }
}
function showHidetwo() {
  if (pass.type === "password") {
    pass.setAttribute("type", "text");
    eyeIcon.classList.add("hide");
  } else {
    pass.setAttribute("type", "password");
    eyeIcon.classList.remove("hide");
  }
}

function handleScroll() {
  var navbar = document.getElementById("navbar");

  // Check if the user has scrolled down enough to hide the navbar
  if (window.pageYOffset > 50) {
    navbar.classList.add("hide1");
  } else {
    navbar.classList.remove("hide1");
  }
}

// Add scroll event listener
window.addEventListener("scroll", handleScroll);

function handleScroll() {
  var navbar = document.getElementById("navbar");

  // Check if the user has scrolled down enough to hide the navbar
  if (window.scrollY > 70) {
    navbar.classList.add("hide1");
  } else {
    navbar.classList.remove("hide1");
  }
}

// Add scroll event listener
window.addEventListener("scroll", handleScroll);

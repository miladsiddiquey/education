/** @format */

const preloader = document.querySelector(".preloader");

window.addEventListener("load", () => {
  preloader.classList.add("active");
});

window.addEventListener("scroll", function () {
  const header = document.querySelector(".main-header");
  if (this.scrollY >= 1) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
});

// ====================== menu bar ===========================

const menuBar = document.querySelector("#menu-bar");
const menuContent = document.querySelector(".main-header-content-nav");
menuBar.onclick = () => {
  menuContent.classList.toggle("active");
  menuBar.classList.toggle("fa-xmark");
};
window.onscroll = () => {
  menuContent.classList.remove("active");
  menuBar.classList.remove("fa-xmark");
};

// ====================== menu bar end ===========================

/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
var height = window.screen.availHeight;
var faders = document.querySelectorAll(".fadeInUp");
var options = {
  root: null,
  threshold: 0.25,
  rootMargin: "-100px"
};
var observer = new IntersectionObserver(function (entries, observer) {
  entries.forEach(function (entry) {
    if (!entry.isIntersecting) {
      return;
    }

    console.log(entry.target);
    entry.target.classList.add("faded");
    observer.unobserve(entry.target);
  });
}, options);
faders.forEach(function (fadeInUp) {
  observer.observe(fadeInUp);
});
/******/ })()
;
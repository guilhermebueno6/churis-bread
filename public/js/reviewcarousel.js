/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/js/reviewcarousel.js ***!
  \****************************************/
// Carousel for Desktop
var carousel = document.querySelector('.reviewCarousel'),
    next = document.querySelector('.fa-chevron-right'),
    prev = document.querySelector('.fa-chevron-left'),
    re = /[a-zA-Z]+\(.*%\)/;
var viewportWidth = window.innerWidth;

function handleResetPrev() {
  pctg = carousel.style.transform;
  midpctg = pctg.replace('translateX(', '');
  newpctg = midpctg.replace('%)', '');
  console.log(newpctg == 90);

  if (newpctg == 90) {
    carousel.style.transform = 'translateX(30%)';
  } else {
    //for xl desktop (1800px+)
    newpctg = Number(newpctg) + 30;
    console.log(newpctg);
    carousel.style.transform = 'translateX(' + newpctg + '%)';
  }
}

function handleResetNext() {
  pctg = carousel.style.transform;
  midpctg = pctg.replace('translateX(', '');
  newpctg = midpctg.replace('%)', '');
  console.log(newpctg == -90);

  if (newpctg == -90) {
    carousel.style.transform = 'translateX(-30%)';
  } else {
    newpctg = Number(newpctg) - 30;
    console.log(newpctg);
    carousel.style.transform = 'translateX(' + newpctg + '%)';
  }
}

prev.addEventListener('click', handleResetPrev);
next.addEventListener('click', handleResetNext);
/******/ })()
;
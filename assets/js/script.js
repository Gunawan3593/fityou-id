// Navbar Fixed
window.onscroll = function() {
  const header = document.querySelector('header');
  const fixedNav = header.offsetTop;


  if(window.pageYOffset > fixedNav) {
    header.classList.add('navbar-fixed');
  } else {
    header.classList.remove('navbar-fixed');
  }
} 

// Hamburger

const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function() {
  hamburger.classList.toggle('hamburger-active');
  navMenu.classList.toggle('hidden');
});

const timer = ms => new Promise(res => setTimeout(res, ms));
const currentSlider = document.querySelector('span#current-slider');
let i = 1;

async function runSlider() {
  while(true) {
    currentSlider.textContent = i;
    const slider = document.querySelector(`div#slider-image>img:nth-child(${i})`);
    slider.classList.remove('hidden');
    slider.classList.remove('animate-fade-out-right');
    slider.classList.remove('animate-fade-in-right');
    slider.classList.add('animate-fade-in-right');

    if(i > 1) {
      const prevSlider = document.querySelector(`div#slider-image>img:nth-child(${i-1})`);
      prevSlider.classList.remove('animate-fade-in-right');
      prevSlider.classList.add('animate-fade-out-right');
      await timer(3000);
      prevSlider.classList.add('hidden');
    }
    else if(i === 1) {
      const prevSlider = document.querySelector(`div#slider-image>img:nth-child(3)`);
      prevSlider.classList.remove('animate-fade-in-right');
      prevSlider.classList.add('animate-fade-out-right');
      await timer(3000);
      prevSlider.classList.add('hidden');
    }

    if(i === 3) {
      i = 1;
    } else {
      i++;
    }
    await timer(6000);
  }
}

runSlider();


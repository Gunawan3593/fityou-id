// Navbar Fixed
window.onscroll = function() {
  const header = document.querySelector('header');
  const fixedNav = header.offsetTop;
  const toTop = document.querySelector('#to-top');

  if(window.pageYOffset > fixedNav) {
    header.classList.add('navbar-fixed');
    toTop.classList.remove('hidden');
    toTop.classList.add('flex');
  } else {
    header.classList.remove('navbar-fixed');
    toTop.classList.add('hidden');
    toTop.classList.remove('flex');
  }
} 

// Hamburger

const hamburger = document.querySelector('#hamburger');
const hamburgerLineTop = document.querySelector('#hamburger-line-top');
const hamburgerLineMid = document.querySelector('#hamburger-line-mid');
const hamburgerLineBottom = document.querySelector('#hamburger-line-bottom');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function() {
  hamburger.classList.toggle('hamburger-active');
  navMenu.classList.toggle('hidden');
});

const timer = ms => new Promise(res => setTimeout(res, ms));
const currentSlider = document.querySelector('span#current-slider');
let i = 1;
let isLoading = false;

let autoSlider = setInterval(() => { 
  navSlider(true, i); 
}, 6000);

async function navSlider(next = false, index) {
  isLoading = true;
  if(next) {
    let nextIndex = 0;
    if(index === 3) {
      nextIndex = 1;
      i = 1;
    } else {
      nextIndex = index + 1;
      i++;
    }
    currentSlider.textContent = nextIndex;
    const prevSlider = document.querySelector(`div#slider-image>img:nth-child(${index})`);
    const prevCaption = document.querySelector(`div#slider-caption>p:nth-child(${index})`);
    prevSlider.classList.remove('animate-slide-in-right');
    prevCaption.classList.remove('animate-slide-in-up');
    prevSlider.classList.add('animate-slide-out-right');
    prevCaption.classList.add('animate-slide-out-up');

    const slider = document.querySelector(`div#slider-image>img:nth-child(${nextIndex})`);
    const caption = document.querySelector(`div#slider-caption>p:nth-child(${nextIndex})`);
    slider.classList.remove('hidden');
    caption.classList.remove('hidden');
    slider.classList.remove('animate-slide-out-right');
    caption.classList.remove('animate-slide-out-up');
    slider.classList.add('animate-slide-in-right');
    caption.classList.add('animate-slide-in-up');

    await timer(1000);
    prevSlider.classList.add('hidden');
    prevCaption.classList.add('hidden');
  } else {
    let nextIndex = 0;
    if(index === 1) {
      nextIndex = 3;
      i = 3;
    } else {
      nextIndex = index - 1;
      i--;
    }
    currentSlider.textContent = nextIndex;
    const slider = document.querySelector(`div#slider-image>img:nth-child(${nextIndex})`);
    const caption = document.querySelector(`div#slider-caption>p:nth-child(${nextIndex})`);
    slider.classList.remove('hidden');
    caption.classList.remove('hidden');
    slider.classList.remove('animate-slide-out-right');
    caption.classList.remove('animate-slide-out-up');
    slider.classList.add('animate-slide-in-right');
    caption.classList.add('animate-slide-in-up');

    const prevSlider = document.querySelector(`div#slider-image>img:nth-child(${index})`);
    const prevCaption = document.querySelector(`div#slider-caption>p:nth-child(${index})`);
    prevSlider.classList.remove('animate-slide-in-right');
    prevCaption.classList.remove('animate-slide-in-up');
    prevSlider.classList.add('animate-slide-out-right');
    prevCaption.classList.add('animate-slide-out-up');
    await timer(1000);
    prevSlider.classList.toggle('hidden');
    prevCaption.classList.toggle('hidden');
  }
  isLoading = false;
}

const btnNextSlider = document.querySelector('#btnNextSlider');
const btnPrevSlider = document.querySelector('#btnPrevSlider');

btnNextSlider.addEventListener('click', () => {
  if (isLoading) return;
  clearInterval(autoSlider);
  navSlider(true, i);
  autoSlider = setInterval(() => { 
    navSlider(true, i); 
  }, 6000);
});

btnPrevSlider.addEventListener('click', async () => {
  if (isLoading) return;
  clearInterval(autoSlider);
  navSlider(false, i);
  autoSlider = setInterval(() => { 
    navSlider(true, i); 
  }, 6000);
});


const currentService = document.querySelector('span#current-service');
serviceIndex = 1;

function navService(next = false, index) {
  if(next) {
    let nextIndex = 0;
    if(index === 3) {
      nextIndex = 1;
      serviceIndex = 1;
    } else {
      nextIndex = index + 1;
      serviceIndex++;
    }
    currentService.textContent = nextIndex;
    
    const slider = document.querySelector(`div#service-image>img:nth-child(${nextIndex})`);
    const caption = document.querySelector(`div#service-desc>div:nth-child(${nextIndex})`);
    slider.classList.remove('hidden');
    caption.classList.remove('hidden');

    const prevSlider = document.querySelector(`div#service-image>img:nth-child(${index})`);
    const prevCaption = document.querySelector(`div#service-desc>div:nth-child(${index})`);
    prevSlider.classList.add('hidden');
    prevCaption.classList.add('hidden');
  } else {
    let nextIndex = 0;
    if(index === 1) {
      nextIndex = 3;
      serviceIndex = 3;
    } else {
      nextIndex = index - 1;
      serviceIndex--;
    }
    currentService.textContent = nextIndex;
    const slider = document.querySelector(`div#service-image>img:nth-child(${nextIndex})`);
    const caption = document.querySelector(`div#service-desc>div:nth-child(${nextIndex})`);
    slider.classList.remove('hidden');
    caption.classList.remove('hidden');

    const prevSlider = document.querySelector(`div#service-image>img:nth-child(${index})`);
    const prevCaption = document.querySelector(`div#service-desc>div:nth-child(${index})`);
    prevSlider.classList.add('hidden');
    prevCaption.classList.add('hidden');
  }
}

// click out humberger
window.addEventListener('click', function(e) {
  if(e.target !== hamburger && e.target !== navMenu && e.target !== hamburgerLineTop && e.target !== hamburgerLineMid && e.target !== hamburgerLineBottom ) {
    hamburger.classList.remove('hamburger-active');
    navMenu.classList.add('hidden');
  }
});

const btnNextService = document.querySelector('#btnNextService');
const btnPrevService = document.querySelector('#btnPrevService');

btnNextService.addEventListener('click', () => {
  navService(true, serviceIndex);
});

btnPrevService.addEventListener('click', () => {
  navService(false, serviceIndex);
});


// Dark Toggle
const darkToggle = document.querySelector('#dark-toggle');
const html = document.querySelector('html');

darkToggle.addEventListener('click', function() {
  if(darkToggle.checked) {
    html.classList.add('dark');
    localStorage.theme = 'dark';
  } else {
    html.classList.remove('dark');
    localStorage.theme = 'light';
  }
});

// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  html.classList.add('dark');
  darkToggle.checked = true;
} else {
  html.classList.remove('dark');
  darkToggle.checked = false;
}

// Polling for the sake of my intern tests
const interval = setInterval(function() {
  if(document.readyState === 'complete') {
      clearInterval(interval);
      document.body.classList.toggle('scroll-hidden');
      const loadingPage = document.querySelector('#loading-page');
      loadingPage.classList.add('hidden');
  }    
}, 100);
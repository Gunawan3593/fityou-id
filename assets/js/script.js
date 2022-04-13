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


const btnNextService = document.querySelector('#btnNextService');
const btnPrevService = document.querySelector('#btnPrevService');

btnNextService.addEventListener('click', () => {
  navService(true, serviceIndex);
});

btnPrevService.addEventListener('click', () => {
  navService(false, serviceIndex);
});
import $ from 'jquery';
import 'focus-visible';
import 'lazysizes';
import '@accessible360/accessible-slick';
import A11yDialog from 'a11y-dialog';
import initTabs from './init/initTabs';
import prefersReducedMotion from './util/prefersReducedMotion';

document.addEventListener('DOMContentLoaded', () => {
  const tablists = document.querySelectorAll('.tabs');
  if (tablists.length) {
    tablists.forEach(tablist => {
      initTabs(tablist);
    });
  }

  const letterContainer = document.getElementById('letter-dialog');
  const letterDialog = new A11yDialog(letterContainer);
  letterDialog.on('show', () => (document.body.style.overflowY = 'hidden'));
  letterDialog.on('hide', () => (document.body.style.overflowY = ''));

  const sliders = document.querySelectorAll('.slider');
  if (sliders.length) {
    sliders.forEach(slider => {
      $(slider).slick({
        arrows: true,
        arrowsPlacement: 'afterSlides',
        adaptiveHeight: true,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        nextArrow: '<button class="slick-next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M27 22L5 44l-2.1-2.1L22.8 22 2.9 2.1 5 0l22 22z"></path></svg><span class="slick-sr-only">Next</span></button>',
        prevArrow: '<button class="slick-prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M27 22L5 44l-2.1-2.1L22.8 22 2.9 2.1 5 0l22 22z"></path></svg><span class="slick-sr-only">Previous</span></button>',
        speed: prefersReducedMotion() ? 0 : 300,
        infinite: true,
        mobileFirst: true,
      });
    });
  }
});

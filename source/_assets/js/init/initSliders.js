import $ from 'jquery';
import prefersReducedMotion from '../util/prefersReducedMotion';

/**
 * Initialize Accessible Slick sliders.
 *
 * @param array sliders
 */
const initSliders = (sliders) => {
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

  // Refresh sliders on tab expand.
  const tabElems = document.querySelectorAll('.tabs button[role="tab"]');
  tabElems.forEach(tabElem => {
    tabElem.addEventListener('click', () => {
      sliders.forEach(slider => {
        $(slider).slick('refresh');
      });
    });
  });
}

export default initSliders;

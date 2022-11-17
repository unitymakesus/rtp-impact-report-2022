import 'focus-visible';
import 'lazysizes';
import '@accessible360/accessible-slick';
import A11yDialog from 'a11y-dialog';
import Plyr from 'plyr';
import initTabs from './init/initTabs';
import initSliders from './init/initSliders';

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
    initSliders(sliders);
  }

  const players = Array.from(document.querySelectorAll('.plyr__video-embed')).map(player => new Plyr(player));
});

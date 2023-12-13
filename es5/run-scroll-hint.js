/* --------------------------------------------------
  scroll hint
-------------------------------------------------- */
window.onload = function () {
  new ScrollHint('.js-scrollable', {
    i18n: {
      scrollable: '',
      scrollHintIconAppendClass: 'scroll-hint-icon-white',
    }
  });
}
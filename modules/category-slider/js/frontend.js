jQuery(() => {
  jQuery('.flexbox-cat-slider').bxSlider({
    mode: 'horizontal',
    adaptiveHeight: true,
    auto: true,
    pause: 8000,
    pagerSelector: "#flexbelt-cat-pager",
    nextSelector: "#flexbelt-cat-controls",
    prevSelector: "#flexbelt-cat-controls",
    minSlides: 1,
    maxSlides: 3,
    slideWidth: 800,
    shrinkItems: 1,
    nextText: '',
    prevText: ''
  });
});
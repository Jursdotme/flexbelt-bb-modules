jQuery(() => {
  jQuery('.flexbox-cat-slider').bxSlider({
    mode: 'horizontal',
    adaptiveHeight: true,
    auto: false,
    pause: 8000,
    pagerSelector: "#flexbelt-cat-pager",
    nextSelector: "#flexbelt-cat-arrows",
    prevSelector: "#flexbelt-cat-arrows",
    minSlides: 3,
    maxSlides: 3,
    slideWidth: 800,
    shrinkItems: 1,
    nextText: '',
    prevText: '',
    pager: true,
    moveSlides: 1
  });
});
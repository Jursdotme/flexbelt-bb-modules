jQuery(() => {
  jQuery('.flexbox-hero-slider').bxSlider({
    mode: 'horizontal',
    adaptiveHeight: true,
    auto: false,
    pause: 8000,
    pagerSelector: "#flexbelt-hero-pager",
    // nextSelector: "#flexbelt-hero-controls",
    // prevSelector: "#flexbelt-hero-controls",
    nextText: '',
    prevText: ''
  });
});

<?php
 function renderHero($img ,$color)
{
echo "<div class=\"hero\" style=\"background-color:{$color};\">
      <div class=\"img\" style=\"background-image:url('${img}')\">

      </div>
    </div>";
};



 function renderTitles($first,$second)
{
  echo "    <h2 class=\"proj-name\">{$first}</h2>
      <h4 class=\"techs\">{$second}</h4>";
};

 function renderBtns($live,$link,$text)


{
  $btn_text = 'View Live Copy';
  $btn_atrr ="href=\"{$link}\" target=\"_blank\"";
  if(!$live){
    $btn_text = 'View Gallery';
  }


  echo "  <div class=\"btns\">
      <div class=\"btn hvr-bounce-to-bottom\">
        View Repository
      </div>
      <div class=\"btn hvr-bounce-to-bottom read-btn\">
        Read More
      </div>
      <a class=\"btn hvr-bounce-to-bottom gallery-btn\" {$btn_atrr}  >
        {$btn_text}
      </a>
    </div>
    <div class=\"desc\">
      {$text}
    </div>";
}

 function renderSlider()
{
  echo "
      <!-- Root element of PhotoSwipe. Must have class pswp. -->
      <div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">

          <!-- Background of PhotoSwipe.
               It's a separate element as animating opacity is faster than rgba(). -->
          <div class=\"pswp__bg\"></div>

          <!-- Slides wrapper with overflow:hidden. -->
          <div class=\"pswp__scroll-wrap\">

              <!-- Container that holds slides.
                  PhotoSwipe keeps only 3 of them in the DOM to save memory.
                  Don't modify these 3 pswp__item elements, data is added later on. -->
              <div class=\"pswp__container\">
                  <div class=\"pswp__item\"></div>
                  <div class=\"pswp__item\"></div>
                  <div class=\"pswp__item\"></div>
              </div>

              <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
              <div class=\"pswp__ui pswp__ui--hidden\">

                  <div class=\"pswp__top-bar\">

                      <!--  Controls are self-explanatory. Order can be changed. -->

                      <div class=\"pswp__counter\"></div>

                      <button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button>

                      <button class=\"pswp__button pswp__button--share\" title=\"Share\"></button>

                      <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"></button>

                      <button class=\"pswp__button pswp__button--zoom\" title=\"Zoom in/out\"></button>
                      <!-- element will get class pswp__preloader--active when preloader is running -->
                      <div class=\"pswp__preloader\">
                          <div class=\"pswp__preloader__icn\">
                            <div class=\"pswp__preloader__cut\">
                              <div class=\"pswp__preloader__donut\"></div>
                            </div>
                          </div>
                      </div>
                  </div>

                  <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
                      <div class=\"pswp__share-tooltip\"></div>
                  </div>

                  <button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\">
                  </button>

                  <button class=\"pswp__button pswp__button--arrow--right\" title=\"Next (arrow right)\">
                  </button>

                  <div class=\"pswp__caption\">
                      <div class=\"pswp__caption__center\"></div>
                  </div>

              </div>

          </div>

      </div>";
}

 function renderSliderScript($obj)
{
echo "  $(\".gallery-btn\").click(()=>{

  var pswpElement = document.querySelectorAll('.pswp')[0];

  // build items array
  var items = {$obj};
  //   [  {
  //         src: 'assets/projects/bc.svg',
  //         w: 900,
  //         h: 1200
  //     },
  //     {
  //         src: 'assets/projects/bh.svg',
  //         w: 1200,
  //         h: 900
  //     }
  // ];

  // define options (if needed)
  var options = {
      // optionName: 'option value'
      // for example:
      index: 0 // start at first slide
  };

  // Initializes and opens PhotoSwipe
  var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
  gallery.init();
  });";



}


 ?>
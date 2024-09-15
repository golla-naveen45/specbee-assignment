(function ($, Drupal) {
  $.fn.once = function (key) {
    if (this.data(key)) {
      return this;
    }
    this.data(key, true);
    return this;
  };

})(jQuery, Drupal);

(function ($, Drupal) {
  Drupal.behaviors.tabsBehavior = {
    attach: function (context, settings) {
      const initializedTabs = {}; 
      function initSlickSlider(content) {
        const $content = $(content);
        if (!$content.hasClass('slick-initialized')) {
          $content.slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2,
                  infinite: true,
                  dots: false,
                  arrows: true,
                },
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: false,
                  dots: true,
                },
              },
              {
                breakpoint: 325,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: false,
                },
              },
            ],
          });
        }
      }

      function updateSlickSlider(content) {
        const $content = $(content);
        if ($content.hasClass('slick-initialized')) {
          $content.slick('setPosition');
          $content.slick('refresh');
        }
      }

      $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
        const target = $(e.target).attr('data-bs-target'); 
        const tabContent = $(target).find('.view-content'); 

        if (!initializedTabs[target]) {
          initSlickSlider(tabContent); 
          initializedTabs[target] = true; 
        } else {
          updateSlickSlider(tabContent);
        }
      });

      const activeTabContent = $('#home .view-content');
      initSlickSlider(activeTabContent);
      initializedTabs['#home'] = true;
    },
  };
})(jQuery, Drupal);

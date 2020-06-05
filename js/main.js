/* MAIN JS FILE */
(function ($) {
  var menuBtn = $('.nav__burger-icon');
  menuBtn.click(toggleMenu);
})(jQuery);

// * TOGGLE MENU
var nav = $('.nav__links');
var menuOpened = false;
var items = '.nav__item';

function toggleMenu() {
  if (!menuOpened) {
    nav.css('display', 'flex');
    nav.animate(
      {
        opacity: '1',
        height: '35rem'
      },
      {
        duration: 300,
        complete: function () {
          menuOpened = true;
        }
      }
    );
  } else {
    nav.animate(
      {
        opacity: '0',
        height: '0'
      },
      {
        duration: 300,
        complete: function () {
          nav.css('display', 'none');
          menuOpened = false;
        }
      }
    );
  }
}

$(window)
  .bind('resize', function () {
    console.log($(this).width());
    if ($(this).width() > 600) {
      nav.attr('style', function (i, style) {
        return style && style.replace(/display[^;]+;?/g, '');
      });
      nav.attr('style', function (i, style) {
        return style && style.replace(/opacity[^;]+;?/g, '');
      });
      nav.attr('style', function (i, style) {
        return style && style.replace(/height[^;]+;?/g, '');
      });
    }
  })
  .trigger('resize');

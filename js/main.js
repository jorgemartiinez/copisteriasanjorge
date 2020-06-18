/* MAIN JS FILE */
(function ($) {
  $('.lazy').Lazy({
    scrollDirection: 'vertical',
    effect: 'fadeIn',
    visibleOnly: true,
    onError: function (element) {
      console.log('error loading ' + element.data('src'));
    }
  });
  var menuBtn = $('.nav__burger-icon');
  menuBtn.click(toggleMenu);
})(jQuery);

// * TOGGLE MENU
var menuIcon = $('.nav__burger-icon');
var nav = $('.nav__links');
var menuOpened = false;
var items = '.nav__item';

function toggleMenu() {
  var ruta = menuIcon.attr("src");

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
          ruta = ruta.split('/').slice(0,-1).join('/') + '/cross-icon.svg';
          menuIcon.attr("src", ruta);
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
          ruta = ruta.split('/').slice(0,-1).join('/') + '/burger-icon.svg';
          menuIcon.attr("src", ruta);
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

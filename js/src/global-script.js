/*
    Use the command "npm install" in the theme directory to install these packages
    Make sure to use
    npm run dev
    to start the server
*/

import $ from 'jquery';

import 'slick-carousel/slick/slick';
import lozad from 'lozad'

// core version + navigation, pagination modules:
import Swiper from '../../node_modules/swiper/js/swiper.js';

// remove /js/ in wp version

// configure Swiper to use modules
// Swiper.use([Navigation, Thumbs, Pagination, Autoplay]);

window.$ = $;
window.jQuery = $;


// lazy load
const observer = lozad(); // lazy loads elements with default selector as '.lozad'
observer.observe();
// slider
// ---------------------------------------------------------------------------------------------------

if ($('.mainslide').length) {
  var mainSlide = new Swiper('.mainslide', {
    // Optional parameters
    centeredSlides: true,
    slidesPerView: 1,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    loop: true,
    loopedSlides: 4,
    autoHeight: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
				var tabsName = ['Fertility & Contraception', 'Women’s Wellness Exams', 'Non-surgical Treatments', 'Diagnostic Services', ];
				if ( index === (tabsName.length - 1) ) {
          				return	'<span class="' + className + '">'
          						+ tabsName[index] + '</span>'
          						+ '<div class="active-mark "></div>';
				}
				return '<span class="' + className + '">' + tabsName[index] + '</span>';
      },
    }
  });

  // var topLink = new Swiper('.toplink', {
  //   // Optional parameters
  //   // centeredSlides: true,
  //   slidesPerView: 4,
  //   touchRatio: 0.2,
  //   slideToClickedSlide: true,
  //   navigation: {
  //     nextEl: '.swiper-button-next',
  //     prevEl: '.swiper-button-prev'
  //   },
  //   loop: true,
  //   loopedSlides: 4,
  //   loopPreventsSlide:true,
  // });
  // mainSlide.controller.control = topLink;
  // topLink.controller.control = mainSlide;
}

// Fade in animations
// ---------------------------------------------------------------------------------------------------
var callback = function() {
  // Handler when the DOM is fully loaded
  var t = document.querySelectorAll('.rvl');

  t.forEach(function(n) {
    n.getBoundingClientRect().top < window.innerHeight / 1.3 && n.classList.add('animate');
  });
};

if (document.readyState === 'complete' || (document.readyState !== 'loading' && !document.documentElement.doScroll)) {
  callback();
} else {
  document.addEventListener('DOMContentLoaded', callback);
}

function aniMate(n) {
  var t = document.querySelectorAll(n);

  window.addEventListener('scroll', function() {
    t.forEach(function(n) {
      n.getBoundingClientRect().top < window.innerHeight / 1.3 && n.classList.add('animate');
    });
  });
}

aniMate(
  '.rvl,.imageanimleft, .fade-up-stop , .fade-right-stop, .fade-left-stop ,.tanbox,.greybox .fade-in , .fade-in-left , .fade-in-right , .scale-down'
);

// Scroll to top button
// ---------------------------------------------------------------------------------------------------
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#scroll').fadeIn();
    } else {
      $('#scroll').fadeOut();
    }
  });
  $('#scroll').click(function() {
    $('html, body').animate({ scrollTop: 0 }, 600);
    return false;
  });
});

// Menu Functionality
// ---------------------------------------------------------------------------------------------------
$(document).ready(function() {
  let menuopen = false;

  $('.menu-button').click(function(e) {
    if (menuopen == false) {
      $('.hasdropdown').removeClass('activeitem');

      $(this).addClass('activeitem');
      $('.menu-text').text('Close');
      $('.navbaritems,#header-container').addClass('activemenu');

      menuopen = true;
    } else {
      $('.hasdropdown').addClass('activeitem');
      $('.menu-text').text('Menu');
      $(this).removeClass('activeitem');
      $('.navbaritems,#header-container').removeClass('activemenu');
      menuopen = false;
    }
  });

  if ($(window).width() > 992) {
  $.fn.accessibleDropDown = function() {
    var el = $(this);

    $('.hasdropdown  a', el)
      .focus(function() {
        $(this)
          .parents('.hasdropdown')
          .addClass('animamenu');
      })
      .blur(function() {
        $(this)
          .parents('.hasdropdown')
          .removeClass('animamenu');
      });
  };

  $('ul.items').accessibleDropDown();
}

  $('.closemenubutton').click(function(e) {
    $('.hasdropdown').addClass('activeitem');
    $('.menu-text').text('Menu');
    $(this).removeClass('activeitem');
    $('.navbaritems,#header-container').removeClass('activemenu');
    menuopen = false;
  });

  if ($(window).width() < 992) {
    $('.hasdropdown > a').click(function(e) {
      e.preventDefault();
    });
    $('.hasdropdown').click(function(e) {
      e.stopPropagation();
      $(this).toggleClass('animamenu');
    });
  }
});

// form submit
// ---------------------------------------------------------------------------------------------------
$('#schedule').submit(function(e) {
  e.preventDefault();
  var form = $(this);
  var form_results = $('#form-results');

  form_results.html(' ');
  form_results.removeClass('alert');
  form_results.removeClass('alert-error');
  form_results.removeClass('alert-success');

  form.find('.btn').prop('disabled', true);

  var errors = [];

  // Validation
  if (form.find('input[name=name]').val() == '') {
    errors.push('The name field is required');
  }
  if (form.find('input[name=email]').val() == '') {
    errors.push('The email field is required');
  }
  if (!form.find('select[name="preferred_day"]').val()) {
    errors.push('The day of the week field is required');
  }
  if (!form.find('select[name="preferred_time"]').val()) {
    errors.push('The time of day field is required');
  }

  if (errors.length > 0) {
    var error_html = '<ul class="mb-0">';
    form_results.addClass('alert');
    form_results.addClass('alert-info');

    $.each(errors, function(index, value) {
      error_html += '<li>' + value + '</li>';
    });
    error_html += '</ul>';

    form_results.html(error_html);
    form.find('.btn').prop('disabled', false);
    return false;
  }

  var data = {
    action: 'do_ajax',
    fn: 'schedule',
    data: form.serializeArray(),
    security: the_theme.ajax_nonce,
    siteurl: the_theme.url
  };

  $.post(the_theme.url + '/wp-admin/admin-ajax.php', data, function(response) {
    response = JSON.parse(response);

    console.log(response);

    $('#form-results').hide(0);

    $('.formpwrap').fadeOut(function() {
      form_results.append(response);
      setTimeout(function() {
        $('#form-results').fadeIn();
      }, 600);
    });

    $(form).each(function() {
      this.reset();
    });

    form.find('.btn').prop('disabled', false);

    if (response.type == 'success') {
      // window.location.href = the_theme.url + '/thank-you';
    }
  });
});
// form

// Load Images Async switch src attribute with data-lazysrc
// ---------------------------------------------------------------------------------------------------
function ReLoadImages() {
  $('img[data-lazysrc]').each(function() {
    $(this).attr('src', $(this).attr('data-lazysrc'));
  });
}
document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'interactive') {
    //or at "complete" if you want it to execute in the most last state of window.
    ReLoadImages();
  }
});

// scroll to
// ---------------------------------------------------------------------------------------------------
$('[data-scroll-to]').click(function(e) {
  var $this = $(this),
    $toElement = $this.attr('data-scroll-to'),
    $focusElement = $this.attr('data-scroll-focus'),
    $offset = $this.attr('data-scroll-offset') * 1 || 0,
    $speed = $this.attr('data-scroll-speed') * 1 || 500;

  e.preventDefault();

  $('html, body').animate(
    {
      scrollTop: $($toElement).offset().top + $offset
    },
    $speed
  );

  if ($focusElement) $($focusElement).focus();
});

// Aesthetic Laser Treatments

$(document).ready(function() {
  // const divstext = document.querySelectorAll('.text');
  // const imgitem = document.querySelectorAll('.imgitem');

  // divstext.forEach(el => el.addEventListener('mouseenter', event => {

  //   // remove active class
  //   [].forEach.call(document.querySelectorAll('.img-item'), function (el) {
  //     el.classList.remove('currentitem');
  //   });

  //   [].forEach.call(document.querySelectorAll('.text'), function (el) {
  //     el.classList.remove('currentitem');
  //   });

  //   el.classList.add('currentitem');

  //   let currentItem = event.target.getAttribute("data-lisitem");
  //   let dataitem = document.querySelectorAll('[data-contentitem="' + currentItem + '"]');

  //   // add active class
  //   dataitem[0].classList.add('currentitem');

  // }));

  $('.text').click(function(el) {
    $('.img-item').removeClass('currentitem');
    $('.text').removeClass('currentitem');
    $(this).addClass('currentitem');

    $('.img-item').attr('hidden', '');

    let currentItem = $(this).data('lisitem');

    $('[data-contentitem="' + currentItem + '"]').addClass('currentitem');
    $('[data-contentitem="' + currentItem + '"]').removeAttr('hidden');
  });

  $('.text').keydown(function(event) {
    var keyCode = event.keyCode ? event.keyCode : event.which;
    if (keyCode == 13) {
      $('.img-item').removeClass('currentitem');
      $('.text').removeClass('currentitem');
      $(this).addClass('currentitem');

      $(this)
        .siblings('button.hidden')
        .attr('hidden', '');

      $('.img-item').attr('hidden', '');

      let currentItem = $(this).data('lisitem');

      $('[data-contentitem="' + currentItem + '"]').removeAttr('hidden');

      $('[data-contentitem="' + currentItem + '"]').addClass('currentitem');
    }
  });

  // $('.text').focus(function() {
  //   $('.img-item').removeClass('currentitem');
  //   $('.text').removeClass('currentitem');
  //   $(this).addClass('currentitem');

  //   let currentItem = $(this).data('lisitem');

  //   $('[data-contentitem="' + currentItem + '"]').addClass('currentitem');
  // });
});

// $(document).ready(function() {
//   var onScroll = function() {
//     var scrollTop = $(this).scrollTop();
//     $('.welcome .img').each(function(index, elem) {
//       var $elem = $(elem);
//       $elem.find('.pic').css('top', scrollTop - $elem.offset().top );
//     });
//   };
//   onScroll.apply(window);
//   $(window).on('scroll', onScroll);
// });

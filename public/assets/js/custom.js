$(document).ready(function() {
  $(".grid-item-inner").hover(function() {
    $(this).toggleClass("box-hover");
    $(this).find('.item--readmore').slideToggle();
  });
});


var a = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },
        

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
        
    });
    a = 1;
  }

});


var swiper = new Swiper(".mySwiper", {
  direction: "vertical",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
});

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})


$(document).ready(function() {
  $("#menu-button").click(function() {
    $("body").toggleClass("activesidebar");
  });
});


let buttonToggle = () => {
  const button = document.getElementById("menu-button").classList,
    isopened = "is-opened";
  let isOpen = button.contains(isopened);
  if (isOpen) {
    button.remove(isopened);
  } else {
    button.add(isopened);
  }
}




// BY KAREN GRIGORYAN

$(document).ready(function() {
  /******************************
      BOTTOM SCROLL TOP BUTTON
   ******************************/

  // declare variable
  var scrollTop = $(".scrollTop");

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 100) {
      $(scrollTop).css("opacity", "1");

    } else {
      $(scrollTop).css("opacity", "0");
    }

  }); // scroll END

  //Click event to scroll to top
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;

  }); // click() scroll top EMD

  /*************************************
    LEFT MENU SMOOTH SCROLL ANIMATION
   *************************************/
  // declare variable
  var h1 = $("#h1").position();
  var h2 = $("#h2").position();
  var h3 = $("#h3").position();

  $('.link1').click(function() {
    $('html, body').animate({
      scrollTop: h1.top
    }, 500);
    return false;

  }); // left menu link2 click() scroll END

  $('.link2').click(function() {
    $('html, body').animate({
      scrollTop: h2.top
    }, 500);
    return false;

  }); // left menu link2 click() scroll END

  $('.link3').click(function() {
    $('html, body').animate({
      scrollTop: h3.top
    }, 500);
    return false;

  }); // left menu link3 click() scroll END

}); // ready() END




var swiper = new Swiper(".mySwiper_two", {
  slidesPerView: 2,
  spaceBetween: 5,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

var swiper = new Swiper(".mySwiper_two_there", {
  slidesPerView: 1,
  spaceBetween: 20,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    loop: true,
  },
  breakpoints: {
    
    767: {
      slidesPerView: 4,
      
    },
    575: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    370: {
      slidesPerView: 2,
      
    },
    
    
  },
});




(function($) {

  'use strict';

  $(document).on('show.bs.tab', '.nav-tabs-responsive [data-toggle="tab"]', function(e) {
    var $target = $(e.target);
    var $tabs = $target.closest('.nav-tabs-responsive');
    var $current = $target.closest('li');
    var $parent = $current.closest('li.dropdown');
    $current = $parent.length > 0 ? $parent : $current;
    var $next = $current.next();
    var $prev = $current.prev();
    var updateDropdownMenu = function($el, position) {
      $el
        .find('.dropdown-menu')
        .removeClass('pull-xs-left pull-xs-center pull-xs-right')
        .addClass('pull-xs-' + position);
    };

    $tabs.find('>li').removeClass('next prev');
    $prev.addClass('prev');
    $next.addClass('next');

    updateDropdownMenu($prev, 'left');
    updateDropdownMenu($current, 'center');
    updateDropdownMenu($next, 'right');
  });

})(jQuery);





var swiper = new Swiper('.footerswiper', {
  slidesPerView: 4,
  spaceBetween: 30,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1199: {
      slidesPerView: 3,
    },

    991: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 2,
    },
    575: {
      slidesPerView: 2,
    },
    320: {
      slidesPerView: 1,
    }
  },
  // Optional parameters
});

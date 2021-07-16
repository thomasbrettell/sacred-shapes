import $ from 'jquery'
import Swiper from 'swiper/bundle';
import GetCursorPosition from 'cursor-position'
import gsap from 'gsap'


$(document).ready(function () {
  $(".css-transitions-only-after-page-load").each(function (index, element) {
      setTimeout(function () { $(element).removeClass("css-transitions-only-after-page-load") }, 10);
  });
});

document.addEventListener('mousemove', () => {
  const {x, y} = GetCursorPosition({scroll: true});
  gsap.to("#pointer", {'top': y, 'left': x, duration: .5});
});

$('.hover-attr').attr('hover', true)

$('[hover]').mouseover(function() {
  $('#pointer').addClass('hover')
}).mouseout(function() {
  $('#pointer').removeClass('hover')
});

$('[data-text]').mouseover(function() {
  $('#pointer').addClass('text')
  $('#pointer').find('span').text($(this).data('text'))

  if($(this).data('text') === 'Scroll') {
    $('#pointer').find('.arrow.top').addClass('show')
    $('#pointer').find('.arrow.bottom').addClass('show')
  }

  if($(this).data('text') === 'Drag') {
    $('#pointer').find('.arrow.left').addClass('show')
    $('#pointer').find('.arrow.right').addClass('show')
  }
}).mouseout(function() {
  $('#pointer').removeClass('text')
  $('#pointer').find('span').text('')
  $('#pointer').find('.arrow').removeClass('show')
});

$('.grid-cell').click(function() {
  $('#modal-overlay').addClass('open')
})
$('#modal-overlay').click(function() {
  $(this).removeClass('open')
})


var collectionSwiper = new Swiper("#collections-swiper", {
  loop: true,
  speed: 500,
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },
  pagination: {
    el: '.swiper-pagination',
  },
  autoplay: {
    delay: 7500,
  },
});

$('#mobile-menu-toggler').click(function() {
  $(this).toggleClass('open')
  $('header').toggleClass('open')
})

$(window).resize(function(e) {
  if(e.target.innerWidth > 725) {
    $('#mobile-menu-toggler').removeClass('open')
    $('header').removeClass('open')
  }
})

$('.mobile-menu a').hover(function(e) {
  if(e.type === 'mouseenter') {
    $('.mobile-menu').css('background', $(e.target).data('bind'))
  } else {
    $('.mobile-menu').css('background', '')
  }
})

if($('body').hasClass('home')) {
  $('.scroll-container').scroll(function(e) {
    if($(e.target).scrollTop() >= $('section').height()/2) {
      $('.logo').removeClass('hidden')
    } else if($(e.target).scrollTop() < $('section').height()){
      $('.logo').addClass('hidden')
    }
  })
}
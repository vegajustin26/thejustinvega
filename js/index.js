const navbarLinks = document.querySelectorAll('.link-scroll a');
document.addEventListener('DOMContentLoaded', check());
var navbar = document.getElementsByClassName('navbar');
const navheight = $(navbar).height();
var index = 0;
var sticknavbar = document.getElementById('stickynavbar');
const portraitpath = "/img/Portfolio/portraitfinal/"
const landscapepath = "img/Portfolio/landscapefinal/"

if (document.getElementById('stickynavbar') != null) { // identifies if on homepage
  index = 1;
}

function check () { // Once DOM loaded
  navbarLinks.forEach(elem => elem.addEventListener('click', navbarLinkClick));
  if (document.getElementById('stickynavbar') != null) {
    document.getElementById('stickynavbar').style.display = 'none';
  }
}

if (document.URL.includes('photo')) { // checks if on portfolio site
  $('a[data-rel^=lightcase]').lightcase({
    swipe: true
  })
  jQuery(document).ready(function($) {
    $('a[data-rel^=lightcase]').lightcase();
  })

  var portraits = document.querySelectorAll('.left a') // preloads portraits
  for (i = 0; i < portraits.length; i++) {
    var url = portraits[i].href;
    var href = url.substring(url.lastIndexOf('/')+1);
    var my_image = new Image();
    my_image.src = (portraitpath + href);
  }

  var landscapes = document.querySelectorAll('.top-right a') // preloads landscapes
  for (i = 0; i < landscapes.length; i++) {
    var url = landscapes[i].href;
    var href = url.substring(url.lastIndexOf('/')+1);
    var my_image = new Image();
    my_image.src = (landscapepath + href);
  }
}

if ($(window).width() < 964) { // mobile video load
  videoload();
}

function videoload () { // changes YT video to <video>
  if (index === 1) {
    if (document.getElementById('site') != null) {
      document.getElementById('ifsplashvid').style.display = 'none';
      document.getElementById('splashvid').style.display = 'block';
    }
    else {
      if (document.getElementById('site') != null) {
        document.getElementById('ifsplashvid').style.display = 'block';
        document.getElementById('splashvid').style.display = 'none';
      }
    }
  }
}

function navbarLinkClick (event) {
  smoothScroll(event);
}

$(window).scroll(function () { // stickynavbar visibility
  if (index === 1) {
    if ($(window).width() > 964) {
      if($ (this).scrollTop() > navheight) {
        sticknavbar.style.display = 'inline';
      }}
    else {
      sticknavbar.style.display = 'none';
    }
}
})

function smoothScroll (event) { // scrolling function
  if (index === 1) {
    if(window.location.pathname === 'thejustinvega.com') {
    event.preventDefault();
    const stickheight = $(stickynavbar).height();
    const currentTarget = event.currentTarget.getAttribute('href');
    const targetId = currentTarget.substring(currentTarget.lastIndexOf('/') + 1, currentTarget[currentTarget.length]);
    const targetPosition = document.querySelector(targetId).offsetTop - stickheight;
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    const duration = 1000;
    let start = null;

    window.requestAnimationFrame(step);

  function step(timestamp) {
    if (!start) start = timestamp;
    const progress = timestamp - start;
    //window.scrollTo(0, distance*(progress/duration + startPosition));
    window.scrollTo(0, easeInOutQuad(progress, startPosition, distance, duration));
    if (progress < duration) window.requestAnimationFrame(step);
    }  }
  }
}
function easeInOutQuad(t, b, c, d) { // actual scroll-to function, quadratic transition
  t /= d/2;
  if (t < 1) return c/2*t*t + b;
  t--;
  return -c/2 * (t*(t-2) - 1) + b;
};

$(document).ready(function () {
  $('.hamburger').click(function () {
    $(this).toggleClass('is-active');
    toggleNav()
  })
})

if (document.getElementById('site') != null) { // tap body to close sidenav
  document.getElementById('site').addEventListener('click', close);
}

if (document.getElementById('photosite') != null) {
document.getElementById('photosite').addEventListener('click', close);
}

if (document.getElementById('contactsite') != null) {
document.getElementById('contactsite').addEventListener('click', close);
}

function toggleNav () { // toggles sidenav
  navSize = document.getElementById('mySideNav').style.width;
  if (navSize === '50vw') {
    return close()
  }
  else {
    return open()
  }
}

document.getElementById('mySideNav').addEventListener('click', function (event) {//bug fix
  if (event.target.href === '#about' || '#musica' || '#youtube') {
    document.getElementById("hamburger-1").classList.toggle('is-active')
    return close();
}
  else {
    window.$(event.currentTarget.getAttribute('href'));
  }
});

function open () {
  if (document.getElementById('site') != null) {
    document.getElementById('main').style.marginLeft = '50vw';
    document.getElementById('site').style.opacity = '0.5';
  }
  if (document.getElementById('photosite') != null) {
    document.getElementById('photomain').style.marginLeft = '50vw';
    document.getElementById('photosite').style.opacity = '0.5';
  }
  if (document.getElementById('contactsite') != null) {
    document.getElementById('contactmain').style.marginLeft = '50vw';
    document.getElementById('contactsite').style.opacity = '0.5';
  }
  document.getElementById('mySideNav').style.width = '50vw';
}
function close () {
  if (document.getElementById('site') != null) {
    document.getElementById('main').style.marginLeft = '0';
    document.getElementById('site').style.opacity = '1';
  }
  if (document.getElementById('photosite') != null) {
    document.getElementById('photomain').style.marginLeft = '0';
    document.getElementById('photosite').style.opacity = '1';
  }
  if (document.getElementById('contactsite') != null) {
    document.getElementById('contactmain').style.marginLeft = '0';
    document.getElementById('contactsite').style.opacity = '1';
  }
  document.getElementById('mySideNav').style.width = '0';
  document.getElementById('hamburger-1').classList.remove('is-active');
}

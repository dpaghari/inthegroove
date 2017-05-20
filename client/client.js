$(document).ready(function (){
  let $navIcon = $('.nav-icon');
  $navIcon.on('click', function () {
    $(this).toggleClass('open');
    $('.menu-container').toggleClass('active');
  });

  $('.img-carousel.gallery').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    dots: true
  });

  $('.img-carousel.team').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    // autoplay: true,
    // autoplaySpeed: 4000
  });




  // let $splash = document.querySelector('section.hero');
  // let heroWaypoint = new Waypoint({
  //   element: $splash,
  //   handler: function(direction) {
  //     if(direction === 'down')
  //     $splash.classList.add('wp-fadeup');
  //   }
  // });
  //
  //
  // let $project = document.querySelector('section.projects');
  // let projectWaypoint = new Waypoint({
  //   element: $project,
  //   handler: function(direction) {
  //     if(direction === 'down')
  //     $project.classList.add('wp-fadein');
  //   },
  //   offset: '35%'
  // });
  $('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash;
	    var $target = $(target);
	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing');
  });

});

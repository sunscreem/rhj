/* ==============================================
Back to Top
=============================================== */

$(window).scroll(function(){
		if($(window).scrollTop() > 300){

			$('#bs-example-navbar-collapse-1 li:first-child').removeClass('active');
		} else{

			$('#bs-example-navbar-collapse-1 li').removeClass('active');
			$('#bs-example-navbar-collapse-1 li:first-child').addClass('active');

		}
	});
	
	$('#back-to-top, .back-to-top').click(function() {
		  $('html, body').animate({ scrollTop:0 }, '1000');
		  return false;
	});


	$('.page-scroll a').bind('click', function(e){
			var anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top
			}, 1000);
			e.preventDefault();
		});

/* ==============================================
Contact Form
=============================================== */

jQuery(document).ready(function(){




	$('#contactform').submit(function(){

		var action = $(this).attr('action');

		$("#message").slideUp(750,function() {
		$('#message').hide();

 		$('#submit')
			.after('<img src="assets/img/ajax-loader.gif" class="loader" />')
			.attr('disabled','disabled');

		$.post(action, {
			name: $('#name').val(),
			email: $('#email').val(),
			phone: $('#phone').val(),
			comments: $('#comments').val(),
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform').slideUp('slow');

			}
		);

		});

		return false;

	});

		/* Gallery */

    // init Masonry
	var $grid = $('.grid').masonry({
	  itemSelector: '.grid-item',
	  percentPosition: true,
	  columnWidth: '.grid-sizer'
	});
	// layout Isotope after each image loads
	$grid.imagesLoaded().progress( function() {
	  $grid.masonry();
	});

	// magnificent popup lightbox (gallery mode)
	$('.gallery-link').magnificPopup({
	  type: 'image',
	  gallery:{
	    enabled:true
	  }
	});

});


 $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
        controlNav: false,
		directionNav: false, 
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });




//Twitter Usernam
var TWITTER_USERNAME = 'chocotemplates';

//Home Style 1 Carousel Callback
function mycarousel_initCallback(carousel) {

	$('.slider1 .carousel-next, .slider2 .carousel-up').bind('click', function() {
        carousel.next();
        return false;
    });

    $('.slider1 .carousel-prev, .slider2 .carousel-down').bind('click', function() {
        carousel.prev();
        return false;
    });
    
     $('.slider1 .slider-nav a').bind('click', function() {
        carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
        return false;
    });

};

function mycarousel_itemFirstInCallback(carousel, item, idx, state) {
	$('.slider1 .slider-nav ul li a').removeClass('active');
	$('.slider1 .slider-nav ul li a').eq(idx-1).addClass('active');
	
};


//jQuery Func
$(function(){ 

	if( $('.slider1').length > 0 || $('.slider2').length >0 ) {
		$('#header').attr('id', 'header-home');
	}
	
	//Png Fix for IE6
	if($.browser.msie && $.browser.version.substr(0,1) == 6){
		DD_belatedPNG.fix('#logo a, .navigation-l, .navigation-r, .navigation-cnt, .socials a, .dd-t, .dd-cnt, .dd-b, #screen, li.first, li.last, .navigation-cnt ul li .dd-holder .dd-cnt ul li.first a:hover, .navigation-cnt ul li .dd-holder .dd-cnt ul li.last a:hover, .entry h2.title, .view-project, .project-item .image-holder, .project-item, .arrow-left, .arrow-right, .magnifier, .gallery-classic li, .gallery-projects li,  .badge, .slider-holder, .carousel-prev, .carousel-next, .slider-btn, .slider-bar, .carousel-up, .carousel-down, #slider2-biglist li, .slider2 ul li img');
	};
	
	//easySlider Init
	easySlider();
	
	
	//Home Style 1 Carousel Init
	$('.slider1 .content ul').jcarousel({
		auto: 5,
		animation: 750,
		wrap: "both",
		scroll: 1,
		visible: 1,
		initCallback: mycarousel_initCallback,
        buttonNextHTML: null,
        buttonPrevHTML: null,
        itemFirstInCallback: mycarousel_itemFirstInCallback
	});
	
	//Home Style 1 Carousel Init
	$('.slider2 .content ul#slider2-biglist, .slider2 .slider-bar .content ul').jcarousel({
		auto: 5,
		vertical: true,
		animation: 750,
		wrap: "both",
		scroll: 1,
		visible: 1,
		initCallback: mycarousel_initCallback,
        buttonNextHTML: null,
        buttonPrevHTML: null
	});
	
	//Contact Form Submit Button Hover
	$('.contact-form .submit-btn').hover(function(){ 
		$(this).toggleClass('submit-btn-hover');
	 });

	//validation init
    $('.validate-form').submit(function() {
        var $form = $(this);
        var errors = false;

        $form.find('.required').removeClass('field-error');

        $form.find('.required').each(function(){
            if( $(this).val() == '' ){
                $(this).addClass('field-error');
                errors = true;
            } else if ( $(this).hasClass('valid-email') ) {
                reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                if(reg.test( $(this).val() ) == false){
                    $(this).addClass('field-error');
                    errors = true;
                }
            };
        });

        if (errors == true) {
        	$form.find('.msg-thanks').hide();
        	$form.find('.msg-alert').fadeIn();
        	return false;
        } else {
			var data = {}
			
			$form.find('.msg-alert').hide();
			$form.find('.field').each(function(){
				data[ $(this).attr('name') ] = $(this).val();
			});
			
			$form.find('.field').attr({ 'value': '' });
			$('#message-field').attr({ 'value' : 'loading...' });

			$.post('php/send.php', data, function(){
				$form.find('.msg-thanks').fadeIn(function(){
					
					$('#message-field').attr({ 'value' : '' });
					window.setTimeout(function(){
						$form.find('.msg-thanks').fadeOut();
					}, 7000);
				});
			});

			return false;
        }
    });

	//Contact Form Input Focus 
 	  $('.row .field').focus(function(){ 
 	  	$(this).addClass('field-focus');
 	   }).blur(function(){
 	   	$(this).removeClass('field-focus'); 	  
 	 });
 	 
 	
	
	$('.project-item').hover(function(){ 
		$(this).toggleClass('active');
	 })
	
	//Project Detailed Page Slider
	 jQuery('.project .main-image-holder, .project-item .image-holder').each(function(){
        jQuery(this).find('li:first').addClass('active');

        var maxHeight = 0;
        var maxWidth = 0;

        jQuery(this).find('li').each(function(){            
            if(jQuery(this).height() > maxHeight)
                maxHeight = jQuery(this).height();            
                maxWidth += jQuery(this).width();
        }
        );

        jQuery(this).find('ul').height(maxHeight).width(maxWidth);

        makeScrollable(jQuery(this).find("div.screenshots"));
    });
    
    //Gallery Hover
    $('ul.gallery-classic li').hover(function(){ 
    	$(this).find('.magnifier').toggle();
     });
     
      $('ul.gallery-projects li .image').hover(function(){ 
    	$(this).find('.magnifier').show();
     },function(){ 
     	$(this).find('.magnifier').hide();
      });
     
     $('.magnifier').click(function(){ 
     	return false;
  	});
     

     
 	//FancyBox
	$(".magnifier").fancybox({
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'elastic',
		'easingIn'      : 'easeOutBack',
		'easingOut'     : 'easeInBack',
		'overlayColor'	: '#000',
		'overlayOpacity' : '0.7'
	});
	
	//Navigation Dropdown 
	$('#navigation ul li').hover(function(){ 
		$(this).find('a:eq(0)').addClass('hover');
		$(this).find('.dd-holder:eq(0)').show();
	 },function(){ 
	 	$(this).find('a:eq(0)').removeClass('hover');
	 	$(this).find('.dd-holder:eq(0)').hide();
	  });
	  
   // Login Popup
	
	$('.close-btn').click(function(){
		$('.login').fadeOut(function(){ $('#screen').hide(); });
		return false;
	});
	
	$('.login-link').click(function(){
		
		var h = $( 'body' ).height() > $( window ).height() ? $( 'body' ).height() : $( window ).height();
		$('#screen').css({ 'height': h });	
			
		$('#screen').show();
		$('.login').center();
		$('.login').fadeIn();
		return false;
	});
	
	// signup Popup
	
	$('.close-btn').click(function(){
		$('.login').fadeOut(function(){ $('#screen').hide(); });
		return false;
	});
	
	$('.signup-link').click(function(){
		
		var h = $( 'body' ).height() > $( window ).height() ? $( 'body' ).height() : $( window ).height();
		$('#screen').css({ 'height': h });	
			
		$('#screen').show();
		$('.login').center();
		$('.login').fadeIn();
		return false;
	});
	
	//Blink Fields
	 $('.blink').
	    focus(function() {
	        if(this.title==this.value) {
	            this.value = '';
	        }
	    }).
	    blur(function(){
	        if(this.value=='') {
	            this.value = this.title;
	        }
	    });
	
	     //Tweets
	if( $('#tweets').length > 0 ) {
		$('#tweets').tweet({
			count: 2,
			username: TWITTER_USERNAME,
			loading_text: 'Loading latest tweets... please wait'
		});
	};
	    
});

function makeScrollable(wrapper, scrollable){
    
	
	var wrapperHeight = wrapper.height();
    
    wrapper.mousemove(function(e){
        var scrollableHeight = jQuery('.project .main-image-holder li.active, .project-item .image-holder li.active').height();
        
        var wrapperOffset = wrapper.offset();     
        var y = e.pageY - wrapperOffset.top;
     
        var top =  (y * (scrollableHeight - wrapperHeight) / wrapperHeight) - 10;
        if (top < 0)
            top = 0;
        
        wrapper.scrollTop(top);
    });

    var interval = setInterval(function(){
        }, 200);
}

jQuery.fn.center = function(loaded) {
    var obj = this;
    body_width = parseInt($(window).width());
    body_height = parseInt($(window).height());
    block_width = parseInt(obj.width());
    block_height = parseInt(obj.height());
    
    left_position = parseInt((body_width/2) - (block_width/2)  + $(window).scrollLeft());
    if (body_width<block_width) { left_position = 0 + $(window).scrollLeft(); };
    
    top_position = parseInt((body_height/2) - (block_height/2) + $(window).scrollTop());
    if (body_height<block_height) { top_position = 0 + $(window).scrollTop(); };
    
    if(!loaded) {
        
        obj.css({'position': 'absolute'});
        obj.css({ 'top': top_position, 'left': left_position });
        $(window).bind('resize', function() { 
            obj.center(!loaded);
        });
        $(window).bind('scroll', function() { 
            obj.center(!loaded);
        });
        
    } else {
        obj.stop();
        obj.css({'position': 'absolute'});
        obj.animate({ 'top': top_position }, 200, 'linear');
    }
}

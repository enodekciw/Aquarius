jQuery(function(){
	 
	if(wplovin.footerMasonry == true && wplovin != undefined) {
		var footerSidebar = jQuery('#sidebar-footer');
		footerSidebar.masonry({
			itemSelector: '.widget'
		});
	}

	
	jQuery.fn.redraw = function() {
		return this.hide(0, function() {
			jQuery(this).show();
		});
	};
	
	if(wplovin.sidrSidebar == true && wplovin != undefined) {
		jQuery('#sidebar-handler').sidr({
			name : 'sidr-main',
			source : '#sidebar-main',
			side : 'right',
			renaming : false,
			speed : 200,
			displace : true,
			onOpen : function(){
				jQuery('#sidebar-handler i').toggleClass('fa-chevron-right fa-chevron-left sidr-active');
				jQuery('#navigation-main').toggleClass('sidr-open');
				if(jQuery('#navigation-main').hasClass('fixed-nav')) {
					jQuery('#navigation-main').animate({left: -jQuery('#sidr-main').width()}, 200);
				}
				jQuery('#sidr-main').perfectScrollbar('update');
				jQuery('.post').redraw();
			},
			onClose : function(){
				jQuery('#sidebar-handler i').toggleClass('fa-chevron-right fa-chevron-left sidr-active');
				jQuery('#navigation-main').toggleClass('sidr-open');
				if(jQuery('#navigation-main').hasClass('fixed-nav')) {
					jQuery('#navigation-main').animate({left: 0}, 200);
				}
				jQuery('.post').redraw();
			}
		});    
		jQuery('#sidr-main').perfectScrollbar();
	}
	
	jQuery('#responsive-menu-handler').sidr({
		name : 'sidr-menu',
		source : '#navigation-main',
		side : 'left',
		renaming : false,
		speed : 200,
		displace : true,
		onOpen : function(){
			jQuery('#navigation-main').toggleClass('sidr-menu-open');
			if(jQuery('#navigation-main').hasClass('fixed-nav')) {
				jQuery('#navigation-main').animate({left: jQuery('#sidr-menu').width()}, 200);
			}
			jQuery('#sidr-menu').perfectScrollbar('update');
			jQuery('.post').redraw();
		},
		onClose : function(){
			jQuery('#navigation-main').toggleClass('sidr-menu-open');
			if(jQuery('#navigation-main').hasClass('fixed-nav')) {
				jQuery('#navigation-main').animate({left: 0}, 200);
			}
			jQuery('.post').redraw();
		}
    });
	
	jQuery('#sidr-menu').perfectScrollbar();
	
	jQuery('#navigation-main').scrollspy({
		container: document,
		min: jQuery('#navigation-main').offset().top,
		onEnter: function(element, position) {
			jQuery("#navigation-main").addClass('fixed-nav');
			jQuery("#content-main").css('padding-top', jQuery("#navigation-main").outerHeight());
			if(jQuery('#navigation-main').hasClass('sidr-open')) {
				jQuery("#navigation-main").css({right: 'auto', left: -jQuery('#sidr-main').width()});
			}			
			if(jQuery('#navigation-main').hasClass('sidr-menu-open')) {
				jQuery("#navigation-main").css({left: jQuery('#sidr-menu').width()});
			}
		},
		onLeave: function(element, position) {
			jQuery("#content-main").css('padding-top', 0);
			jQuery("#navigation-main").removeClass('fixed-nav').css({left: 0});
		}
	});
	
    jQuery('.post').fitVids();

});

jQuery(window).resize(function(){
	jQuery.sidr('close', 'sidr-menu');
	jQuery.sidr('close', 'sidr-main');
});
jQuery(document).ready(function(){
	jQuery('a.fb_single_applied').fancybox();
	jQuery('a.fb_group_applied').fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
});
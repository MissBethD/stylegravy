jQuery(document).ready(function($) {

	//clear fields on focus
	var el = $('input[type=text], textarea');
    el.focus(function(e) {
        if (e.target.value == e.target.defaultValue)
            e.target.value = '';
    });
    el.blur(function(e) {
        if (e.target.value == '')
            e.target.value = e.target.defaultValue;
    });


	$('#menu-trigger').click(
	function(){
		$('#header-menu').slideToggle();
	}
	);
	
	$('.bxslider').bxSlider({
    pager: true,
    touchEnabled: false,
    controls: false,
    auto: true,
    pause: 4500
	});


}); //ready
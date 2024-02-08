jQuery(document).ready(function($) { 

	document.addEventListener( 'wpcf7mailsent', function( event ) {
		if ('74' == event.detail.contactFormId) {
			$(document).on('click', '.quiz_submit', function (e){
				e.preventDefault();
				swiperStep.slideNext();
			});
		}
	}, false );

	$(document).on('click', '#select_category_submit', function(){
		let checked = [];
		$("input[name='technology']:checked").each(function() {
			checked.push($(this).val());
		});
		if (checked) $('#technology_').val(checked.join(', '));
		checked = [];
		$("input[name='expirience']:checked").each(function() {
			checked.push($(this).val());
		});
		if (checked) $('#expirience_').val(checked.join(', '));
	});

});
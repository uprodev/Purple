jQuery(document).ready(function($) { 

	$(document).on('click', '.quiz_submit', function(){
		let technology = [];
		$("input[name='technology']:checked").each(function() {
			technology.push($(this).val());
		});
		if (technology) $('#technology_').val(technology.join(', '));

		let experience = $("input[name='experience']:checked").val();
		if (experience) $('#experience_').val(experience);
	});

});
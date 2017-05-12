var container = $('.work-container')

$('.work-tile').on('click', function(event) {
	var x = event.pageX - container.offset().left;
	var y = event.pageY - container.offset().top;

	var id = $(this).data('work');
	var overlay = container.find('.work-overlay[data-work="' + id + '"]');
	overlay.addClass('open');
});

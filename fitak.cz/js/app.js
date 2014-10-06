$(document).ready(function() {
	// StreamControl
	$('.show-comments, .hide-comments').on('click', function() {
		var topic = $(this).closest('.topic');
		topic.find('.show-comments, .hide-comments').toggle();
		topic.find('.comment').toggle();
		return false;
	});

	// Search
	$('.toggle-search-advanced').on('click', function () {
		var advSearch = $('.search-advanced');
		var currentSymbol = advSearch.is(':hidden') ? "\u25ba" : "\u25bc";
		var newSymbol = advSearch.is(':hidden') ? "\u25bc" : "\u25ba";
		var link = $(this);
		link.text(link.text().replace(currentSymbol, newSymbol));
		advSearch.slideToggle(0);
		return false;
	});
});

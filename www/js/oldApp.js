$(document).ready(function() {
	// StreamControl
	$('.show-comments, .hide-comments').on('click', function() {
		var entry = $(this).closest('.entry');
		entry.children('.show-comments, .hide-comments').toggle();
		entry.children('.entry').toggle();
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

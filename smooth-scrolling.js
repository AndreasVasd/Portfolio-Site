$('a[href*="#boxes"]').on('click', function (e) {
	e.preventDefault();

	$('html, body').animate({
		scrollTop: '+=407px'}, 600, 'linear'); /* how much it scrolls */
});
$(window).on("load", function () {
        $(".preloader").delay(350).fadeOut(600, function ()
{
            $(this).remove();
        });
		
	});
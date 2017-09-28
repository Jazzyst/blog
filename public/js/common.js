$(function() {
	// toggle btn
	$(".toggle-btn").click(function(){
		$(".toggle-btn").toggleClass("on");
		$(".hidden-menu").toggleClass("open");
		$(".hidden-menu").slideToggle();
	});

	$('.hidden-menu li').click(function(){
    $(".hidden-menu").slideToggle();
    $(".toggle-btn").toggleClass("on");
  });
	// toggle btn END


	// top nav
	$("nav li").click(function(){
		$("nav li").removeClass("active");
		$(this).addClass("active");
	});
	// top nav END

    $(window).scroll(function(){
        if($(this).scrollTop() >= 500 && $(this).width() >= 1200) {
            $('#go-top').fadeIn();
        } else {
            $('#go-top').fadeOut();
        }
    });




});
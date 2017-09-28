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

	// [function(t,e,n){var i=t("jquery");
	// i(function(){
	// 	i(".js-goto-top").on("click",function(){
	// 		i("html,body").animate({scrollTop:0},"fast")
	// 	})
	// })
	// };




});
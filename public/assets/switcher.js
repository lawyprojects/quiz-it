jQuery(".demo-icon").click(function(){jQuery(".demo_changer").hasClass("active")?jQuery(".demo_changer").animate({right:"-270px"},function(){jQuery(".demo_changer").removeClass("active")}):jQuery(".demo_changer").animate({right:"0px"},function(){jQuery(".demo_changer").addClass("active")})});$(".cover-image").each(function(){var e=$(this).attr("data-bs-image-src");typeof e<"u"&&e!==!1&&$(this).css("background","url("+e+") center center")});new PerfectScrollbar(".sidebar-right1",{useBothWheelAxes:!0,suppressScrollX:!0});jQuery(".page").click(function(){jQuery(".demo_changer").hasClass("active")&&jQuery(".demo_changer").animate({right:"-270px"},function(){jQuery(".demo_changer").removeClass("active")})});

import"./switcher-styles.a9ff7c7c.js";import"./apexcharts.common.4772fa83.js";$(function(){$("#global-loader").fadeOut("slow"),window.matchMedia("(min-width: 992px)").matches&&($(".main-navbar .active").removeClass("show"),$(".main-header-menu .active").removeClass("show")),$(".main-header .dropdown > a").on("click",function(e){e.preventDefault(),$(this).parent().toggleClass("show"),$(this).parent().siblings().removeClass("show"),$(this).find(".drop-flag").removeClass("show")}),$(document).on("click",".fullscreen-button",function(){$("html").addClass("fullscreen-button"),document.fullScreenElement!==void 0&&document.fullScreenElement===null||document.msFullscreenElement!==void 0&&document.msFullscreenElement===null||document.mozFullScreen!==void 0&&!document.mozFullScreen||document.webkitIsFullScreen!==void 0&&!document.webkitIsFullScreen?document.documentElement.requestFullScreen?document.documentElement.requestFullScreen():document.documentElement.mozRequestFullScreen?document.documentElement.mozRequestFullScreen():document.documentElement.webkitRequestFullScreen?document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT):document.documentElement.msRequestFullscreen&&document.documentElement.msRequestFullscreen():($("html").removeClass("fullscreen-button"),document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen?document.webkitCancelFullScreen():document.msExitFullscreen&&document.msExitFullscreen())}),$(".cover-image").each(function(){var e=$(this).attr("data-bs-image-src");typeof e<"u"&&e!==!1&&$(this).css("background","url("+e+") center center")}),$('body, .main-header form[role="search"] button[type="reset"]').on("click keyup",function(e){(e.which==27&&$('.main-header form[role="search"]').hasClass("active")||$(e.currentTarget).attr("type")=="reset")&&a()});function a(){var e=$('.main-header form[role="search"].active');e.find("input").val(""),e.removeClass("active")}$(document).on("click",'.main-header form[role="search"]:not(.active) button[type="submit"]',function(e){e.preventDefault();var t=$(this).closest("form"),n=t.find("input");t.addClass("active"),n.focus()}),$(document).on("click",'.main-header form[role="search"].active button[type="submit"]',function(e){e.preventDefault();var t=$(this).closest("form"),n=t.find("input");$("#showSearchTerm").text(n.val()),a()}),$(".main-navbar .with-sub").on("click",function(e){e.preventDefault(),$(this).parent().toggleClass("show"),$(this).parent().siblings().removeClass("show")}),$(".dropdown-menu .main-header-arrow").on("click",function(e){e.preventDefault(),$(this).closest(".dropdown").removeClass("show")}),$("#mainNavShow, #azNavbarShow").on("click",function(e){e.preventDefault(),$("body").addClass("main-navbar-show")}),$("#mainContentLeftShow").on("click touch",function(e){e.preventDefault(),$("body").addClass("main-content-left-show")}),$("#mainContentLeftHide").on("click touch",function(e){e.preventDefault(),$("body").removeClass("main-content-left-show")}),$("#mainContentBodyHide").on("click touch",function(e){e.preventDefault(),$("body").removeClass("main-content-body-show")}),$("body").append('<div class="main-navbar-backdrop"></div>'),$(".main-navbar-backdrop").on("click touchstart",function(){$("body").removeClass("main-navbar-show")}),$(document).on("click touchstart",function(e){e.stopPropagation();var t=$(e.target).closest(".main-header .dropdown").length;if(t||$(".main-header .dropdown").removeClass("show"),window.matchMedia("(min-width: 992px)").matches){var n=$(e.target).closest(".main-navbar .nav-item").length;n||$(".main-navbar .show").removeClass("show");var l=$(e.target).closest(".main-header-menu .nav-item").length;l||$(".main-header-menu .show").removeClass("show"),$(e.target).hasClass("main-menu-sub-mega")&&$(".main-header-menu .show").removeClass("show")}else if(!$(e.target).closest("#mainMenuShow").length){var r=$(e.target).closest(".main-header-menu").length;r||$("body").removeClass("main-header-menu-show")}}),$("#mainMenuShow").on("click",function(e){e.preventDefault(),$("body").toggleClass("main-header-menu-show")}),$(".main-header-menu .with-sub").on("click",function(e){e.preventDefault(),$(this).parent().toggleClass("show"),$(this).parent().siblings().removeClass("show")}),$(".main-header-menu-header .close").on("click",function(e){e.preventDefault(),$("body").removeClass("main-header-menu-show")}),$(".card-header-right .card-option .fe fe-chevron-left").on("click",function(){var e=$(this);e.hasClass("icofont-simple-right")?e.parents(".card-option").animate({width:"35px"}):e.parents(".card-option").animate({width:"180px"}),$(this).toggleClass("fe fe-chevron-right").fadeIn("slow")});var o=[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));o.map(function(e){return new bootstrap.Tooltip(e)});var i=[].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));i.map(function(e){return new bootstrap.Popover(e)}),eva.replace(),$(document).ready(function(){$(".horizontalMenu-list li a").each(function(){var e=window.location.href.split(/[?#]/)[0];this.href==e&&($(this).addClass("active"),$(this).parent().addClass("active"),$(this).parent().parent().prev().addClass("active"),$(this).parent().parent().prev().click())})}),$(document).ready(function(){$(".horizontalMenu-list li a").each(function(){var e=window.location.href.split(/[?#]/)[0];this.href==e&&($(this).addClass("active"),$(this).parent().addClass("active"),$(this).parent().parent().prev().addClass("active"),$(this).parent().parent().prev().click())}),$(".horizontal-megamenu li a").each(function(){var e=window.location.href.split(/[?#]/)[0];this.href==e&&($(this).addClass("active"),$(this).parent().addClass("active"),$(this).parent().parent().parent().parent().parent().parent().parent().prev().addClass("active"),$(this).parent().parent().prev().click())}),$(".horizontalMenu-list .sub-menu .sub-menu li a").each(function(){var e=window.location.href.split(/[?#]/)[0];this.href==e&&($(this).addClass("active"),$(this).parent().addClass("active"),$(this).parent().parent().parent().parent().prev().addClass("active"),$(this).parent().parent().prev().click())})}),$(window).on("scroll",function(e){$(this).scrollTop()>0?$("#back-to-top").fadeIn("slow"):$("#back-to-top").fadeOut("slow")}),$("#back-to-top").on("click",function(e){return $("html, body").animate({scrollTop:0},0),!1}),$(".layout-setting").on("click",function(e){document.querySelector("body").classList.contains("dark-theme")?($("body").removeClass("dark-theme"),$("body").addClass("light-theme"),$("#myonoffswitch1").prop("checked",!0),$("#myonoffswitch3").prop("checked",!0),localStorage.setItem("AdminorlightMode",!0),localStorage.removeItem("AdminordarkMode",!1)):($("body").addClass("dark-theme"),$("body").removeClass("light-theme"),localStorage.setItem("AdminordarkMode",!0),localStorage.removeItem("AdminorlightMode",!1),$("#myonoffswitch2").prop("checked",!0),$("#myonoffswitch5").prop("checked",!0))}),$(".default-menu").on("click",function(){var e=document.body.clientWidth;e>=992&&$("body").removeClass("sidenav-toggled")})});
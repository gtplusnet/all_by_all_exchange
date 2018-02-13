var globals_js = new globals_js();

function globals_js()
{
	init();

	function init()
	{
		$(document).ready(function() 
		{
			document_ready();	
		});
	}

	function document_ready()
	{
		action_match_height();
		mobile_nav();
		scroll_up();
	}

	function action_match_height()
	{
		$(".match-height").matchHeight();

		$(window).resize(function()
		{
			$(".match-height").matchHeight();
		});
	}

	function mobile_nav()
	{
		$menuLeft = $('.pushmenu-left');
		$nav_list = $('#nav_list');
		
		$nav_list.on("click", function() 
		{
		    $(this).toggleClass('active');
		   /* $('.pushmenu-push').toggleClass('pushmenu-push-toright');*/
		    $menuLeft.toggleClass('pushmenu-open');
		}); 
	}

	function scroll_up()
	{
	    /*scroll up*/
	    $(window).scroll(function () {
	        if ($(this).scrollTop() > 700) {
	            $('.scroll-up').fadeIn();
	        } else {
	            $('.scroll-up').fadeOut();
	        }
	    });

	    $('.scroll-up').click(function () {
	        $("html, body").animate({
	            scrollTop: 0
	        }, 700);
	        return false;
	    });
	}
}

function on() 
{
    document.getElementById("overlay").style.display = "block";
    $("body").css({"overflow": "hidden","position": "fixed","margin": "0","padding": "0","right": "0","left": "0"});
    $(".blur-me").css({
        filter: 'blur(50px)'
    });
}

function off()
{
    document.getElementById("overlay").style.display = "none";
    $('.pushmenu').removeClass("pushmenu-open");
    $("body").css({"overflow": "auto","position": "static"});
    $(".blur-me").css({
        filter: 'blur(0)'
    });
}

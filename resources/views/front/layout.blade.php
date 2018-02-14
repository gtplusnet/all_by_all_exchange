<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="/assets/img/allbyall-ico.png" type="image/png"/>
	<title>Allbyall Exchange</title>
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">

	<!-- New Font Awesome -->
	<link rel="stylesheet" type="text/css" href="/assets/font-awesome/css/font-awesome.min.css">
	{{-- <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> --}}
	<script defer src="/assets/fontawesome5/svg-with-js/css/fa-svg-with-js.css"></script>
	<script defer src="/assets/fontawesome5/svg-with-js/js/fontawesome-all.js"></script>
	
	<!-- Bootstrap 4-->
    <link href="/assets/bootstrap4/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<!--External css-->
    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="/assets/css/mobile_nav.css">
    <link rel="stylesheet" href="/assets/css/member_layout.css">

	<!--wow animation-->
    <link rel="stylesheet" href="/assets/wow/css/animate.css">

	
	@yield("css")

</head>

<body>
	<div id="overlay" onclick="off()"></div>
	<div class="side-nav">
	    <nav class="pushmenu pushmenu-left">
	        <div class="space1"></div>
	        <a href="javascript:">
	            <div class="profile-img-container">
	                <div class="row-no-padding clearfix">
	                    <div class="col-xs-12">
	                        <div class="profile-img"><img src=""></div>
	                        <div class="text-holder">
	                            <div class="name-text text-overflow">Lorem Ipsum</div>
	                            <div class="subtext text-overflow">loremipsum@gmail.com</div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </a>
	        <div class="space1"></div>
	        <span>BROWSE</span>
	        <ul class="links">
	            <li> <a onclick="off()" href="/member/dashboard"> MY WALLET</a></li>
	            <li> <a onclick="off()" href="/member/cash_in"> CASH IN</a></li>
	            <li> <a onclick="off()" href="/member/cash_out"> CASH OUT</a></li>
	            <li> <a onclick="off()" href="/member/notification"> NOTIFICATION</a></li>
	        </ul>
	    </nav>
	</div>
	
	<div class="blur-me">
		
	<!--Content-->
	<div id="scroll-to" class="content clearfix">
		@yield("member_content")
	</div>

	@if(Request::segment(1)=="dashboard")

	<footer>
		<div class="container">
			<div class="bottom-text">© 2018 anyband.com</div>
		</div>
	</footer>

	</div>
	@else

	@endif

	<div id="global_modal" class="modal fade" role="dialog" >
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content modal-content-global">
            </div>
        </div>
    </div>
    <div class="multiple_global_modal_container"></div>
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/assets/bootstrap4/dist/js/bootstrap.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script type="text/javascript" src="/assets/js/match-height.js"></script>
	<script type="text/javascript" src="/assets/js/globals_js.js"></script>
	<script src="/assets/js/popup.js"></script>

	<!--START WOW JS-->
	<script src="/assets/wow/js/wow.min.js"></script>
	<script>
	      new WOW().init();
	</script>
	<!--END WOW JS-->

	@yield("js")

</body>

</html>
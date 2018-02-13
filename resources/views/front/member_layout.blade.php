@extends("front.layout")
@section("member_content")

<!--Dashboard Navigation-->
<nav class="top-nav">
	<div class="container-fluid">
		<div class="logo-holder">
			<div id="nav_list" onclick="on()"><i class="fa fa-bars hamburger"></i></div>
			<a href="/">
				<img src="/assets/img/logo.png" alt="">
			</a>
		</div>
		<nav class="navi">
			<span class="navi-link {{ Request::segment(1) == "dashboard" ? "active" : "" }}">
				<a href="/dashboard">
					<img src="/assets/img/my-wallet-icon.png" alt=""> 
					<span class="nav-text"> My Wallet</span>
				</a>
			</span>
			<span class="navi-link {{ Request::segment(1) == "cash_in" ? "active" : "" }}">
				<a href="/cash_in">
					<img src="/assets/img/cash-in-icon.png" alt=""> 
					<span class="nav-text"> Cash In</span>
				</a>
			</span>
			<span class="navi-link {{ Request::segment(1) == "cash_out" ? "active" : "" }}">
				<a href="/cash_out">
					<img src="/assets/img/cash-out-icon.png" alt=""> 
					<span class="nav-text">Cash Out</span>
				</a>
			</span>

			<span class="navi-link {{ Request::segment(1) == "notification" ? "active" : "" }}">
				<a href="/notification">
					<img src="/assets/img/notif-icon.png" alt=""> 
					<span class="nav-text"> Notification</span>
				</a>
			</span>
		</nav>
		<div class="top-right">

			<div class="price-holder">
				<span>Buy: 581,053 PHP</span>
				<span>|</span>
				<span>Sell: 564,807 PHP</span>
			</div>
			<div class="settings-holder">
				<div class="dropdown">
					<a class="dropbtn" href="javascript:">
						<img src="/assets/img/user-icon.png" alt="">
						<span class="name">Sample user </span> 
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</a>
					<div class="dropdown-content">
						<a href="javascript:">Settings</a>
						<a href="/login">Logout</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>

<!-- SCROLL TO TOP -->
<div class="scroll-up"><img src="/assets/img/scroll-up.png"></div>

@yield("content")

<!--End Dashboard-->

@endsection
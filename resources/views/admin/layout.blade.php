
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title') | BGIS Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ asset('css/styles.css') }}" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
<!-- //font-awesome icons -->
 <!-- js-->
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/modernizr.custom.js') }}"></script>

<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<!--animate-->
<link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" media="all">
<script src="{{ asset('js/wow.min.js') }}"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="{{ asset('js/metisMenu.min.js')}}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<!--//Metis Menu -->
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="/admin"><i class="fa fa-home nav_icon"></i>Home</a>
						</li>

						<li>
							<a href="#"><i class="fa fa-globe nav_icon"></i>Update Website<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									@can('News')
									<li>
										<a href="/admin/events"><i class="fa fa-globe nav_icon"></i>News and Events</a>
									</li>
									@endcan
									@can('Faculty')
						            <li>
							            <a href="/admin/faculty"><i class="fa fa-table nav_icon"></i>Faculty</a>
						            </li>
						            @endcan
						            @can('Publications')
						            <li>
							            <a href="/admin/publications"><i class="fa fa-book nav_icon"></i>Publications</a>
						            </li>
						            @endcan
						            @can('Admissions')
						            <li>
								        <a href="/admin/dates"><i class="fa fa-calendar nav_icon"></i>Admission Dates</a>
							        </li>
									@endcan
									@can('News')
						            <li>
								        <a href="/admin/homevideo"><i class="fa fa-calendar nav_icon"></i>Youtube Video</a>
							        </li>
							        @endcan
								</ul>
						</li>

{{--  new adding for seo                  --}}
                        <li>
                            <a href="#"><i class="fa fa-cog nav_icon"></i>SEO<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">

                                    <li>
                                        <a href="/admin/pages"><i class="fa fa-book nav_icon"></i>Pages</a>
                                    </li>

                            </ul>
                        </li>
{{-- <!--  ending section for seo-->--}}
						@can('Contact')
						<li>
							<a href="#"><i class="fa fa-envelope nav_icon"></i>Queries <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
							     <li>
							        <a href="/admin/contact"><i class="fa fa-envelope nav_icon"></i>Contact Us Form</span></a>
							    </li>
							    <li>
							        <a href="/admin/query"><i class="fa fa-table nav_icon"></i>Admission Queries</a>
						        </li>
						    </ul>
						</li>
						@endcan
						@can('Search Donations')
						<li>
							<a href="/admin/donations"><i class="fa fa-money nav_icon"></i> Donations</a>
						</li>
						@endcan
						@can('Admissions')
						<li>
							<a href="/admin/admissions"><i class="fa fa-table nav_icon"></i>Admissions</a>
						</li>
						@endcan
						@can('Edit Ticket')<li>
							<a href="#"><i class="fa fa-check-square-o nav_icon"></i>TICKETS AND COMPLAINTS <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="/admin/tickets">View Tickets</a>

								</li>
								<li>
									<a href="/admin/tickets/create">Create A Ticket</a>
								</li>

							</ul>
						</li>
						@endcan

						@can('Administer roles & permissions')<li>
							<a href="#"><i class="fa fa-user nav_icon"></i>Manage Users<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="/admin/users">View All</a>
								</li>
								<li>
									<a href="/admin/users/create">Add New</a>
								</li>
							</ul>
						@endcan
						</li>
					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="/admin">
						<h1>BGIS</h1>
						<span>AdminPanel</span>
					</a>
				</div>
				<!--//logo-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left"><!--notifications of menu start -->
{{-- Make changes for getting error "undified variable" --}}
{{--							<li class="dropdown head-dpdn">--}}
{{--								@can('Edit Ticket')<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Tickets<span class="badge blue">{{ $ticketN->count() }}</span></a>@endcan--}}
{{--								<ul class="dropdown-menu">--}}
{{--									<li>--}}
{{--									<div class="notification_header">--}}
{{--											<h3>You have {{$ticketN->count()}} open tickets against you.</h3>--}}
{{--										</div>--}}
{{--									</li>--}}

{{--									@foreach($ticketN as $ticket)--}}
{{--									<li><a href="/admin/tickets/{{$ticket->id}}">--}}
{{--									<div class="notification_desc">--}}
{{--										<p>{{$ticket->title}}</p>--}}
{{--										<p><span>by {{$ticket->owner->name}}</span></p>--}}
{{--									</div>--}}
{{--									<div class="clearfix"></div>--}}
{{--									</a></li>--}}
{{--									@endforeach--}}

{{--									<li>--}}
{{--									<div class="notification_bottom">--}}
{{--										<a href="/admin/tickets">See all Tickets</a>--}}
{{--									</div>--}}
{{--								</li>--}}
{{--							</ul>--}}
{{--						</li>--}}

					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<div class="user-name">
										<p>{{ Auth::user()->name }}</p>
										@can('Administer roles & permissions')<span>Administrator</span>@endcan
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="/admin/changepassword"><i class="fa fa-user"></i> Change Password</a> </li>
								<li>
									<a href="{{ route('logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST">
											@csrf
										</form>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
        	@yield('body')

		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->

	<script>
		tinymce.init({
			mode : "specific_textareas",
			editor_selector : "myTextEditor",
		});
	</script>

	<script src="{{ asset('/js/classie.js')}}"></script>

	<script>
		var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
		showLeftPush = document.getElementById( 'showLeftPush' ),
		body = document.body;

		showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
		};

		function disableOther( button ) {
			if( button !== 'showLeftPush' ) {
				classie.toggle( showLeftPush, 'disabled' );
			}
		}
		</script>
	<!--scrolling js-->
	<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
	<script src="{{ asset('js/scripts.j') }}/js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="{{ asset('js/bootstrap.js') }}"> </script>

<script>@yield('script')</script>

</body>
</html>


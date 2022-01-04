<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
<title>Freelancing Platform</title>
	@include('header.head')
</head>
<body class="wt-login">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Preloader Start -->
	<div class="preloader-outer">
		<div class="loader"></div>
	</div>
	<!-- Preloader End -->
	<!-- Wrapper Start -->
	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<!-- Content Wrapper Start -->
		<div class="wt-contentwrapper">
			@if(2 >= 1)
			<!-- Header Start  with login-->
			<header id="wt-header" class="wt-header wt-headervtwo wt-haslayout">
				<div class="wt-navigationarea">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<strong class="wt-logo"><a href="{{url('/dashboard')}}"><img src="{{asset('frontend/images/logo.png')}}" alt="company logo here"></a></strong>
								
								<form class="wt-formtheme wt-formbanner wt-formbannervtwo">
									<fieldset>
										<div class="form-group">
											<input type="text" name="job" class="form-control">
											<div class="wt-formoptions">
												<div class="wt-dropdown">
													<span>In: <em class="selected-search-type">Freelancers </em><i class="lnr lnr-chevron-down"></i></span>
												</div>
												<div class="wt-radioholder">
													<span class="wt-radio">
														<input id="wt-freelancers" data-title="Freelancers" type="radio" name="searchtype" value="freelancer" checked="">
														<label for="wt-freelancers">Freelancers</label>
													</span>
													<span class="wt-radio">
														<input id="wt-jobs" data-title="Jobs" type="radio" name="searchtype" value="job">
														<label for="wt-jobs">Jobs</label>
													</span>
													<span class="wt-radio">
														<input id="wt-companies" data-title="Companies" type="radio" name="searchtype" value="job">
														<label for="wt-companies">Companies</label>
													</span>
												</div>
												<a href="javascrip:void(0);" class="wt-searchbtn"><i class="lnr lnr-magnifier"></i></a>
											</div>
										</div>
									</fieldset>
								</form>
								
								<div class="wt-rightarea">
									<nav id="wt-nav" class="wt-nav navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
											<i class="lnr lnr-menu"></i>
										</button>
										<div class="collapse navbar-collapse wt-navigation" id="navbarNav">
											<ul class="navbar-nav">
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">Main</a>
													<ul class="sub-menu">
														<li class="menu-item-has-children page_item_has_children wt-notificationicon"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Home</a>
															<ul class="sub-menu">
																<li><a href="index.html">Home v1</a></li>
																<li class="wt-newnoti"><a href="indexvtwo.html">Home v2<em>without login</em></a></li>
															</ul>
														</li>
														<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Article</a>
															<ul class="sub-menu">
																<li><a href="articlelist.html">Article List</a></li>
																<li><a href="articlegrid.html">Article Grid</a></li>
																<li><a href="articlesingle.html">Article Single</a></li>
																<li><a href="articleclassic.html">Article Classic</a></li>
															</ul>
														</li>
														<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Company</a>
															<ul class="sub-menu">
																<li><a href="{{url('/companygrid')}}">Company Grid</a></li>
																<li><a href="{{url('/companysingle')}}">Company Sigle</a></li>
															</ul>
														</li>
														<li>
															<a href="{{url('/about')}}">About</a>
														</li>
														<li>
															<a href="{{url('/privacypolicy')}}">Privacy Policy</a>
														</li>
														<li>
															<a href="comingsoon.html">Coming Soon</a>
														</li>
														<li>
															<a href="{{url('/notavailable')}}">404page</a>
														</li>
													</ul>
												</li>
												<li class="nav-item">
													<a href="{{url('/howitworks')}}">How It Works</a>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">Browse Jobs</a>
													<ul class="sub-menu">
														<li>
															<a href="joblisting.html">Job Listing</a>
														</li>
														<li class="current-menu-item">
															<a href="jobsingle.html">Job Single</a>
														</li>
														<li>
															<a href="jobproposal.html">Job Proposal</a>
														</li>
													</ul>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">View Freelancers</a>
													<ul class="sub-menu">
														<li>
															<a href="userlisting.html">User Listing</a>
														</li>
														<li class="current-menu-item">
															<a href="usersingle.html">User Single</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</nav>
									<div class="wt-loginarea">
										<figure class="wt-userimg">
											<img src="{{asset('frontend/images/user-login.png')}}" alt="img description">
										</figure>
										<div class="wt-loginoption">
											<a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Login</a>
											<div class="wt-loginformhold">
												<div class="wt-loginheader">
													<span>Login</span>
													<a href="javascript:;"><i class="fa fa-times"></i></a>
												</div>
												<form class="wt-formtheme wt-loginform do-login-form">
													<fieldset>
														<div class="form-group">
															<input type="text" name="username" class="form-control" placeholder="Username">
														</div>
														<div class="form-group">
															<input type="password" name="password" class="form-control" placeholder="Password">
														</div>
														<div class="wt-logininfo">
															<a href="javascript:;" class="wt-btn do-login-button">Login</a>
															<span class="wt-checkbox">
																<input id="wt-login" type="checkbox" name="rememberme">
																<label for="wt-login">Keep me logged in</label>
															</span>
														</div>
													</fieldset>
													<div class="wt-loginfooterinfo">
														<a href="javascript:;" class="wt-forgot-password">Forgot password?</a>
														<a href="register.html">Create account</a>
													</div>
												</form>
											    <form class="wt-formtheme wt-loginform do-forgot-password-form wt-hide-form">
											        <fieldset>
										            <div class="form-group">
											                <input type="email" name="email" class="form-control get_password" placeholder="Email">
											            </div>
											           
											            <div class="wt-logininfo">
											                <a href="javascript:;" class="wt-btn do-get-password">Get Pasword</a>
											            </div>     
											        </fieldset>
											        <div class="wt-loginfooterinfo">
											            <a href="javascript:void(0);" class="wt-show-login">Login</a>
											            <a href="register.html">Create account</a>
											        </div>
											    </form>
											</div>
										</div>
										<a href="register.html" class="wt-btn">Join Now</a>
									</div>
									<div class="wt-userlogedin">
										<figure class="wt-userimg">
											<img src="{{asset('frontend/images/user-img.jpg')}}" alt="image description">
										</figure>
										<div class="wt-username">
											<h3>Louanne Mattioli</h3>
											<span>Amento Tech</span>
										</div>
										<nav class="wt-usernav">
											<ul>
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">
														<span>Insights</span>
													</a>
													<ul class="sub-menu children">
														<li><a href="{{url('/dashboard')}}">Insights</a></li>
														<li><a href="{{url('/insightsuser')}}">Insights User</a></li>
													</ul>
												</li>
												<li>
													<a href="{{url('/profile')}}">
														<span>My Profile</span>
													</a>
												</li>
												<li class="menu-item-has-children">
													<a href="javascript:void(0);">
														<span>All Jobs</span>
													</a>
													<ul class="sub-menu">
														<li><a href="{{url('/completejobs')}}">Completed Jobs</a></li>
														<li><a href="{{url('/canceljobs')}}">Cancelled Jobs</a></li>
														<li><a href="dashboard-ongoingjob.html">Ongoing Jobs</a></li>
														<li><a href="{{url('/ongoingsingle')}}">Ongoing Single</a></li>
													</ul>
												</li>
												<li>
													<a href="{{url('/managejobs')}}">
														<span>Manage Jobs</span>
													</a>
												</li>
												<li class="wt-notificationicon menu-item-has-children">
													<a href="{{url('/messages')}}">
														<span>Messages</span>
													</a>
													<ul class="sub-menu">
														<li><a href="{{url('/messages')}}">Messages</a></li>
														<li><a href="dashboard-messages2.html">Messages V 2</a></li>
													</ul>
												</li>
												<li>
													<a href="dashboard-saveitems.html">
														<span>My Saved Items</span>
													</a>
												</li>
												<li>
													<a href="{{url('/invoices')}}">
														<span>Invoices</span>
													</a>
												</li>
												<li>
													<a href="dashboard-category.html">
														<span>Category</span>
													</a>
												</li>
												<li>
													<a href="{{url('/packages')}}">
														<span>Packages</span>
													</a>
												</li>
												<li>
													<a href="{{url('/proposals')}}">
														<span>Proposals</span>
													</a>
												</li>
												<li>
													<a href="{{url('/settings')}}">
														<span>Account Settings</span>
													</a>
												</li>
												<li>
													<a href="{{url('/support')}}">
														<span>Help &amp; Support</span>
													</a>
												</li>
												<li>
													<a href="{{url('/')}}">
														<span>Logout</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!--Header End-->
			@else
			<!-- Header Start  without login-->
			<header id="wt-header" class="wt-header wt-haslayout">
				<div class="wt-navigationarea">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<strong class="wt-logo"><a href="{{url('/')}}"><img src="{{asset('frontend/images/logo.png')}}" alt="company logo here"></a></strong>
								<div class="wt-rightarea">
									<nav id="wt-nav" class="wt-nav navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
											<i class="lnr lnr-menu"></i>
										</button>
										<div class="collapse navbar-collapse wt-navigation" id="navbarNav">
											<ul class="navbar-nav">
												<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
													<a href="javascript:void(0);">Main</a>
													<ul class="sub-menu">
														<li class="menu-item-has-children page_item_has_children wt-notificationicon"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Home</a>
															<ul class="sub-menu">
																<li><a href="index.html">Home v1</a></li>
																<li class="wt-newnoti"><a href="indexvtwo.html">Home v2<em>without login</em></a></li>
															</ul>
														</li>
														<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Article</a>
															<ul class="sub-menu">
																<li><a href="articlelist.html">Article List</a></li>
																<li><a href="articlegrid.html">Article Grid</a></li>
																<li><a href="articlesingle.html">Article Single</a></li>
																<li><a href="articleclassic.html">Article Classic</a></li>
															</ul>
														</li>
														<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Company</a>
															<ul class="sub-menu">
																<li><a href="companygrid.html">Company Grid</a></li>
																<li><a href="companysigle.html">Company Sigle</a></li>
															</ul>
														</li>
														<li>
															<a href="about.html">About</a>
														</li>
														<li>
															<a href="privacypolicy.html">Privacy Policy</a>
														</li>
														<li>
															<a href="comingsoon.html">Coming Soon</a>
														</li>
														<li>
															<a href="404page.html">404page</a>
														</li>
													</ul>
												</li>
												<li class="nav-item">
													<a href="howitworks.html">How It Works</a>
												</li>
												<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
													<a href="javascript:void(0);">Browse Jobs</a>
													<ul class="sub-menu">
														<li>
															<a href="joblisting.html">Job Listing</a>
														</li>
														<li class="current-menu-item">
															<a href="jobsingle.html">Job Single</a>
														</li>
														<li>
															<a href="jobproposal.html">Job Proposal</a>
														</li>
													</ul>
												</li>
												<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
													<a href="javascript:void(0);">View Freelancers</a>
													<ul class="sub-menu">
														<li>
															<a href="userlisting.html">User Listing</a>
														</li>
														<li class="current-menu-item">
															<a href="usersingle.html">User Single</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</nav>
									<div class="wt-loginarea">
										<figure class="wt-userimg">
											<img src="{{asset('frontend/images/user-login.png')}}" alt="img description">
										</figure>
										<div class="wt-loginoption">
											<a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Login</a>
											<div class="wt-loginformhold">
												<div class="wt-loginheader">
													<span>Login</span>
													<a href="javascript:;"><i class="fa fa-times"></i></a>
												</div>
												<form class="wt-formtheme wt-loginform do-login-form">
													<fieldset>
														<div class="form-group">
															<input type="text" name="username" class="form-control" placeholder="Username">
														</div>
														<div class="form-group">
															<input type="password" name="password" class="form-control" placeholder="Password">
														</div>
														<div class="wt-logininfo">
															<a href="javascript:;" class="wt-btn do-login-button">Login</a>
															<span class="wt-checkbox">
																<input id="wt-login" type="checkbox" name="rememberme">
																<label for="wt-login">Keep me logged in</label>
															</span>
														</div>
													</fieldset>
													<div class="wt-loginfooterinfo">
														<a href="javascript:;" class="wt-forgot-password">Forgot password?</a>
														<a href="register.html">Create account</a>
													</div>
												</form>
											    <form class="wt-formtheme wt-loginform do-forgot-password-form wt-hide-form">
											        <fieldset>
											            <div class="form-group">
											                <input type="email" name="email" class="form-control get_password" placeholder="Email">
											            </div>
											           
											            <div class="wt-logininfo">
											                <a href="javascript:;" class="wt-btn do-get-password">Get Pasword</a>
											            </div>     
											        </fieldset>
											        <div class="wt-loginfooterinfo">
											            <a href="javascript:void(0);" class="wt-show-login">Login</a>
											            <a href="register.html">Create account</a>
											        </div>
											    </form>
											</div>
										</div>
										<a href="register.html" class="wt-btn">Join Now</a>
									</div>
									<div class="wt-userlogedin">
										<figure class="wt-userimg">
											<img src="{{asset('frontend/images/user-img.jpg')}}" alt="image description">
										</figure>
										<div class="wt-username">
											<h3>Louanne Mattioli</h3>
											<span>Amento Tech</span>
										</div>
										<nav class="wt-usernav">
											<ul>
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">
														<span>Insights</span>
													</a>
													<ul class="sub-menu children">
														<li><a href="dashboard-insights.html">Insights</a></li>
														<li><a href="dashboard-insightsuser.html">Insights User</a></li>
													</ul>
												</li>
												<li>
													<a href="dashboard-profile.html">
														<span>My Profile</span>
													</a>
												</li>
												<li class="menu-item-has-children">
													<a href="javascript:void(0);">
														<span>All Jobs</span>
													</a>
													<ul class="sub-menu">
														<li><a href="dashboard-completejobs.html">Completed Jobs</a></li>
														<li><a href="dashboard-canceljobs.html">Cancelled Jobs</a></li>
														<li><a href="dashboard-ongoingjob.html">Ongoing Jobs</a></li>
														<li><a href="dashboard-ongoingsingle.html">Ongoing Single</a></li>
													</ul>
												</li>
												<li>
													<a href="dashboard-managejobs.html">
														<span>Manage Jobs</span>
													</a>
												</li>
												<li class="wt-notificationicon menu-item-has-children">
													<a href="javascript:void(0);">
														<span>Messages</span>
													</a>
													<ul class="sub-menu">
														<li><a href="dashboard-messages.html">Messages</a></li>
														<li><a href="dashboard-messages2.html">Messages V 2</a></li>
													</ul>
												</li>
												<li>
													<a href="dashboard-saveitems.html">
														<span>My Saved Items</span>
													</a>
												</li>
												<li>
													<a href="dashboard-invocies.html">
														<span>Invoices</span>
													</a>
												</li>
												<li>
													<a href="dashboard-category.html">
														<span>Category</span>
													</a>
												</li>
												<li>
													<a href="dashboard-packages.html">
														<span>Packages</span>
													</a>
												</li>
												<li>
													<a href="dashboard-proposals.html">
														<span>Proposals</span>
													</a>
												</li>
												<li>
													<a href="dashboard-accountsettings.html">
														<span>Account Settings</span>
													</a>
												</li>
												<li>
													<a href="dashboard-helpsupport.html">
														<span>Help &amp; Support</span>
													</a>
												</li>
												<li>
													<a href="index.html">
														<span>Logout</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- Header END-->
			@endif
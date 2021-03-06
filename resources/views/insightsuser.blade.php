@include('header')

<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout">
				<!--Sidebar Start-->
				<div id="wt-sidebarwrapper" class="wt-sidebarwrapper">
					<div id="wt-btnmenutoggle" class="wt-btnmenutoggle">
						<span class="menu-icon">
							<em></em>
							<em></em>
							<em></em>
						</span>
					</div>
					<div id="wt-verticalscrollbar" class="wt-verticalscrollbar">
						<div class="wt-companysdetails wt-usersidebar">
							<figure class="wt-companysimg">
								<img src="images/sidebar/img-03.jpg" alt="img description">
							</figure>
							<div class="wt-companysinfo">
								<figure><img src="images/sidebar/img-02.jpg" alt="img description"></figure>
								<div class="wt-title">
									<h2><a href="javascript:void(0);"> Louanne Mattioli</a></h2>
									<span>Amento Tech</span>
								</div>
								<div class="wt-btnarea"><a href="dashboard-postjob.html" class="wt-btn">Post a Job</a></div>
							</div>
						</div>
						<nav id="wt-navdashboard" class="wt-navdashboard">
							<ul>
								<li class="menu-item-has-children wt-active">
									<a href="javascript:void(0);">
										<i class="ti-dashboard"></i>
										<span>Insights</span>
									</a>
									<ul class="sub-menu">
										<li><hr><a href="dashboard-insights.html">Insights</a></li>
										<li class="wt-active"><hr><a href="dashboard-insightsuser.html">Insights User</a></li>
									</ul>
								</li>
								<li>
									<a href="dashboard-profile.html">
										<i class="ti-briefcase"></i>
										<span>My Profile</span>
									</a>
								</li>
								<li class="menu-item-has-children">
									<a href="javascript:void(0);">
										<i class="ti-package"></i>
										<span>All Jobs</span>
									</a>
									<ul class="sub-menu">
										<li><hr><a href="dashboard-completejobs.html">Completed Jobs</a></li>
										<li><hr><a href="dashboard-canceljobs.html">Cancelled Jobs</a></li>
										<li><hr><a href="dashboard-ongoingjob.html">Ongoing Jobs</a></li>
										<li><hr><a href="dashboard-ongoingsingle.html">Ongoing Single</a></li>
									</ul>
								</li>
								<li>
									<a href="dashboard-managejobs.html">
										<i class="ti-announcement"></i>
										<span>Manage Jobs</span>
									</a>
								</li>
								<li class="wt-notificationicon menu-item-has-children">
									<a href="javascript:void(0);">
										<i class="ti-pencil-alt"></i>
										<span>Messages</span>
									</a>
									<ul class="sub-menu">
										<li><hr><a href="dashboard-messages.html">Messages</a></li>
										<li><hr><a href="dashboard-messages2.html">Messages V 2</a></li>
									</ul>
								</li>
								<li>
									<a href="dashboard-saveitems.html">
										<i class="ti-heart"></i>
										<span>My Saved Items</span>
									</a>
								</li>
								<li>
									<a href="dashboard-invocies.html">
										<i class="ti-file"></i>
										<span>Invoices</span>
									</a>
								</li>
								<li>
									<a href="dashboard-category.html">
										<i class="ti-layers"></i>
										<span>Category</span>
									</a>
								</li>
								<li>
									<a href="dashboard-packages.html">
										<i class="ti-money"></i>
										<span>Packages</span>
									</a>
								</li>
								<li>
									<a href="dashboard-proposals.html">
										<i class="ti-bookmark-alt"></i>
										<span>Proposals</span>
									</a>
								</li>
								<li>
									<a href="dashboard-accountsettings.html">
										<i class="ti-anchor"></i>
										<span>Account Settings</span>
									</a>
								</li>
								<li>
									<a href="dashboard-helpsupport.html">
										<i class="ti-tag"></i>
										<span>Help &amp; Support</span>
									</a>
								</li>
								<li>
									<a href="index.html">
										<i class="ti-shift-right"></i>
										<span>Logout</span>
									</a>
								</li>
							</ul>
						</nav>
						<div class="wt-navdashboard-footer">
							<span>Worktern. ?? 2019 All Rights Reserved.</span>
						</div>
					</div>
				</div>
				<!--Sidebar Start-->
				<!--Register Form Start-->
				<section class="wt-haslayout wt-dbsectionspace wt-insightuser">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
							<div class="wt-dashboardbox">
								<div class="wt-dashboardboxtitle wt-yeartag">
									<h2>Total Earnings</h2>
									<div class="wt-tag wt-widgettag">
										<a href="javascript:void(0);">2019</a>
										<a href="javascript:void(0);">2018</a>
										<a href="javascript:void(0);">2017</a>
									</div>
								</div>
								<div class="wt-dashboardboxcontent">
									<div class="wt-jobchartholder">
										<canvas id="wt-jobchart" class="wt-jobchart"></canvas>
									</div>
								</div>
							</div>
							<div class="wt-dashboardbox wt-earningsholder">
								<div class="wt-dashboardboxtitle wt-titlewithsearch">
									<h2>Past Earnings</h2>
									<form class="wt-formtheme wt-formsearch">
										<fieldset>
											<div class="form-group">
												<input type="text" name="Search" class="form-control" placeholder="Search Here">
												<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
											</div>
										</fieldset>
									</form>
								</div>
								<div class="wt-dashboardboxcontent">
									<table class="wt-tablecategories">
										<thead>
											<tr>
												<th>Project Title</th>
												<th>Date</th>
												<th>Earnings</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>I want some customization and installation on wordpress</td>
												<td>February 3, 2019</td>
												<td>$19.00</td>
											</tr>
											<tr>
												<td>Develop a transportation company website</td>
												<td>January 12, 2019</td>
												<td>$350.00</td>
											</tr>
											<tr>
												<td>Change temp to Arabic and install on wordpress</td>
												<td>December 16, 2018</td>
												<td>$120.00</td>
											</tr>
											<tr>
												<td>I want some customization and installation on wordpress</td>
												<td>November 18, 2018</td>
												<td>$60.00</td>
											</tr>
											<tr>
												<td>Website changes in HTML &amp; PHP</td>
												<td>October 24, 2018</td>
												<td>$50.00</td>
											</tr>
											<tr>
												<td>I want some customization and installation on wordpress</td>
												<td>October 21, 2018</td>
												<td>$240.00</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="ccol-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
							<div class="row">
								<div class="wt-insightsitemholder">
									<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
										<div class="wt-insightsitem wt-dashboardbox wt-insightnoticon">
											<figure class="wt-userlistingimg">
												<img src="images/thumbnail/img-19.png" alt="image description" class="mCS_img_loaded">
											</figure>
											<div class="wt-insightdetails">
												<div class="wt-title">
													<h3>New Messages</h3>
													<a href="javascript:void(0)">Click To View</a>
												</div>	
											</div>	
										</div>																		
									</div>
									<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
										<div class="wt-insightsitem wt-dashboardbox">
											<span class="wt-pakagespinner"><i class="fa fa-spinner wt-uploading"></i> D29 : H06 : M38 : S42</span>
											<figure class="wt-userlistingimg">
												<img src="images/thumbnail/img-21.png" alt="image description" class="mCS_img_loaded">
											</figure>
											<div class="wt-insightdetails">
												<div class="wt-title">
													<h3>Check Package Expiry</h3>
													<a href="javascript:void(0)">Click To View</a>
												</div>
											</div>	
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
										<div class="wt-insightsitem wt-dashboardbox">
											<figure class="wt-userlistingimg">
												<img src="images/thumbnail/img-20.png" alt="image description" class="mCS_img_loaded">
											</figure>
											<div class="wt-insightdetails">
												<div class="wt-title">
													<h3>Latest Proposals</h3>
													<a href="javascript:void(0)">Click To View</a>
												</div>
											</div>	
										</div>						
									</div>
									<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
										<div class="wt-insightsitem wt-dashboardbox">
											<figure class="wt-userlistingimg">
												<img src="images/thumbnail/img-22.png" alt="image description" class="mCS_img_loaded">
											</figure>
											<div class="wt-insightdetails">
												<div class="wt-title">
													<h3>View Saved Items</h3>
													<a href="javascript:void(0)">Click To View</a>
												</div>													
											</div>
										</div>								
									</div>
								</div>
								<div class="wt-insightsongoing">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
										<div class="wt-dashboardbox wt-ongoingproject">
											<div class="wt-dashboardboxtitle">
												<h2>Ongoing Projects</h2>
											</div>
											<div class="wt-dashboardboxcontent wt-hiredfreelance">
												<div class="wt-userlistinghold wt-featured">
													<span class="wt-smallfeaturedtag"><img src="images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style mCS_img_loaded"></span>
													<div class="wt-proposaldetails">
														<div class="wt-contenthead">
															<div class="wt-title">
																<h3>I want some customization &amp; installation on wordpress <span>Louanne Mattioli</span></h3>
																<a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a>
															</div>
														</div>													
													</div>	
												</div>
												<div class="wt-userlistinghold wt-featured">
													<span class="wt-smallfeaturedtag"><img src="images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style mCS_img_loaded"></span>
													<div class="wt-proposaldetails">
														<div class="wt-contenthead">
															<div class="wt-title">
																<h3>Develop a transportation company website <span>Louanne Mattioli</span></h3>
																<a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a>
															</div>
														</div>													
													</div>	
												</div>											
												<div class="wt-userlistinghold wt-featured">
													<div class="wt-proposaldetails">
														<div class="wt-contenthead">
															<div class="wt-title">
																<h3>Change temp to Arabic &amp; install on wordpress <span>Louanne Mattioli</span></h3>
																<a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a>
															</div>
														</div>													
													</div>	
												</div>							
											</div>
										</div>
									</div>
								</div>	
								<div class="wt-dashboardsaveholder wt-dashboardsave">
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left">
										<div class="wt-proposalsr wt-dashboardbox">
											<div class="wt-proposalsrcontent">
												<figure>
													<img src="images/thumbnail/img-17.png" alt="image">
												</figure>
												<div class="wt-title">
													<h3>150</h3>
													<span>Total Ongoing Jobs</span>
												</div>
											</div> 
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left">
										<div class="wt-proposalsr wt-dashboardbox">
											<div class="wt-proposalsrcontent  wt-freelancelike">
												<figure>
													<img src="images/thumbnail/img-15.png" alt="image">
												</figure>
												<div class="wt-title">
													<h3>2075</h3>
													<span>Total Cancelled Jobs</span>
												</div>
											</div> 
										</div>
									</div>	
								</div>							
							</div>						
						</div>												
					</div>
				</section>
				<!--Register Form End-->			
			</main>
			<!--Main End-->	

            @include('footer')
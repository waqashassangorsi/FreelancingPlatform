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
								<img src="images/sidebar/img-01.jpg" alt="img description">
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
								<li class="menu-item-has-children">
									<a href="javascript:void(0);">
										<i class="ti-dashboard"></i>
										<span>Insights</span>
									</a>
									<ul class="sub-menu">
										<li><hr><a href="dashboard-insights.html">Insights</a></li>
										<li><hr><a href="dashboard-insightsuser.html">Insights User</a></li>
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
								<li class="wt-active">
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
				<section class="wt-haslayout wt-dbsectionspace">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 float-right">
							<div class="wt-dashboardbox wt-dashboardinvocies">
								<div class="wt-dashboardboxtitle wt-titlewithsearch">
									<h2>Invocies</h2>
									<form class="wt-formtheme wt-formsearch">
										<fieldset>
											<div class="form-group">
												<input type="text" name="Search" class="form-control" placeholder="Search Here">
												<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
											</div>
										</fieldset>
									</form>
								</div>
								<div class="wt-dashboardboxcontent wt-categoriescontentholder wt-categoriesholder">
									<table class="wt-tablecategories">
										<thead>
											<tr>
												<th>
													<span class="wt-checkbox">
														<input id="wt-name" type="checkbox" name="head">
														<label for="wt-name"></label>
													</span>
												</th>
												<th>Invoice ID</th>
												<th>Purchase Date</th>
												<th>Expiry Date</th>
												<th>Amount</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<span class="wt-checkbox">
														<input id="wt-namea" type="checkbox" name="head">
														<label for="wt-namea"></label>
													</span>
												</td>
												<td>w6FUUKqSJ3gePjsD</td>
												<td>February 3, 2019</td>
												<td>February 3, 2019</td>
												<td>$19.00</td>
												<td>
													<div class="wt-actionbtn">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo">view</a>
														<a href="javascript:void(0);" class="wt-deleteinfo">Print</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<span class="wt-checkbox">
														<input id="wt-name1" type="checkbox" name="head">
														<label for="wt-name1"></label>
													</span>
												</td>
												<td>CrtDNFnJVm7w8kFA</td>
												<td>February 15, 2019</td>
												<td>February 15, 2019</td>
												<td>$24.00</td>
												<td>
													<div class="wt-actionbtn">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo">view</a>
														<a href="javascript:void(0);" class="wt-deleteinfo">Print</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<span class="wt-checkbox">
														<input id="wt-name2" type="checkbox" name="head">
														<label for="wt-name2"></label>
													</span>
												</td>
												<td>4JppL9xYXRsSvUy9</td>
												<td>February 16, 2019</td>
												<td>February 16, 2019</td>
												<td>$19.00</td>
												<td>
													<div class="wt-actionbtn">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo">view</a>
														<a href="javascript:void(0);" class="wt-deleteinfo">Print</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<span class="wt-checkbox">
														<input id="wt-name3" type="checkbox" name="head">
														<label for="wt-name3"></label>
													</span>
												</td>
												<td>ArnP5mD2PdKcxYJJ</td>
												<td>February 27, 2019</td>
												<td>February 27, 2019</td>
												<td>$24.00</td>
												<td>
													<div class="wt-actionbtn">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo">view</a>
														<a href="javascript:void(0);" class="wt-deleteinfo">Print</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<span class="wt-checkbox">
														<input id="wt-name4" type="checkbox" name="head">
														<label for="wt-name4"></label>
													</span>
												</td>
												<td>5UP9JaLDpAxn6b6Z</td>
												<td>February 17, 2019</td>
												<td>February 17, 2019</td>
												<td>$24.00</td>
												<td>
													<div class="wt-actionbtn">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo">view</a>
														<a href="javascript:void(0);" class="wt-deleteinfo">Print</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<span class="wt-checkbox">
														<input id="wt-name5" type="checkbox" name="head">
														<label for="wt-name5"></label>
													</span>
												</td>
												<td>Npc2SHPfBW2ejwKy</td>
												<td>February 28, 2019</td>
												<td>February 28, 2019</td>
												<td>$24.00</td>
												<td>
													<div class="wt-actionbtn">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo">view</a>
														<a href="javascript:void(0);" class="wt-deleteinfo">Print</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<span class="wt-checkbox">
														<input id="wt-name6" type="checkbox" name="head">
														<label for="wt-name6"></label>
													</span>
												</td>
												<td>edaTuQwUE3yYd7TC</td>
												<td>February 27, 2019</td>
												<td>February 27, 2019</td>
												<td>$19.00</td>
												<td>
													<div class="wt-actionbtn">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo">view</a>
														<a href="javascript:void(0);" class="wt-deleteinfo">Print</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<span class="wt-checkbox">
														<input id="wt-name7" type="checkbox" name="head">
														<label for="wt-name7"></label>
													</span>
												</td>
												<td>S6R4DR7gbWp3SH4W</td>
												<td>February 28, 2019</td>
												<td>February 28, 2019</td>
												<td>$19.00</td>
												<td>
													<div class="wt-actionbtn">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo">view</a>
														<a href="javascript:void(0);" class="wt-deleteinfo">Print</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<span class="wt-checkbox">
														<input id="wt-name8" type="checkbox" name="head">
														<label for="wt-name8"></label>
													</span>
												</td>
												<td>gp8SNHXPVmpe3zan</td>
												<td>April 4, 2019</td>
												<td>April 4, 2019</td>
												<td>$24.00</td>
												<td>
													<div class="wt-actionbtn">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo">view</a>
														<a href="javascript:void(0);" class="wt-deleteinfo">Print</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<span class="wt-checkbox">
														<input id="wt-name9" type="checkbox" name="head">
														<label for="wt-name9"></label>
													</span>
												</td>
												<td>FnNLrYywx88N3rXA</td>
												<td>April 4, 2019</td>
												<td>April 4, 2019</td>
												<td>$19.00</td>
												<td>
													<div class="wt-actionbtn">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo">view</a>
														<a href="javascript:void(0);" class="wt-deleteinfo">Print</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<span class="wt-checkbox">
														<input id="wt-name10" type="checkbox" name="head">
														<label for="wt-name10"></label>
													</span>
												</td>
												<td>8fJHdFjCD6NgNcCF</td>
												<td>April 20, 2019</td>
												<td>April 20, 2019</td>
												<td>$19.00</td>
												<td>
													<div class="wt-actionbtn">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo">view</a>
														<a href="javascript:void(0);" class="wt-deleteinfo">Print</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<span class="wt-checkbox">
														<input id="wt-name11" type="checkbox" name="head">
														<label for="wt-name11"></label>
													</span>
												</td>
												<td>6dUQ4ynF8N2cDdAb</td>
												<td>April 30, 2019</td>
												<td>April 30, 2019</td>
												<td>$24.00</td>
												<td>
													<div class="wt-actionbtn">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo">view</a>
														<a href="javascript:void(0);" class="wt-deleteinfo">Print</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<span class="wt-checkbox">
														<input id="wt-name12" type="checkbox" name="head">
														<label for="wt-name12"></label>
													</span>
												</td>
												<td>CnsKMrpu8mEJCX9k</td>
												<td>May 7, 2019</td>
												<td>May 7, 2019</td>
												<td>$24.00</td>
												<td>
													<div class="wt-actionbtn">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo">view</a>
														<a href="javascript:void(0);" class="wt-deleteinfo">Print</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<span class="wt-checkbox">
														<input id="wt-name13" type="checkbox" name="head">
														<label for="wt-name13"></label>
													</span>
												</td>
												<td>CtecgGDdkh9LUuf6</td>
												<td>May 25, 2019</td>
												<td>May 25, 2019</td>
												<td>$19.00</td>
												<td>
													<div class="wt-actionbtn">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo">view</a>
														<a href="javascript:void(0);" class="wt-deleteinfo">Print</a>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
									<nav class="wt-pagination">
										<ul>
											<li class="wt-prevpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-left"></i></a></li>
											<li><a href="javascrip:void(0);">1</a></li>
											<li><a href="javascrip:void(0);">2</a></li>
											<li><a href="javascrip:void(0);">3</a></li>
											<li><a href="javascrip:void(0);">4</a></li>
											<li><a href="javascrip:void(0);">...</a></li>
											<li><a href="javascrip:void(0);">50</a></li>
											<li class="wt-nextpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-right"></i></a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 float-left">
							<div class="wt-dashboardboxcontent wt-offersidebar wt-dashboardbox-margin">
								<figure><img src="images/save-img-01.jpg" alt="img description"></figure>
								<div class="wt-offercontent">
									<h2>Save Big, Do Big</h2>
									<p>Consectetur adipisicing elitems sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim.</p>
									<a href="javascript:void(0);" class="wt-btn">Renew Now</a>
								</div>
							</div>
							<div class="wt-companyad">
								<figure class="wt-companyadimg"><img src="images/add-img.jpg" alt="img description"></figure>
								<span>Advertisement  255px X 255px</span>
							</div>
						</div>
					</div>
				</section>
				<!--Register Form End-->
			</main>
			<!--Main End-->

            @include('footer')
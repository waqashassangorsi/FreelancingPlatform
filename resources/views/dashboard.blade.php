@include ('header')
<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout">
				<!--Sidebar Start-->
				@include('sidebar')
				<!--Sidebar Start-->
				<!-- Alert Boxes Start -->
				<div class="wt-haslayout wt-jobalertsdashboard">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="wt-jobalerts">
								<div class="alert alert-warning alert-dismissible fade show">
									<em>Alert:</em> <span> You’ve consumed all you points to apply new job,</span>
									<a href="javascript:void(0)" class="wt-alertbtn warning">Buy Now</a>
									<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></a>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="wt-jobalerts">
								<div class="alert alert-primary alert-dismissible fade show">
									<em>info: </em> <span> You’ve no skills of “PHP” but still you can apply for this job.</span>
									<a href="javascript:void(0)" class="wt-alertbtn primary">View</a>
									<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></a>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="wt-jobalerts">
								<div class="alert alert-success alert-dismissible fade show">
									<em>Congratulation!</em> <span> we've received payment against your selected package Congratulation!:  “Extended Plan” and its valid till “Jun 27, 2019”</span>
									<a href="javascript:void(0)" class="wt-alertbtn success">Got It</a>
									<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></a>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="wt-jobalerts">
								<div class="alert alert-danger alert-dismissible fade show">
									<em>You’re Late:</em> <span> We’re sorry but the job you want to apply is no longer available You’re Late:  for public/freelancers anymore.</span>
									<a href="javascript:void(0)" class="wt-alertbtn danger">Got It</a>
									<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Alert Boxes End -->
				<!--Register Form Start-->
				<section class="wt-haslayout wt-jobpostedholder">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
							<div class="wt-haslayout wt-dbsectionspace">
								<div class="wt-dashboardbox">
									<div class="wt-dashboardboxtitle wt-yeartag">
										<h2>Job Posted</h2>
										<div class="wt-tag wt-widgettag">
											<a href="javascript:void(0);">2019</a>
											<a href="javascript:void(0);">2018</a>
											<a href="javascript:void(0);">2017</a>
										</div>
									</div>
									<div class="wt-dashboardboxcontent">
										<div id="wt-postedsilder" class="wt-postedsilder owl-carousel">
											<div class="item">
												<div class="wt-posteditem">
													<span><i class="fa fa-check-circle"></i><a href="javascript:void(0);"> Louanne Mattioli</a></span>
													<h3>I want some customization</h3>
												</div>
											</div>
											<div class="item">
												<div class="wt-posteditem">
													<span><i class="fa fa-check-circle"></i><a href="javascript:void(0);"> Louanne Mattioli</a></span>
													<h3>I want some customization</h3>
												</div>
											</div>
											<div class="item">
												<div class="wt-posteditem">
													<span><i class="fa fa-check-circle"></i> Louanne Mattioli</span>
													<h3>Website changes in HTML</h3>
												</div>
											</div>
										</div>
										<div class="wt-jobchartholder">
											<canvas id="wt-jobchart" class="wt-jobchart"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="wt-haslayout wt-dbsectionspace">
								<div class="wt-dashboardbox">
									<div class="wt-dashboardboxtitle">
										<h2>Current Hired Freelancers</h2>
									</div>
									<div class="wt-dashboardboxcontent wt-hiredfreelance">
										<div class="wt-userlistinghold wt-featured">
											<span class="wt-featuredtag"><img src="{{asset('frontend/images/featured.png')}}" alt="img description" data-tipso="Plus Member" class="template-content"></span>
											<figure class="wt-userlistingimg">
												<img src="{{asset('frontend/images/user/userlisting/img-01.jpg')}}" alt="image description" class="img description">
											</figure>
											<div class="wt-proposaldetails">
												<div class="wt-contenthead">
													<div class="wt-title">
														<h3><a href="javascript:void(0);">Terrence Tynan</a><span>Project Title Goes Here</span></h3>
														<a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a>
													</div>
												</div>													
											</div>	
										</div>
										<div class="wt-userlistinghold wt-featured">
											<figure class="wt-userlistingimg">
												<img src="{{asset('frontend/images/user/userlisting/img-02.jpg')}}" alt="image description" class="img description">
											</figure>
											<div class="wt-proposaldetails">
												<div class="wt-contenthead">
													<div class="wt-title">
														<h3><a href="javascript:void(0)">Aileen Remington</a><span>Project Title Goes Here</span></h3>
														<a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a>
													</div>
												</div>												
											</div>	
										</div>
										<div class="wt-userlistinghold wt-featured">
											<figure class="wt-userlistingimg">
												<img src="{{asset('frontend/images/user/userlisting/img-03.jpg')}}" alt="image description" class="img description">
											</figure>
											<div class="wt-proposaldetails">
												<div class="wt-contenthead">
													<div class="wt-title">
														<h3><a href="javascript:void(0)">Freddie Lisi</a><span>Project Title Goes Here</span></h3>
														<a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a>
													</div>
												</div>												
											</div>	
										</div>
										<div class="wt-userlistinghold wt-featured">
											<figure class="wt-userlistingimg">
												<img src="{{asset('frontend/images/user/userlisting/img-07.jpg')}}" alt="image description" class="img description">
											</figure>
											<div class="wt-proposaldetails">
												<div class="wt-contenthead">
													<div class="wt-title">
														<h3> <a href="javascript:void(0)">Golden Fellman</a><span>Project Title Goes Here</span></h3>
														<a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a>		
													</div>
												</div>												
											</div>	
										</div>																			
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<aside id="wt-sidebar" class="wt-sidebar wt-dashboardsave wt-dbsectionspace">
								<div class="wt-proposalsr wt-box-shadow">
									<div class="wt-proposalsrcontent">
										<figure>
											<img src="{{asset('frontend/images/thumbnail/img-17.png')}}" alt="image">
										</figure>
										<div class="wt-title">
											<h3>150</h3>
											<span>Total Ongoing Jobs</span>
										</div>
									</div> 
								</div>
								<div class="wt-proposalsr wt-box-shadow">
									<div class="wt-proposalsrcontent wt-componyfolow">
										<figure>
											<img src="{{asset('frontend/images/thumbnail/img-16.png')}}" alt="image">
										</figure>
										<div class="wt-title">
											<h3>1406</h3>
											<span>Total Completed Jobs</span>
										</div>
									</div> 
								</div>								
								<div class="wt-proposalsr wt-box-shadow">
									<div class="wt-proposalsrcontent  wt-freelancelike">
										<figure>
											<img src="{{asset('frontend/images/thumbnail/img-15.png')}}" alt="image">
										</figure>
										<div class="wt-title">
											<h3>2075</h3>
											<span>Total Cancelled Jobs</span>
										</div>
									</div> 
								</div>
								<div class="wt-proposalsr wt-box-shadow">
									<div class="wt-proposalsrcontent wt-repostjob">
										<figure>
											<img src="{{asset('frontend/images/thumbnail/img-18.png')}}" alt="image">
										</figure>
										<div class="wt-title">
											<h3>334</h3>
											<span>Total Repost Jobs</span>
										</div>
									</div> 
								</div>								
							</aside>
						</div>
					</div>
				</section>
				<!--Register Form End-->
				<!--More Details Start-->
				<section class="wt-haslayout wt-dbsectionspace wt-padding-add-top wt-moredetailsholder">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="wt-insightsitem wt-dashboardbox wt-insightnoticon">
								<figure class="wt-userlistingimg">
									<img src="{{asset('frontend/images/thumbnail/img-19.png')}}" alt="image description" class="mCS_img_loaded">
								</figure>
								<div class="wt-insightdetails">
									<div class="wt-title">
										<h3>New Messages</h3>
										<a href="javascript:void(0)">Click To View</a>
									</div>													
								</div>	
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="wt-insightsitem wt-dashboardbox">
								<figure class="wt-userlistingimg">
									<img src="{{asset('frontend/images/thumbnail/img-20.png')}}" alt="image description" class="mCS_img_loaded">
								</figure>
								<div class="wt-insightdetails">
									<div class="wt-title">
										<h3>Latest Proposals</h3>
										<a href="javascript:void(0)">Click To View</a>
									</div>													
								</div>	
							</div>
						</div>												
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="wt-insightsitem wt-dashboardbox">
								<span class="wt-pakagespinner"><i class="fa fa-spinner wt-uploading"></i> D29 : H06 : M38 : S42</span>
								<figure class="wt-userlistingimg">
									<img src="{{asset('frontend/images/thumbnail/img-21.png')}}" alt="image description" class="mCS_img_loaded">
								</figure>
								<div class="wt-insightdetails">
									<div class="wt-title">
										<h3>Check Package Expiry</h3>
										<a href="javascript:void(0)">Click To View</a>
									</div>													
								</div>	
							</div>
						</div>						
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="wt-insightsitem wt-dashboardbox">
								<figure class="wt-userlistingimg">
									<img src="{{asset('frontend/images/thumbnail/img-22.png')}}" alt="image description" class="mCS_img_loaded">
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
				</section>
			<!--More Details End-->
			</main>
			<!--Main End-->	

    @include('footer')
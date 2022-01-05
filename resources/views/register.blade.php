@include('header')

<!--Inner Home Banner Start-->
<div class="wt-haslayout wt-innerbannerholder">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
							<div class="wt-innerbannercontent">
							<div class="wt-title"><h2>Join Now For FREE</h2></div>
							<ol class="wt-breadcrumb">
								<li><a href="index.html">Home</a></li>
								<li class="wt-active">Join Now</li>
							</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Inner Home End-->
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
				<!--Register Form Start-->
				<div class="wt-haslayout wt-main-section">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-xs-12 col-sm-12 col-md-10 push-md-1 col-lg-8 push-lg-2">
								<div class="wt-registerformhold">
									<div class="wt-registerformmain">
										<div class="wt-registerhead">
											<div class="wt-title">
												<h3>Join For a Good Start</h3>
											</div>
											<div class="wt-description">
												<p>Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina</p>
											</div>
										</div>
										<div class="wt-joinforms">
											
											<form method = "post" id="regForm" class="wt-formtheme wt-formregister form-group btn-submit">
												@csrf
                                                <div id = "sec1"> 
                                                        <ul class="wt-joinsteps">
                                                            <li class="wt-active"><a href="javascrip:void(0);">01</a></li>
                                                            <li><a href="javascrip:void(0);">02</a></li>
                                                            <li><a href="javascrip:void(0);">03</a></li>
                                                            <li><a href="javascrip:void(0);">04</a></li>
                                                        </ul>
                                                        <fieldset class="wt-registerformgroup">
                                                            <div class="form-group wt-form-group-dropdown form-group-half">
                                                              
                                                                <input type="text" name="firstname" id = "firstname" class="form-control" placeholder="First Name">
                                                            </div>
                                                            <div class="form-group form-group-half">
                                                                <input type="text" name="lastname" id = "lastname" class="form-control" placeholder="Last Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="email" id = "email" class="form-control" placeholder="Email">
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <a href = "#sec2" id = "next2" class="wt-btn">Start Now</a>
                                                            </div>
                                                        </fieldset>
                                                </div>
                                                <div id = "sec2" > 
                                                        <ul class="wt-joinsteps">
                                                            <li class="wt-done-next"><a href="javascrip:void(0);"><i class="fa fa-check"></i></a></li>
                                                            <li class="wt-active"><a href="javascrip:void(0);">02</a></li>
                                                            <li><a href="javascrip:void(0);">03</a></li>
                                                            <li><a href="javascrip:void(0);">04</a></li>
                                                        </ul>
                                                        <fieldset class="wt-registerformgroup">
													<div class="form-group">
														<span class="wt-select">
															<select class="chosen-select locations form-control" data-placeholder="Country" id = "country" name="country">
																<option value="United State">United State</option>
																<option value="Canada">Canada</option>
																<option value="England">England</option>
																<option value="Switzerland">Switzerland</option>
																<option value="New Zealand">New Zealand</option>
																<option value="Pakistan">Pakistan</option>
															</select>
														</span>
													</div>
													<div class="form-group form-group-half">
														<input type="password" name="password" id = "password" class="form-control" placeholder="Password*">
													</div>
													<div class="form-group form-group-half">
														<input type="password" name="repassword" id = "repassword" class="form-control" placeholder="Retype Password*">
													</div>
												</fieldset>
												<fieldset class="wt-formregisterstart">
													<div class="wt-title wt-formtitle"><h4>Start as :</h4></div>
													<ul class="wt-accordionhold wt-formaccordionhold accordion">
													<li>
															<div class="wt-accordiontitle form-group">
																<span class="wt-radio">
																	<input id="wt-buyer" class ="form-control" type="radio" name="accounttype" value="buyer" >
																	<label for="wt-buyer">Buyer <span>(Signup as Buyer &amp;)</span></label>
																</span>
																<span class="wt-radio">
																	<input id="wt-freelancer" class = "form-control" type="radio" name="accounttype" value="freelancer">
																	<label for="wt-freelancer">Freelancer <span>(Signup as freelancer &amp; get hired)</span></label>
																</span>
															</div>
														</li>
														<!-- <li>
															<div class="wt-accordiontitle  form-group">
																<span class="wt-radio">
																	<input id="wt-freelancer" class = "form-control" type="radio" name="accounttype" value="freelancer">
																	<label for="wt-freelancer">Freelancer <span>(Signup as freelancer &amp; get hired)</span></label>
																</span>
															</div>
														</li> -->
													</ul>
												</fieldset>
												<fieldset class="wt-termsconditions">
													<div class="wt-checkboxholder">
														<span class="wt-checkbox">
															<input id="termsconditions" type="checkbox" name="termsconditions" value="termsconditions" checked>
															<label for="termsconditions"><span>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis.</span></label>
														</span>
														<span class="wt-checkbox">
															<input id="termsconditions2" type="checkbox" name="termsconditions" value="termsconditions">
															<label for="termsconditions2"><span>Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse<a href="javascrip:void(0);"> Terms &amp; Conditions</a></span></label>
														</span>
														<button  type = "button" name = "submit" id = "next3" class="wt-btn">Continueghgg</button>
													</div>
												</fieldset>
                                                </div>
                                                <div id = "sec3">
                                                    <ul class="wt-joinsteps">
                                                        <li class="wt-done-next"><a href="javascrip:void(0);"><i class="fa fa-check"></i></a></li>
                                                        <li class="wt-done-next"><a href="javascrip:void(0);"><i class="fa fa-check"></i></a></li>
                                                        <li class="wt-active"><a href="javascrip:void(0);">03</a></li>
                                                        <li><a href="javascrip:void(0);">04</a></li>
                                                    </ul>
                                                    <fieldset>
													<div class="form-group">
														<label>We’ve sent verification code on your email.<a href="javascript:void(0);"> Why I need code?</a></label>
														<input type="text" name="code" class="form-control" placeholder="Enter Verification Code">
													</div>
													<div class="form-group wt-btnarea">
														<a href = "#sec4" id = "next4"  class="wt-btn">Verify now</a>
													</div>
												</fieldset>
                                                </div>
                                                <div id = "sec4">
                                                        <ul class="wt-joinsteps">
                                                            <li class="wt-done-next"><a href="javascrip:void(0);"><i class="fa fa-check"></i></a></li>
                                                            <li class="wt-done-next"><a href="javascrip:void(0);"><i class="fa fa-check"></i></a></li>
                                                            <li class="wt-done-next"><a href="javascrip:void(0);"><i class="fa fa-check"></i></a></li>
                                                            <li class="wt-done-next"><a href="javascrip:void(0);"><i class="fa fa-check"></i></a></li>
                                                        </ul> 
                                                <div class="wt-gotodashboard form-group">
                                                    <span>Would you like to add your team?<a href="javascrip:void(0)"> Start Adding Now</a></span>
                                                    <button class="wt-btn">Goto Dashboard</button>
                                                </div>
                                                </div>
												@csrf
											</form>
											<div id = "logwithsocial" class="wt-joinnowholder">
												<div class="wt-title">
													<h4>Join Now With</h4>
												</div>
												<div class="wt-description">
													<p>Use a social account for faster login or easy registration to directly get in to your account and start a good business</p>
												</div>
												<ul class="wt-socialicons wt-iconwithtext">
													<li class="wt-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i><em>Facebook</em></a>
													</li>
													<!-- <li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i><em>Twitter</em></a></li> -->
													<li class="wt-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i><em>Google</em></a></li>
													<!-- <li class="wt-instagram"><a href="javascript:void(0);"><i class="fab fa-instagram"></i><em>Instagram</em></a></li> -->
												</ul>
											</div>
										</div>
									</div>
									<div id = "loginsec" class="wt-registerformfooter">
										<span>Already Have an Account? <a href="javascript:void(0);">Login Now</a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Register Form End-->
			</main>
			<!--Main End-->
@include('footer')
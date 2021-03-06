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
								<li class="menu-item-has-children wt-active">
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
				<section class="wt-haslayout wt-dbsectionspace">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 float-left">
							<div class="wt-dashboardbox">
								<div class="wt-dashboardboxtitle">
									<h2>Post a Job</h2>
								</div>
								<div class="wt-dashboardboxcontent">
									<div class="wt-jobdescription wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Job Description</h2>
										</div>
										<form class="wt-formtheme wt-userform wt-userformvtwo">
											<fieldset>
												<div class="form-group">
													<input type="text" name="title" class="form-control" placeholder="Job Title">
												</div>
												<div class="form-group form-group-half wt-formwithlabel">
													<span class="wt-select">
														<label for="selectoption">Service Level:</label>
														<select>
															<option value="">Professional</option>
															<option value="">Professional</option>
														</select>
													</span>
												</div>
												<div class="form-group form-group-half wt-formwithlabel">
													<span class="wt-select">
														<label for="selectoption">Job Type:</label>
														<select>
															<option value="">Fixed</option>
															<option value="">Fixed</option>
														</select>
													</span>
												</div>
												<div class="form-group form-group-half wt-formwithlabel">
													<span class="wt-select">
														<label for="selectoption">Job Duration:</label>
														<select>
															<option value="">02 Weeks</option>
															<option value="">03 Weeks</option>
														</select>
													</span>
												</div>
												<div class="form-group form-group-half wt-formwithlabel">
													<span class="wt-select">
														<label for="selectoption">Featured Job:</label>
														<select id="selectoption">
															<option value="">Yes</option>
															<option value="">No</option>
														</select>
													</span>
												</div>
											</fieldset>
										</form>
									</div>
									<div class="wt-jobdetails wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Job Details</h2>
										</div>
										<form class="wt-formtheme wt-userform wt-userformvtwo">
											<fieldset>
												<div class="form-group">
													<textarea id="wt-tinymceeditor" class="wt-tinymceeditor" placeholder="Add Job Detail Here"></textarea>
												</div>
											</fieldset>
										</form>
									</div>
									<div class="wt-jobskills wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Skills Required</h2>
										</div>
										<form class="wt-formtheme wt-userform wt-userformvtwo">
											<fieldset>
												<div class="form-group">
													<select class="chosen-select Skills" data-placeholder="Skills" name="Skills" multiple>
														<option value="Website Design">Website Design</option>
														<option value="PHP">PHP</option>
														<option value="HTML 5">HTML 5</option>
														<option value="Graphic Design">Graphic Design</option>
														<option value="SEO">SEO</option>
														<option value="Bootstrap">Bootstrap</option>
													</select>
												</div>
												<div class="form-group wt-btnarea">
													<a href="javascript:void(0);" class="wt-btn">Add Skills</a>
												</div>
												<div class="form-group wt-myskills">
													<ul class="">
														<li>
															<div class="wt-dragdroptool">
																<a href="javascript:void(0)" class="lnr lnr-menu"></a>
															</div>
															<span class="skill-dynamic-html">PHP (<em class="skill-val">90</em>%)</span>
															<span class="skill-dynamic-field">
																<input type="text" name="skills[1][percentage]" value="90">
															</span>
															<div class="wt-rightarea">
																<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
															</div>
														</li>
														<li class="">
															<div class="wt-dragdroptool"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
															<span class="skill-dynamic-html">Website Design (<em class="skill-val">90</em>%)</span>
															<span class="skill-dynamic-field">
																<input type="text" name="skills[1][percentage]" value="90">
															</span>
															<div class="wt-rightarea">
																<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
															</div>
														</li>
														<li>
															<div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
															<span class="skill-dynamic-html">HTML 5 (<em class="skill-val">90</em>%)</span>
															<span class="skill-dynamic-field">
																<input type="text" name="skills[1][percentage]" value="90">
															</span>
															<div class="wt-rightarea">
																<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
															</div>
														</li>
														<li>
															<div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
															<span class="skill-dynamic-html">Graphic Design (<em class="skill-val">80</em>%)</span>
															<span class="skill-dynamic-field">
																<input type="text" name="skills[1][percentage]" value="90">
															</span>
															<div class="wt-rightarea">
																<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
															</div>
														</li>
														<li>
															<div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
															<span class="skill-dynamic-html">Rate Your Skill (<em class="skill-val">10</em>%)</span>
															<span class="skill-dynamic-field">
																<input type="text" name="skills[1][percentage]" value="90">
															</span>
															<div class="wt-rightarea">
																<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
															</div>
														</li>
														<li>
															<div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
															<span class="skill-dynamic-html">SEO (<em class="skill-val">35</em>%)</span>
															<span class="skill-dynamic-field">
																<input type="text" name="skills[1][percentage]" value="90">
															</span>
															<div class="wt-rightarea">
																<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
															</div>
														</li>
													</ul>
												</div>
											</fieldset>
										</form>
									</div>
									<div class="wt-attachmentsholder">
										<div class="wt-tabscontenttitle">
											<h2>Attachments</h2>
											<div class="wt-rightarea">
												<span>Show ???Attachments??? after hiring</span>
												<div class="wt-on-off float-right">
													<input type="checkbox" id="hide-on" name="contact_form">
													<label for="hide-on"><i></i></label>
												</div>
											</div>
										</div>
										<form class="wt-formtheme wt-formprojectinfo wt-formcategory">
											<fieldset>
												<div class="form-group form-group-label">
													<div class="wt-labelgroup">
														<label for="file">
															<span class="wt-btn">Select Files</span>
															<input type="file" name="file" id="file">
														</label>
														<span>Drop files here to upload</span>
														<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
													</div>
												</div>
												<div class="form-group">
													<ul class="wt-attachfile">
														<li class="wt-uploading">
															<span class="uploadprogressbar"></span>
															<span>Wireframe Document.doc</span>
															<em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
														</li>
														<li>
															<span class="uploadprogressbar"></span>
															<span>Requirments.pdf</span>
															<em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
														</li>
														<li class="wt-uploaded">
															<span class="uploadprogressbar"></span>
															<span>Company Intro.docx</span>
															<em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
														</li>
													</ul>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
							</div>
							<div class="wt-updatall">
								<i class="ti-announcement"></i>
								<span>Post job by just clicking on ???Post Job Now??? button.</span>
								<a class="wt-btn" href="javascript:void(0);">Post Job Now</a>
							</div>
						</div>
					</div>
				</section>
				<!--Register Form End-->
			</main>
			<!--Main End-->	
@include('footer')
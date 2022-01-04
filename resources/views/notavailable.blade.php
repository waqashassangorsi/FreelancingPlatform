@include('header')
<!--Inner Home Banner Start-->
<div class="wt-haslayout wt-innerbannerholder">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
							<div class="wt-innerbannercontent">
							<div class="wt-title"><h2>404 Error</h2></div>
							<ol class="wt-breadcrumb">
								<li><a href="index.html">Home</a></li>
								<li class="wt-active">404 Error</li>
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
								<div class="wt-404errorpage">
									<figure class="wt-404errorimg"><img src="{{asset('frontend/images/404-img.jpg')}}" alt="img description"></figure>
									<div class="wt-404errorcontent">
										<div class="wt-title">
											<h3>Link Might Crashed or Not Working!</h3>
										</div>
										<div class="wt-description">
											<p>Aliquip ex ea commodo consequat aute irure dolor in voluptate velit cillum dolore eu fugiat nulla pariatur or go back to <a href="javascript:void(0);">Homepage</a></p>
										</div>
										<form class="wt-formtheme wt-formhelpsearch">
											<fieldset>
												<div class="form-group">
													<input type="text" name="searching" class="form-control" placeholder="Searching Might Help">
													<a href="javascript:void(0);" class="wt-btnsearch">Search Now</a>
												</div>
											</fieldset>
										</form>
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
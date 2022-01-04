@if(2 <= 1)

<!--Footer Start-->
<footer id="wt-footer" class="wt-footer wt-haslayout">
				<div class="wt-footerholder wt-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6">
								<div class="wt-footerlogohold">
									<strong class="wt-logo"><a href="index.html"><img src="images/flogo.png" alt="company logo here"></a></strong>
									<div class="wt-description">
										<p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum dolore eu fugiat nulla pariatur lokaim urianewce <a href="javascript:void(0);">more...</a></p>
									</div>
									<ul class="wt-socialiconssimple wt-socialiconfooter">
										<li class="wt-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
										<li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
										<li class="wt-youtube"><a href="javascript:void(0);"><i class="fab fa-youtube"></i></a></li>
										<li class="wt-instagram"><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
										<li class="wt-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-3 col-lg-3">
								<div class="wt-footercol wt-widgetcompany">
									<div class="wt-fwidgettitle">
										<h3>Company</h3>
									</div>
									<ul class="wt-fwidgetcontent">
										<li><a href="javascript:void(0);">About Us</a></li>
										<li><a href="javascript:void(0);">How It Works</a></li>
										<li><a href="javascript:void(0);">Careers</a></li>
										<li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
										<li><a href="javascript:void(0);">Trust &amp; Safety</a></li>
										<li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-3 col-lg-3">
								<div class="wt-footercol wt-widgetexplore">
									<div class="wt-fwidgettitle">
										<h3>Explore More</h3>
									</div>
									<ul class="wt-fwidgetcontent">
										<li><a href="javascript:void(0);">Freelancers in USA</a></li>
										<li><a href="javascript:void(0);">Freelancers in Canada</a></li>
										<li><a href="javascript:void(0);">Freelancers in Australia</a></li>
										<li><a href="javascript:void(0);">Jobs in USA</a></li>
										<li><a href="javascript:void(0);">Find Jobs</a></li>
										<li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wt-haslayout wt-joininfo">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
								<div class="wt-companyinfo">
									<span><a href="javascript:void(0);">New @ Worktern?</a> Dotem eiusmod tempor incune utnaem labore etdolore.</span>
								</div>
								<div class="wt-fbtnarea">
									<a href="javascript:void(0)" class="wt-btn">Join Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wt-haslayout wt-footerbottom">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<p class="wt-copyrights"><span>Worktern.</span> © 2018 All Rights Reserved.</p>
								<nav class="wt-addnav">
									<ul>
										<li><a href="javascript:void(0);">News</a></li>
										<li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
										<li><a href="javascript:void(0);">Privacy Policy</a></li>
										<li><a href="javascript:void(0);">Career</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!--Footer End-->

			@endif
		</div>
		<!--Content Wrapper End-->
	</div>
	<!--Wrapper End-->
    @include('footer.foot')
	<script>
		const menu_icon = document.querySelector('.menu-icon');
		function addClassFunThree() {
	        this.classList.toggle("click-menu-icon");
	    }
	    menu_icon.addEventListener('click', addClassFunThree);
		var ctx = document.getElementById("wt-jobchart");
		var wt_jobchart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: ["Week 01", "Week 02", "Week 03", "Week 04"],
		        datasets: [{
		            label: 'Jobs Summary',
		            data: [ 6, 8, 4, 7, 10],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true,
		                    fontSize:12,
		                    fontColor:'#767676'
		                }
		            }]
		        },
		        legend: {
		            labels: {
		                fontSize:14,
		                fontColor: '#767676',
		                FontFamily:'Open Sans',
		                
		            }
		        }
		    }
		});
	</script>
</body>
</html>
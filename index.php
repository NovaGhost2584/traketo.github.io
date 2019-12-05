<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Home Page Settings' order='10'>
	<cms:editable name='title' label='Meta Title (Max Length - 60 Characters)' type='text' maxlength='60' />
	<cms:editable name='desc' label='Meta Description (Max Length - 150 Characters)' type='text' maxlength='150' />
	<cms:editable name='image' label='Meta Image' type='image' show_preview='1' width='1200' height='630' />
</cms:template>
	<cms:embed 'head.php' />

	<body>
		<div class="overflow-fix">
			
		<!-- Video Background -->
		<div class="jumbotron jumbotron-fluid videoscroll">
			<video autoplay muted loop poster="/images/HomePoster_01.png" style="height: 100%">    
				<source src="https://s3.us-east-2.amazonaws.com/aws-codestar-us-east-2-774818991484/PulseHeroVid.mp4" data-src="https://s3.us-east-2.amazonaws.com/aws-codestar-us-east-2-774818991484/PulseHeroVid.mp4" type="video/mp4">
			</video>

			<div class="container position-relative" style="z-index: 9;">
				<div class="d-flex text-center align-items-center title-text">
				  <div class="w-100">
					<p class="display-1 font-weight-bold text-pulse text-left shadowed2">Immersive Solutions</p>
					<p class="display-1 font-weight-bold text-white text-left shadowed2">For Enterprise</p>
					<center>
						<a href="<cms:link masterpage='services.php' />"><button type="button" class="btn-black mt-5">Learn More</button></a>
					</center>
				  </div>
				</div>
			</div>
			
		<div class="icon-scroll"></div>
		</div>
		
			<cms:embed 'header.php' />
	  
			
		<!-- Green Shapes -->
		<div class="container position-relative mw-100 pushdown">
			<div class="row greenshapes green"></div>
		</div>
			
			
		<!-- VR Blurb -->
		<div class="container-fluid m-auto">
			<div class="row background-pulse greenshapes justify-content-center">
				<cms:pages masterpage='vr-service.php'>
					<cms:show_repeatable 'vr_devices' limit='1'>
						<div class="col-sm-2 pb-5" style="min-width: 300px; margin-right: 3vw;">
							<div class="tk-circle shadowed2" data-aos="fade-right">
								<img src="<cms:show vr_device_image />" alt="<cms:show vr_device_manu /> <cms:show vr_device_name />" class="shadowed2 circle-img" />
							</div>
						</div>
					</cms:show_repeatable>
				</cms:pages>
				<div class="col-sm-6 pb-5 vr-bg" data-aos="fade-left" data-aos-delay>
					<p class="content-title">Virtual Reality</p>
					<p class="content-sub-title">We develop custom virtual reality applications for enterprise. Virtual reality can be used as a powerful and engaging tool for visualization, simulation, training, and education.</p>
					<p class="content-text text-align-justify">We create custom virtual reality applications for training, simulation, communication, and visualization. VR offers an unparalleled level of engagement and innovation that can showcase brands in an exciting new way. From uniquely crafted VR experiences to photo-realistic and immersive environments, our team has experience working with companies of all sizes.</p>
					<p class="content-text text-align-justify">
					Interested in seeing more? Check out our VR portfolio to be immersed in our work.</p>
					<!--a href="#"--><button type="button" class="btn-purple" data-toggle="modal" data-target="#vrmodal">View Our Web VR Experience</button><!--/a-->
				</div>
			</div>	
		</div>
			
		<!-- VR Modal -->
		<div class="modal fade" id="vrmodal" tabindex="-1" role="dialog" aria-labelledby="vrModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="vrModalLabel">VR Coming Soon...</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				Our Web VR experience is still being developed.  Please come back at a later date or contact us to find out more about what we can do.
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
			
		<!-- AR Blurb -->
		<div class="container-fluid m-auto mt-5 greenshapes">
			<div class="row background-pulse justify-content-center swap">
				<div class="col-sm-6 pb-5 ar-bg swapitem" data-aos="fade-right" data-aos-delay>
					<p class="content-title text-align-right">Augmented Reality</p>
					<p class="content-sub-title text-align-right">Virtual Reality is super cool and you should try it then you should call us</p>
					<p class="content-text text-align-justify">Using augmented reality, your audience can overlay data and 3D models on the real-world. AR is being used as an innovative tool for marketing and visualization to engage with brands in a groundbreaking new way. Immersive technology has the capability to change how audiences interact with data and experience the world.</p>
					<p class="content-text text-align-justify">
					Interested in seeing more? Check out our AR portfolio to be immersed in our work.</p>
					<!--a href="#"--><button type="button" class="btn-purple" data-toggle="modal" data-target="#armodal">View Our Web AR Experience</button><!--/a-->
				</div>
				<cms:pages masterpage='ar-service.php'>
					<cms:show_repeatable 'ar_devices' limit='1'>
						<div class="col-sm-2 pb-5 swapitem" style="min-width: 300px; margin-right: 3vw;">
							<div class="tk-circle shadowed2" data-aos="fade-left">
								<img src="<cms:show ar_device_image />" alt="<cms:show ar_device_manu /> <cms:show ar_device_name />" class="shadowed2 circle-img" />
							</div>
						</div>
					</cms:show_repeatable>
				</cms:pages>
			</div>	
		</div>
			
		<!-- AR Modal -->
		<div class="modal fade" id="armodal" tabindex="-1" role="dialog" aria-labelledby="arModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="arModalLabel">AR Coming Soon...</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				Our Web AR experience is still being developed.  Please come back at a later date or contact us to find out more about what we can do.
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
			
		<!-- Call to action bar -->
		<div class="container-fluid greenshapes parallax-window m-auto pt-5" data-parallax="scroll" data-image-src="/images/Parallax-Purple.jpg">
			<div class="row justify-content-center">
				<div class="col">
					<div class="text-light">
						<center>
							<span class="font-weight-bold" style="font-size:2rem">Ready to talk?</span>
							<span style="font-size:2rem">Contact us today to get started!</span>
						</center>
					</div>
				</div>
			</div>
			<div class="row justify-content-center pt-5">
				<div class="col">
					<center>
							<button type="button" class="purechat-button-expand btn-black p-4 px-5">
								I'm Ready
							</button>
					</center>
				</div>
			</div>
		</div>
					
		<!-- client list -->
		<div class="container greenshapes m-auto text-center background-white">
			<p class="pt-5 display-5 font-weight-bold">Who has worked with us?</p>
			 <div id="carousel-clients" class="carousel slide mt-5" data-ride="carousel">
				<div class="carousel-inner row w-100 mx-auto" role="listbox">
					<cms:pages masterpage='clients.php'>
						<cms:show_repeatable 'clients'>
							<cms:if k_count=='1'>							
								<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
							<cms:else />
								<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							</cms:if>
								<img src="<cms:show client_logo />" class="img-fluid mx-auto d-block" alt="<cms:show client_name />">
							</div>
						</cms:show_repeatable>
					</cms:pages>
				</div>
				<a class="carousel-control-prev" href="#carousel-clients" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel-clients" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
			
			
		<!-- team members -->
		<div class="container greenshapes m-auto text-center pt-5 background-white">
			<hr>
			<p class="pt-5 display-5 font-weight-bold">Meet the Team!</p>
			<div class="row pt-5">
				<cms:pages masterpage='team.php' >
					<cms:show_repeatable 'team_members' >					
						<div class="col" data-aos="flip-right">
							<div class="team-circle shadowed2"><img src="<cms:show team_member_image />" alt="<cms:show team_member_name />" /></div>
							<p class="display-6 font-weight-bold pt-4"><cms:show team_member_name /></p>
							<p><cms:show team_member_title /></p>
						</div>					
					</cms:show_repeatable>
				</cms:pages>
			</div>
		</div>
			
			
		<!-- news -->
		<div class="container greenshapes pt-5 mb-n5 background-white">
			<hr>
			<p class="pt-5 display-5 font-weight-bold text-center">What's Happening?</p>
			<div class="row pt-5">
				<cms:pages masterpage='news.php' limit='3'>
					
					<div class="col-sm-12 col-md-6 col-lg-4 pt-3">
						<div class="card text-white bg-dark2">
							<img class="card-img-top" src="<cms:show blog_image />" alt="<cms:show k_page_title />" />
							<div class="card-body">								
								<span class="pr-3">
									<cms:date k_page_date format='F j, Y'/>
								</span>
								<p class="card-title display-6"><cms:show k_page_title /></p>
								<hr style="border-top: 1px solid #fff;">
								<p class="card-text"><cms:excerptHTML count='25' ignore='img'><cms:show blog_content /></cms:excerptHTML></p>
								<a href="<cms:show k_page_link />" class="btn btn-primary">Continue Reading...</a>
							</div>
						</div>
					</div>
					
				</cms:pages>
				
			</div>
		</div>
			
			<cms:embed 'footer.php' />
		
		</div>	
	</body>
</html>
<?php COUCH::invoke(); ?>
<?php require_once( 'admin/cms.php' ); ?>
<cms:template title="Services Page" order='50'>
	<cms:editable name='title' label='Meta Title (Max Length - 600 Characters)' type='text' maxlength='60' />
	<cms:editable name='desc' label='Meta Description (Max Length - 150 Characters)' type='text' maxlength='150' />
	<cms:editable name='image' label='Meta Image' type='image' show_preview='1' width='1200' height='630' />
</cms:template>
<cms:embed 'head.php' />

	<body>
		<div class="overflow-fix">
		<cms:embed 'header.php' />
		
		<div class="container-fluid parallax-window-3 m-auto pt-5" data-parallax="scroll" data-image-src="/images/Parallax-VR_2.jpg">
			<div class="row justify-content-center">
				<div class="col">
					<p class="display-1 font-weight-bold text-white shadowed2 text-center align-middle" style="padding-top:15vh;">Services</p>
				</div>
			</div>
		</div>
			
		<div class="container p-5">
			<div class="row">				
				<div class="col-lg-4 col-md-6 col-sm-12 py-3">
					<div class="card border-success mb-3 service-img-vr service-card-img">
					  <h5 class="card-header bg-transparent card-title text-white z999">Virtual Reality</h5>
					  <div class="card-body text-white z999">
						<p class="card-text">We create custom virtual reality applications for training, simulation, communication, and visualization. VR offers an unparalleled level of engagement and innovation that can showcase brands in an exciting new way. From uniquely crafted VR experiences to photo-realistic and immersive environments, our team has experience working with companies of all sizes.</p>
					  </div>
						<div class="card-service-overlay"></div>					  
						<a href="/vr-service.php" class="btn btn-primary service-btn">Learn More</a>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-sm-12 py-3">
					<div class="card border-success mb-3 service-img-ar service-card-img">
					  <h5 class="card-header bg-transparent card-title text-white z999">Augmented Reality</h5>
					  <div class="card-body text-white z999">
						<p class="card-text">Using augmented reality, your audience can overlay data and 3D models on the real-world. AR is being used as an innovative tool for marketing and visualization to engage with brands in a groundbreaking new way. Immersive technology has the capability to change how audiences interact with data and experience the world.</p>
					  </div>
						<div class="card-service-overlay"></div>					  
						<a href="/ar-service.php" class="btn btn-primary service-btn">Learn More</a>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-sm-12 py-3">
					<div class="card border-success mb-3 service-img-consulting service-card-img">
					  <h5 class="card-header bg-transparent card-title text-white z999">Consulting</h5>
					  <div class="card-body text-white z999">
						<p class="card-text">Virtual and augmented reality can offer opportunities for you to enhance value and provide unique benefits to you and your team. With our expertise in immersive technology development, we work with you to strategize, plan, and develop innovative solutions that suit your business</p>
					  </div>
						<div class="card-service-overlay"></div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-sm-12 py-3">
					<div class="card border-success mb-3 service-img-enterprise service-card-img">
					  <h5 class="card-header bg-transparent card-title text-white z999">Enterprise IT Support</h5>
					  <div class="card-body text-white z999">
						<p class="card-text">Functional, efficient, and powerful IT support is foundational to keeping your operations seamless and impactful. Let’s discuss how analytics, device management, and dedicated support can improve your immersive application.</p>
					  </div>
						<div class="card-service-overlay"></div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-sm-12 py-3">
					<div class="card border-success mb-3 service-img-360 service-card-img">
					  <h5 class="card-header bg-transparent card-title text-white z999">360 Video Production</h5>
					  <div class="card-body text-white z999">
						<p class="card-text">Traditional video formats limit your content to a rectangular non-immersive frame. With panoramic video, viewers can inhabit your content to increase immersion, engagement, and to communicate advanced concepts.</p>
					  </div>
						<div class="card-service-overlay"></div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-sm-12 py-3">
					<div class="card border-success mb-3 service-img-web service-card-img">
					  <h5 class="card-header bg-transparent card-title text-white z999">Immersive Web Design</h5>
					  <div class="card-body text-white z999">
						<p class="card-text">Content located on the web is no longer confined to a 2D screen. Using a mobile iOS or Android device, your audience can experience your brand as a virtual reality or augmented reality experience. Let’s discuss how immersive web design could supplement your initiatives.</p>
					  </div>
						<div class="card-service-overlay"></div>
					</div>
				</div>
			</div>
		</div>
			
			
		<cms:embed 'footer.php' />
		</div>	
	</body>
</html>
<?php COUCH::invoke(); ?>
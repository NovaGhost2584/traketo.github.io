<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='AR Service Page' order='70'>
	<cms:editable name='title' label='Meta Title (Max Length - 600 Characters)' type='text' maxlength='60' />
	<cms:editable name='desc' label='Meta Description (Max Length - 150 Characters)' type='text' maxlength='150' />
	<cms:editable name='image' label='Meta Image' type='image' show_preview='1' width='1200' height='630' />
	<cms:repeatable name='ar_devices' label='AR Devices' >
		<cms:editable name='ar_device_image' label='AR Device Image' type='image' show_preview='1' />
		<cms:editable name='ar_device_manu' label='AR Device Manufacturer' type='text'></cms:editable>
		<cms:editable name='ar_device_name' label='AR Device Name' type='text'></cms:editable>
	</cms:repeatable>
	</cms:template>
	<cms:embed 'head.php' />

	<body class="background-pulse">
		<div class="overflow-fix">
			<cms:embed 'header.php' />
		
		<div class="container-fluid parallax-window-2 m-auto pt-5" data-parallax="scroll" data-image-src="/images/Parallax-AR.jpg">
			<div class="row justify-content-center">
				<div class="col">
					<p class="display-1 font-weight-bold text-white shadowed2 text-center align-middle" style="padding-top:30vh;">Augmented Reality</p>
				</div>
			</div>
		</div>
			
		<div class="container text-center p-5">
			<p class="pt-5 display-5 font-weight-bold">AR Platforms</p>
			<p>Pulse Labs can develop truly immersive applications for any modern VR headset, whether it's high fidelty desktop VR or mobile VR.</p>
			<div class="row">
				<cms:show_repeatable 'ar_devices' >	
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 py-3" data-aos="fade-right">
					<div class="tk-circle shadowed2">
						<img src="<cms:show ar_device_image />" alt="<cms:show ar_device_manu /> <cms:show ar_device_name />" class="shadowed2 circle-img" />
					</div>
					<p class="display-6 font-weight-bold pt-4"><cms:show ar_device_manu /></p>
					<p><cms:show ar_device_name /></p>
				</div>
				</cms:show_repeatable>
			</div>
		</div>
			
		<!-- Call to action bar -->
		<div class="container-fluid parallax-window m-auto pt-5" data-parallax="scroll" data-image-src="/images/Parallax-Purple.jpg">
			<div class="row justify-content-center">
				<div class="col">
					<div class="text-light">
						<center>
							<span class="font-weight-bold" style="font-size:2rem">Visit our Web AR Experience!</span>
						</center>
					</div>
				</div>
			</div>
			<div class="row justify-content-center pt-5">
				<div class="col">
					<center>
							<button type="button" class="btn-black p-4 px-5" data-toggle="modal" data-target="#armodalService">
								Initiate
							</button>
					</center>
				</div>
			</div>
		</div>
			
		<!-- AR Modal -->
		<div class="modal fade" id="armodalService" tabindex="-1" role="dialog" aria-labelledby="arModalServiceLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="arModalServiceLabel">AR Coming Soon...</h5>
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
			
		<cms:embed 'service-content.php' />
			
		
			
					
		<div class="container-fluid text-center" style="background-color: #111;">
			<p class="pt-5 display-5 font-weight-bold text-white">Some of our AR Work</p>
			<div class="row" style="padding-bottom: 15rem; margin-bottom: -10rem;">
				<cms:pages masterpage='portfolio.php' folder='ar' limit='3'>
					<cms:show_repeatable 'portfolio_images' limit='1'>
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-0 portfolio">
							<a href="<cms:show k_page_link />">
								<img class="w-100" src="<cms:show portfolio_image />" alt="<cms:show k_page_title />" />
								<div class="portfolio-overlay">
									<div class="portfolio-text"><cms:show k_page_title /></div>
								</div>
							</a>
						</div>
					</cms:show_repeatable>
				</cms:pages>
			</div>	
		</div>

		
			<cms:embed 'footer.php' />
		</div>	
	</body>
</html>
<?php COUCH::invoke(); ?>

<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Portfolio' clonable='1' order='600'>
	
	<cms:editable
			  name='content'
			  label='Content'
			  desc='Enter description of portfolio item here'
			  type='richtext' />
	<cms:editable
			  name='related_links'
			  label='Related Links'
			  desc='Enter relavent links here'
			  type='richtext' />
	<cms:editable
			  name='video_check'
			  label='Video Checker'
			  desc='Check this box if you are adding videos to post'
			  opt_values='Yes, I am using videos'
			  type='checkbox' />
	
	<cms:repeatable name='portfolio_images' label='Portfolio Images' >
		<cms:editable type='image' name='portfolio_image' label='Portfolio Image' show_preview='1' />
		<cms:editable name='portfolio_image_name' label='Portfolio Image Name' type='text' />
	</cms:repeatable>
	
	<cms:repeatable name='portfolio_videos' label='Portfolio Videos' >
		<cms:editable type='text' name='portfolio_video' label='Portfolio Video' />
		<cms:editable name='portfolio_video_name' label='Portfolio Video Name' type='text' />
	</cms:repeatable>
	
	<cms:folder name='vr' title='Virtual Reality' weight='-100' />
	<cms:folder name='ar' title='Augmented Reality' weight='-10' />
	<cms:folder name='360' title='360 Video Production' weight='0' />
	
</cms:template>
	
<cms:if k_is_page >
<cms:embed 'head.php' />

	<body>
		<div class="overflow-fix">
		<cms:embed 'header.php' />
		
			
		<cms:show_repeatable 'portfolio_images' limit='1'>
			<div class="container-fluid parallax-window-2 m-auto pt-5" data-parallax="scroll" data-image-src="<cms:show portfolio_image />">
		</cms:show_repeatable>
			<div class="row justify-content-center">
				<div class="col">
					<p class="display-1 font-weight-bold text-white shadowed2 text-center align-middle" style="padding-top:30vh;"><cms:show k_page_title /></p>
				</div>
			</div>
		</div>
			
		<div class="container p-5">	
			<div class="row">
				<span class="display-6 m-auto w-100 p-2">IMAGES</span>
					<cms:show_repeatable 'portfolio_images' >	
						<div class="col-sm-12 col-md-6 col-lg-4 p-0">
							<a href="<cms:show portfolio_image />" data-fancybox="gallery">
								<img class="w-100" src="<cms:show portfolio_image />" alt="<cms:show portfolio_image_name />" />
							</a>
						</div>
					</cms:show_repeatable>
			</div>	
		</div>
			
		<cms:if video_check>
			<div style="display:none;"><cms:show video_check /></div>
			<div class="container pb-5">
				<div class="row">
					<span class="display-6 m-auto w-100 p-2">VIDEOS</span>
					<cms:show_repeatable 'portfolio_videos' >
						<div class="col-sm-6 embed-responsive embed-responsive-16by9 px-2 my-2">
							<iframe class="embed-responsive-item" src="<cms:show portfolio_video />" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
						</div>
					</cms:show_repeatable>
				</div>
			</div>
		</cms:if>
			
		<div class="container">			
			<div class="row pb-5">
				<cms:if related_links>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 text-align-justify">
						<cms:show content />				
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 text-align-justify">	
						<span class="display-6">RELATED LINKS:</span>
						<cms:show related_links />
					</div>
				<cms:else />
					<div class="col-12 text-align-justify">
						<cms:show content />				
					</div>
				</cms:if>
			</div>
		</div>
			
			
		<cms:embed 'footer.php' />
		</div>	
	</body>
</html>
<cms:else />
	<cms:embed 'portfolio-list.php' />
</cms:if>
<?php COUCH::invoke(); ?>
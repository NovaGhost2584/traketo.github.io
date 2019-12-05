<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='About Page' order='30'>
	<cms:editable name='title' label='Title (Max Length - 600 Characters)' type='text' maxlength='60'/>
	<cms:editable name='desc' label='Meta Description (Max Length - 150 Characters)' type='text' maxlength='150' />
	<cms:editable name='image' label='Meta Image' type='image' show_preview='1' width='1200' height='630' />
</cms:template>
	<cms:embed 'head.php' />

	<body>
		<div class="overflow-fix">
	<cms:embed 'header.php' />
		
		<div class="container-fluid parallax-window-2 m-auto pt-5" data-parallax="scroll" data-image-src="/images/Parallax-About.jpg">
			<div class="row justify-content-center">
				<div class="col">
					<p class="display-1 font-weight-bold text-white shadowed2 text-center align-middle" style="padding-top:30vh;">About</p>
				</div>
			</div>
		</div>
			
			
		<!-- team members -->
		<div class="container m-auto text-center pt-5">
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
			
			
		<div class="container m-auto pt-5">
			<hr>
			<p class="pt-5 display-5 font-weight-bold text-center"><cms:show title /></p>
			<div class="row">
				<div class="col">
					<img class="w-100" src="<cms:editable name='main_about_image' label='Body Image' type='image' show_preview='1' />" alt="<cms:editable label='Body Image Alt Text' name='main_image_alt' type='text'></cms:editable>" />				
				</div>
			</div>
			<div class="row pt-5">
				<div class="col text-align-justify">
					<span><cms:editable name='about_text_1' label='Main Text' type='text'></cms:editable></span>				
				</div>
			</div>
			<div class="row pt-5">
				<div class="col-sm-6 embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="<cms:editable name='about_video_1' label='Video 1 Embed Link' type='text'></cms:editable>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
				</div>
				<div class="col-sm-6 text-align-justify pt-5">
					<p><cms:editable name='about_video_text_1' label='Video 1 Text' type='text'></cms:editable></p>
				</div>
			</div>
		</div>
			
		<div class="container m-auto pt-5 pb-5">
			<div class="row pt-5">
				<div class="col-sm-6 text-align-justify pt-5 swapitem">
					<p><cms:editable name='about_video_text_2' label='Video 2 Text' type='text'></cms:editable></p>
				</div>
				<div class="col-sm-6 embed-responsive embed-responsive-16by9 swapitem">
					<iframe class="embed-responsive-item" src="<cms:editable name='about_video_2' label='Video 2 Embed Link' type='text'></cms:editable>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
				</div>
			</div>
		</div>
			
			
			<cms:embed 'footer.php' />
		</div>	
	</body>
</html>
<?php COUCH::invoke(); ?>

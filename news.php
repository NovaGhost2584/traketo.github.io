<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Blog' clonable='1' order='700'>
	<cms:editable name='blog_image' type='image' show_preview='1' label='Blog Image' />
	<cms:editable name='blog_content' type='richtext' label='Content' />
	<cms:editable name='blog_tagline' type='text' label='Tag Line' />
	
	<cms:folder name='vr' title='VR' />
	<cms:folder name='ar' title='AR' /> 
	<cms:folder name='mixed' title='Mixed Reality' />
	<cms:folder name='projects' title='Projects' />
	<cms:folder name='media' title='Media' />
	<cms:folder name='company' title='Company' />
	<cms:folder name='misc' title='Misc' />
</cms:template>

<cms:if k_is_page >
	<cms:embed 'head.php' />

	<body>
		<div class="overflow-fix">
			<cms:embed 'header.php' />
		
		<div class="container-fluid parallax-window-3 m-auto pt-5" data-parallax="scroll" data-image-src="/images/Parallax-News.jpg">
			<div class="row justify-content-center">
				<div class="col">
					<p class="display-1 font-weight-bold text-white shadowed2 text-center align-middle" style="padding-top:15vh;">News</p>
				</div>
			</div>
		</div>
		<div class="container p-5">
			<div class="row">
			
		<cms:if k_page_foldertitle>
			<cms:set my_category=k_page_foldertitle />
		<cms:else />
			<cms:set my_category='Uncategorized' />
		</cms:if>	
				<div class="col-lg-9 col-md-9 col-sm-12">
					<p class="display-5 font-weight-bold"><a href="<cms:show k_page_link />" style="color:#212529 !important"><cms:show k_page_title /></a></p>
					<span class="p-3"><cms:date k_page_date format='F j, Y'/></span><span>&#9679</span><span class="p-3 font-italic"><cms:show my_category /></span>
					<hr>
					<img class="w-100 pt-3" src="<cms:show blog_image />" alt="image" />
					<p class="display-6 py-5"><cms:show blog_tagline /></p>
					<cms:do_shortcodes><cms:show blog_content /></cms:do_shortcodes>
				</div>
				
				<cms:embed 'news-sidebar.php' />
			</div>
		</div>
			
			
			<cms:embed 'footer.php' />
		</div>	
	</body>
</html>
<cms:else />
	<cms:embed 'news-list.php' />
</cms:if>
<?php COUCH::invoke(); ?>

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

			<div class="container p-5 clearfix">
				
					<cms:embed 'news-sidebar.php' />
	
					<cms:pages masterpage='news.php'
							   folder=k_folder_name
							   start_on=k_archive_date
							   stop_before=k_next_archive_date
							   paginate='1'
							   limit='4'>
						
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 blog-layout">
						<div class="card text-white bg-dark2 mt-3"  data-aos="fade-right">
							<img class="card-img-top blog-card-img" src="<cms:show blog_image />" alt="<cms:show k_page_title />" />
							<div class="card-body">
								<p class="card-title display-6"><cms:show k_page_title /></p>
			
								<cms:if k_page_foldertitle>
									<cms:set my_category=k_page_foldertitle />
								<cms:else />
									<cms:set my_category='Uncategorized' />
								</cms:if>
								
								<span class="pr-3">
									<cms:date k_page_date format='F j, Y'/>
								</span>
								<span>&#9679</span>
								
								<span class="p-3 font-italic">
									<cms:show my_category />
								</span>
								
								<hr style="border-top: 1px solid #fff;">
								<p class="card-text"><cms:excerptHTML count='25' ignore='img'><cms:show blog_content /></cms:excerptHTML></p>
								<a href="<cms:show k_page_link />" class="btn btn-primary">Continue Reading...</a>
							</div>
						</div>
					</div>
				<div class="clearfix p-3"></div>
						
			<cms:if k_paginated_bottom >
				<div class="btn">
					<cms:paginator adjacents='1'>
						<cms:if k_crumb_type='prev' >
							<a class="btn btn-pg pg-next tt<cms:if k_crumb_disabled> disabled</cms:if>" <cms:if k_crumb_disabled>href="#" onClick="return false"<cms:else />href="<cms:show k_crumb_link />"</cms:if> title="Previous">Previous</a>
						</cms:if>

						<cms:if k_crumb_type='ellipsis' >
							<a class="btn btn-pg disabled" href="#" onClick="return false">&hellip;</a>
						</cms:if>

						<cms:if k_crumb_type='page' >
							<cms:if k_crumb_current>
								<a class="btn btn-pg btn-primary tt" href="#" onClick="return false" title="<cms:show k_crumb_text />"><cms:show k_crumb_text /></a>
							<cms:else />
								<a class="btn btn-pg tt" href="<cms:show k_crumb_link />" title="<cms:show k_crumb_text />"><cms:show k_crumb_text /></a>
							</cms:if>
						</cms:if>

						<cms:if k_crumb_type='next' >
							<a class="btn btn-pg pg-next tt<cms:if k_crumb_disabled> disabled</cms:if>" <cms:if k_crumb_disabled>href="#" onClick="return false"<cms:else />href="<cms:show k_crumb_link />"</cms:if> title="Next">Next</a>
						</cms:if>
					</cms:paginator>
				</div>
				
			</cms:if>
			
			</cms:pages>

			</div>
			
			
			
			
		</div>			
			
		<cms:embed 'footer.php' />
		
		</div>	
	</body>
</html>
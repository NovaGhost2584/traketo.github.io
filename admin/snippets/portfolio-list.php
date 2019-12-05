<cms:embed 'head.php' />

	<body>
		<div class="overflow-fix">
			<cms:embed 'header.php' />
		
		<div class="container-fluid parallax-window-3 m-auto pt-5" data-parallax="scroll" data-image-src="/images/Parallax-Portfolio.jpg">
			<div class="row justify-content-center">
				<div class="col">
					<p class="display-1 font-weight-bold text-white shadowed2 text-center align-middle" style="padding-top:15vh;">Portfolio</p>
				</div>
			</div>
		</div>
			
		<cms:folders masterpage='portfolio.php' orderby='weight'>
			<div class="container p-5">
				<div class="row">
					<cms:if k_folder_pagecount!='0'>
					<span class="display-6 m-auto w-100 p-2"><a href="<cms:show k_folder_link />" class="text-black"><cms:show k_folder_title /></a></span>
						<cms:pages masterpage='portfolio.php' folder=k_folder_name>
							<cms:show_repeatable 'portfolio_images' limit='1'>
								<div class="col-sm-12 col-md-6 col-lg-4 px-0 my-3 portfolio">
									<a href="<cms:show k_page_link />">
										<img class="w-100" src="<cms:show portfolio_image />" alt="<cms:show k_page_title />" />
										<div class="portfolio-overlay">
											<div class="portfolio-text"><cms:show k_page_title /></div>
										</div>
									</a>
								</div>
							</cms:show_repeatable>
						</cms:pages>
					</cms:if>
				</div>	
			</div>
		</cms:folders>
			
			
		<cms:embed 'footer.php' />
		</div>	
	</body>
</html>

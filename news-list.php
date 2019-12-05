<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Blog List' />
	<cms:embed 'head.php' />

	<body>
		<div class="overflow-fix">
			<cms:embed 'header.php' />
		
		<div class="container-fluid parallax-window-3 m-auto pt-5" data-parallax="scroll" data-image-src="images/Parallax-News.jpg">
			<div class="row justify-content-center">
				<div class="col">
					<p class="display-1 font-weight-bold text-white shadowed2 text-center align-middle" style="padding-top:15vh;">News</p>
				</div>
			</div>
		</div>
			
		<div class="container p-5">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-12">
					<div class="card text-white bg-dark2 mt-3"  data-aos="fade-right">
						<img class="card-img-top blog-card-img" src="images/portfolio/BCBS_3.jpg" alt="card1" />
						<div class="card-body">
							<p class="text-align-left">Author Name</p>
							<p class="card-title display-6">Card Title</p>
							<p class="text-align-left">Article Date</p>
							<hr style="border-top: 1px solid #fff;">
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="/news-item.php" class="btn btn-primary">Continue Reading...</a>
						</div>
					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-lg-3 col-md-3 col-sm-12 pt-3">
					<span class="display-6">Categories</span>
					<hr>
					<a href="#"><p class="m-0 text-black">VR</p></a>
					<a href="#"><p class="m-0 text-black">AR</p></a>
					<a href="#"><p class="m-0 text-black">Mixed Reality</p></a>
					<a href="#"><p class="m-0 text-black">Projects</p></a>
					<a href="#"><p class="m-0 text-black">Media</p></a>
					<br>
					<span class="display-6">Archive</span>
					<hr>
					<a href="#"><p class="m-0 text-black">August 2019</p></a>
					<a href="#"><p class="m-0 text-black">July 2019</p></a>
					<a href="#"><p class="m-0 text-black">June 2019</p></a>
					<a href="#"><p class="m-0 text-black">May 2019</p></a>
				</div>
			</div>
		</div>
			
			
		<?php include("footer.php"); ?>
		</div>	
	</body>
</html>
<?php COUCH::invoke(); ?>
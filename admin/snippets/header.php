	<!-- Fixed Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark border-bottom shadowed2 fixed-top navscroll">
			<a class="navbar-brand" href="/"><img class="navscroll" src="
				<cms:pages masterpage='global.php' >
					<cms:show logo />
				</cms:pages>" alt="Pulse Labs Logo" /></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link navscroll" href="<cms:link masterpage='about.php' />">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link navscroll" href="<cms:link masterpage='portfolio.php' />">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link navscroll" href="<cms:link masterpage='services.php' />">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link navscroll" href="<cms:link masterpage='news.php' />">News</a>
					</li>
					<li class="nav-item">
						<a class="nav-link navscroll" href="<cms:link masterpage='contact.php' />">Contact</a>
					</li>
					<li class="nav-item min-vw-20">
						<a class="nav-link navscroll" href="tel:9134389095"><i class="material-icons mr-3">perm_phone_msg</i>913-438-9095</a>
					</li>
				</ul>
			</div>		
		</nav>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="Q27XBZTVWfN9coS5owYQ7LwPC6wIFYQunKwFd732v2g" />
	  
	<!-- Static Page Meta -->  
  	<cms:if k_template_name != 'news.php' && k_template_name != 'portfolio.php'>
		<title>Pulse Immersive News | <cms:show title /></title>
		
		<!-- Primary Meta Tags -->
		<meta name="title" content="Pulse Immersive News | <cms:show title />">
		<meta name="description" content="<cms:show desc />">
		
		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="<cms:show k_page_link />">
		<meta property="og:title" content="Pulse Immersive News | <cms:show title />">
		<meta property="og:description" content="<cms:show desc />">
		<meta property="og:image" content="<cms:show image />">

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="<cms:show k_page_link />">
		<meta property="twitter:title" content="Pulse Immersive News | <cms:show title />">
		<meta property="twitter:description" content="<cms:show desc />">
		<meta property="twitter:image" content="<cms:show image />">
	</cms:if>
	  
    <!-- News Meta --> 
	<cms:if k_is_page>
		<cms:if k_template_name = 'news.php'>
			<title>Pulse Immersive News | <cms:show k_page_title /></title>

			<!-- Primary Meta Tags -->
			<meta name="title" content="Pulse Immersive News | <cms:show k_page_title />">
			<meta name="description" content="<cms:excerpt count='150'><cms:show blog_content /></cms:excerpt>">

			<!-- Open Graph / Facebook -->
			<meta property="og:type" content="website">
			<meta property="og:url" content="<cms:show k_page_link />">
			<meta property="og:title" content="Pulse Immersive News | <cms:show k_page_title />">
			<meta property="og:description" content="<cms:excerpt count='150'><cms:show blog_content /></cms:excerpt>">
			<meta property="og:image" content="<cms:show blog_image />">

			<!-- Twitter -->
			<meta property="twitter:card" content="summary_large_image">
			<meta property="twitter:url" content="<cms:show k_page_link />">
			<meta property="twitter:title" content="Pulse Immersive News | <cms:show k_page_title />">
			<meta property="twitter:description" content="<cms:excerpt count='150'><cms:show blog_content /></cms:excerpt>">
			<meta property="twitter:image" content="<cms:show blog_image />">
		</cms:if>
	<cms:else />
		<cms:if k_template_name = 'news.php'>
			<title>Pulse Immersive News <cms:if k_folder_name>| <cms:show k_folder_title /></cms:if></title>

			<!-- Primary Meta Tags -->
			<meta name="title" content="Pulse Immersive News <cms:if k_folder_name>| <cms:show k_folder_title /></cms:if>">
			<meta name="description" content="View all the latest <cms:if k_folder_name><cms:show k_folder_title /></cms:if> news at Pulse Immersive, including industry and technology news.">

			<!-- Open Graph / Facebook -->
			<meta property="og:type" content="website">
			<meta property="og:url" content="<cms:show k_page_link />">
			<meta property="og:title" content="Pulse Immersive News <cms:if k_folder_name>| <cms:show k_folder_title /></cms:if>">
			<meta property="og:description" content="View all the latest <cms:if k_folder_name><cms:show k_folder_title /></cms:if> news at Pulse Immersive, including industry and technology news.">
			<meta property="og:image" content="<cms:pages masterpage='global.php'><cms:show meta_news /></cms:pages>">

			<!-- Twitter -->
			<meta property="twitter:card" content="summary_large_image">
			<meta property="twitter:url" content="<cms:show k_page_link />">
			<meta property="twitter:title" content="Pulse Immersive News <cms:if k_folder_name>| <cms:show k_folder_title /></cms:if>">
			<meta property="twitter:description" content="View all the latest <cms:if k_folder_name><cms:show k_folder_title /></cms:if> news at Pulse Immersive, including industry and technology news.">
			<meta property="twitter:image" content="<cms:pages masterpage='global.php'><cms:show meta_news /></cms:pages>">
		</cms:if>
	</cms:if>
	  
	<!-- Portfolio Meta -->   
  	<cms:if k_is_page>
		<cms:if k_template_name = 'portfolio.php'>
			<title>Pulse Immersive Portfolio | <cms:show k_page_title /></title>

			<!-- Primary Meta Tags -->
			<meta name="title" content="Pulse Immersive Portfolio | <cms:show k_page_title />">
			<meta name="description" content="<cms:excerpt count='150'><cms:show content /></cms:excerpt>">

			<!-- Open Graph / Facebook -->
			<meta property="og:type" content="website">
			<meta property="og:url" content="<cms:show k_page_link />">
			<meta property="og:title" content="Pulse Immersive Portfolio | <cms:show k_page_title />">
			<meta property="og:description" content="<cms:excerpt count='150'><cms:show content /></cms:excerpt>">
			<meta property="og:image" content="<cms:show_repeatable 'portfolio_images' limit='1'><cms:show portfolio_image /></cms:show_repeatable>">

			<!-- Twitter -->
			<meta property="twitter:card" content="summary_large_image">
			<meta property="twitter:url" content="<cms:show k_page_link />">
			<meta property="twitter:title" content="Pulse Immersive Portfolio | <cms:show k_page_title />">
			<meta property="twitter:description" content="<cms:excerpt count='150'><cms:show content /></cms:excerpt>">
			<meta property="twitter:image" content="<cms:show_repeatable 'portfolio_images' limit='1'><cms:show portfolio_image /></cms:show_repeatable>">
		</cms:if>
	<cms:else />
		<cms:if k_template_name = 'portfolio.php'>
			<title>Pulse Immersive Portfolio <cms:if k_folder_name>| <cms:show k_folder_title /></cms:if></title>

			<!-- Primary Meta Tags -->
			<meta name="title" content="Pulse Immersive Portfolio <cms:if k_folder_name>| <cms:show k_folder_title /></cms:if>">
			<meta name="description" content="Check out our various <cms:if k_folder_name><cms:show k_folder_title /></cms:if> portfolio images and videos at Pulse Immersive, including some case studies and descriptions of each.">

			<!-- Open Graph / Facebook -->
			<meta property="og:type" content="website">
			<meta property="og:url" content="<cms:show k_page_link />">
			<meta property="og:title" content="Pulse Immersive Portfolio <cms:if k_folder_name>| <cms:show k_folder_title /></cms:if>">
			<meta property="og:description" content="Check out our various <cms:if k_folder_name><cms:show k_folder_title /></cms:if> portfolio images and videos at Pulse Immersive, including some case studies and descriptions of each.">
			<meta property="og:image" content="<cms:pages masterpage='global.php'><cms:show meta_portfolio /></cms:pages>">

			<!-- Twitter -->
			<meta property="twitter:card" content="summary_large_image">
			<meta property="twitter:url" content="<cms:show k_page_link />">
			<meta property="twitter:title" content="Pulse Immersive Portfolio <cms:if k_folder_name>| <cms:show k_folder_title /></cms:if>">
			<meta property="twitter:description" content="Check out our various <cms:if k_folder_name><cms:show k_folder_title /></cms:if> portfolio images and videos at Pulse Immersive, including some case studies and descriptions of each.">
			<meta property="twitter:image" content="<cms:pages masterpage='global.php'><cms:show meta_portfolio /></cms:pages>">
		</cms:if>
	</cms:if>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="57x57" href="<cms:show k_site_link />images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<cms:show k_site_link />images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<cms:show k_site_link />images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<cms:show k_site_link />images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<cms:show k_site_link />images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<cms:show k_site_link />images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<cms:show k_site_link />images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<cms:show k_site_link />images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<cms:show k_site_link />images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<cms:show k_site_link />android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<cms:show k_site_link />images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<cms:show k_site_link />images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<cms:show k_site_link />images/favicon/favicon-16x16.png">
	<link rel="manifest" href="<cms:show k_site_link />images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#0d0d0d">
	<meta name="msapplication-TileImage" content="<cms:show k_site_link />images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#0d0d0d">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="<cms:show k_site_link />css/styles.css" rel="stylesheet">
	<link href="<cms:show k_site_link />css/bootstrap.css" rel="stylesheet">
	<link href="<cms:show k_site_link />css/bootstrap-grid.css" rel="stylesheet">
	<link href="<cms:show k_site_link />css/aos.css" rel="stylesheet">
	<link href="<cms:show k_site_link />css/carousel.css" rel="stylesheet">
	<link href="<cms:show k_site_link />css/jquery.fancybox.min.css" rel="stylesheet">
	<script src="<cms:show k_site_link />js/aos.js"></script>
	<script type="text/javascript">
			var images = new Array()
			function preload() {
				for (i = 0; i < preload.arguments.length; i++) {
					images[i] = new Image()
					images[i].src = preload.arguments[i]
				}
			}
			preload(
				"/images/facebook-blk.png",
				"/images/facebook-prpl.png",
				"/images/mail-blk.png",
				"/images/mail-prpl.png",
				"/images/twitter-blk.png",
				"/images/twitter-prpl.png",
				"/images/linkedin-blk.png",
				"/images/linkedin-prpl.png",
				"/images/vimeo-blk.png",
				"/images/vimeo-prpl.png"
			)
	  </script>
	  
	  <!-- Global site tag (gtag.js) - Google Analytics -->
	  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140418387-1"></script>
	  <script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-140418387-1');
	  </script>

	</head>
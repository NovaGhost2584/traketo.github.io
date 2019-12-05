<?php require_once( 'admin/cms.php' ); ?>
<cms:template title="Contact Page" order='40'>
	<cms:editable name='title' label='Meta Title (Max Length - 600 Characters)' type='text' maxlength='60' />
	<cms:editable name='desc' label='Meta Description (Max Length - 150 Characters)' type='text' maxlength='150' />
	<cms:editable name='image' label='Meta Image' type='image' show_preview='1' width='1200' height='630' />
</cms:template>
	<cms:embed 'head.php' />

	<body style="background-color: #262626;">
		<div class="overflow-fix">
			<cms:embed 'header.php' />
		
		<div class="container-fluid parallax-window-3 m-auto pt-5" data-parallax="scroll" data-image-src="/images/Parallax-About.jpg">
			<div class="row justify-content-center">
				<div class="col">
					<p class="display-1 font-weight-bold text-white shadowed2 text-center align-middle" style="padding-top:15vh;">Contact</p>
				</div>
			</div>
		</div>
			
		<div class="container">
			<div class="row">
				<p class="display-6 p-4 text-white ">Please feel free to contact us if you would like to reach out for any answers to questions you might have, to schedule a meeting, or to get a project quote.</p>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<ul class="text-white py-5">
						<span class="display-6 font-weight-bold">Office Hours</span><p class="font-weight-bold">(US Central Time)</p>
						<li class="py-2">Sunday: Closed</li>
						<li class="py-2">Monday: 8:00AM - 5:00PM</li>
						<li class="py-2">Tuesday: 8:00AM - 5:00PM</li>
						<li class="py-2">Wednesday: 8:00AM - 5:00PM</li>
						<li class="py-2">Thursday: 8:00AM - 5:00PM</li>
						<li class="py-2">Friday: 8:00AM - 5:00PM</li>
						<li class="py-2">Saturday: Closed</li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<p class="text-white py-5">Contact us through our live chat by clicking or tapping on the purple "Plus" icon in the bottom left corner of the page.  If we are not avaiable for chat, please send us an email.</p>
				</div>
			</div>	
		</div>	
			
		<div class="container p-5">
			<div class="row justify-content-center mb-4">
				<div class="col-sm-12 col-md-6 col-lg-4 ">
					<div class="gmap_canvas">
						<iframe width="256" height="256" id="gmap_canvas" src="https://maps.google.com/maps?q=Pulse%20Design%20Group%2C%20Lenexa%2C%20KS&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 ">
					<img class="w-75"src="
					<cms:pages masterpage='global.php' >
						<cms:show logo />
					</cms:pages>" alt="logo" alt="logo" />
					<p class="text-white mb-0">8207 Melrose Drive</p>
					<p class="text-white mb-0">Suite 145</p>
					<p class="text-white mb-0">Lenexa, Kansas 66214</p>
					<br>
					<p class="text-white mb-0">Office 913.438.9095</p>
					<p class="text-white mb-0">Fax 913.438.2660</p>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4  pt-5">
					<button type="button" class="purechat-button-expand btn-purple py-4" style="font-size: 1.5rem">Contact Us Now!</button>
				</div>
			</div>
		</div>
			
			
			<cms:embed 'footer2.php' />
		</div>	
	</body>
</html>
<?php COUCH::invoke(); ?>
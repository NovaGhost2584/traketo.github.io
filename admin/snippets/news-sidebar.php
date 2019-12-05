<!-- Sidebar -->
<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pt-3 sidebar-layout">
	
	<a class="sidebar-toggler-icon" data-toggle="collapse" href="#collapseCategory" role="button" aria-expanded="true" aria-controls="collapseCategory"></a>
	<span class="display-6">Categories</span>	
	<hr>
	<div class="collapse sidebar" id="collapseCategory">
		<cms:folders masterpage='news.php'>
			<cms:if k_folder_pagecount!='0'>
				<a href="<cms:show k_folder_link />"><p class="m-0 text-black"><cms:show k_folder_title /></p></a>
			</cms:if>
		</cms:folders>
	</div>
	
	<br>
	
	<a class="sidebar-toggler-icon" data-toggle="collapse" href="#collapseArchive" role="button" aria-expanded="true" aria-controls="collapseArchive"></a>	
	<span class="display-6">Archive</span>	
	<hr>
	<div class="collapse sidebar" id="collapseArchive">
		<cms:archives masterpage='news.php' limit='5'>
			<a href="<cms:show k_archive_link />"><p class="m-0 text-black"><cms:date k_archive_date format='F Y' /></p></a>
		</cms:archives>
	</div>
	
</div>
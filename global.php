<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Global Settings' order='500' />

	<cms:editable name='logo' label='Logo' type='image' show_preview='1' />

	<cms:editable name='meta_news' label='Meta News Image' type='image' show_preview='1' />

	<cms:editable name='meta_portfolio' label='Meta Portfolio Image' type='image' show_preview='1' />

<?php COUCH::invoke(); ?>
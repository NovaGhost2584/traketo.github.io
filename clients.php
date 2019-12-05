<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Client List' order='400' />
	<cms:repeatable name='clients' label='Clients' >
		<cms:editable name='client_logo' label='Client Logo' type='image' show_preview='1' />
		<cms:editable name='client_name' label='Client Name' type='text'></cms:editable>
	</cms:repeatable>
<?php COUCH::invoke(); ?>
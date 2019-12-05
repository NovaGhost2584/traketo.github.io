<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Team Members' order='300' />
	<cms:repeatable name='team_members' label='Team Members' >
		<cms:editable name='team_member_image' label='Team Member Image' type='image' show_preview='1' />
		<cms:editable name='team_member_name' label='Team Member Name' type='text'></cms:editable>
		<cms:editable name='team_member_title' label='Team Member Title' type='text'></cms:editable>
	</cms:repeatable>
<?php COUCH::invoke(); ?>
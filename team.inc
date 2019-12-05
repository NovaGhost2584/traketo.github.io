<?php require_once( 'admin/cms.php' ); ?>				
	<cms:repeatable name='team_members' label='Team Members' >
		<cms:editable name='team_member_image' label='Team Member Image' type='image' show_preview='1' />
		<cms:editable name='team_alt_text' label='Team Member Alt Text' type='text'></cms:editable>
		<cms:editable name='team_member_name' label='Team Member Name' type='text'></cms:editable>
		<cms:editable name='team_member_title' label='Team Member Title' type='text'></cms:editable>
	</cms:repeatable>

	<cms:show_repeatable 'team_members' >					
		<div class="col" data-aos="flip-right">
			<div class="team-circle shadowed2"><img src="<cms:show team_member_image />" alt="<cms:show team_alt_text />" /></div>
			<p class="display-6 font-weight-bold pt-4"><cms:show team_member_name /></p>
			<p><cms:show team_member_title /></p>
		</div>					
	</cms:show_repeatable>
<?php COUCH::invoke(); ?>
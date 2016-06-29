<?php date_default_timezone_set("America/New_York"); ?>
        <!-- Page Content -->
        <div class="container-fluid" id="page-wrapper">
            <div class="row" >
                 <div class="col-lg-12 page-header text-center">
                    <h1 style="font-family:avenir; font-size:50px">ADMIN PANNEL</h1>
                </div>
            </div>
            
           <div class="row">
                <h5>list of users</h5>
                <hr/>
               

               <table class="table">
  <thead>
    <tr>
		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
        <th><?php echo 'created on';?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('index_groups_th');?></th>
		<th><?php echo lang('index_status_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
	</tr>
  </thead>
  <tbody>
      <?php foreach ($users as $user): ?>
    <tr>
            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo date('m/d/Y',htmlspecialchars($user->created_on,ENT_QUOTES,'UTF-8'));?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
		</tr>
               
   <?php endforeach;?>
                   </tbody></table>
               
            </div>
            <?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?>
            <hr/>
           <br/>
            
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../css/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../css/dist/js/sb-admin-2.js"></script>

</body>

</html>

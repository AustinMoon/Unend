

      
       <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a ><i class=""></i> <h4>Services</h4></a>
                        </li>
                                
                                <li>
                                    <a href="<?= base_url('/user/sen_correct_student') ?>"><h5>&nbsp;>&nbsp;&nbsp;&nbsp;Sentence Correction</h5></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/english_question') ?>"><h5>&nbsp;>&nbsp;&nbsp;&nbsp;Question about English</h5></a>
                                </li>
                                <li>
                                    <a href="http://quickcorrections.com/qc/login3/auth/pronunciation"><h5 >&nbsp;>&nbsp;&nbsp;&nbsp;Pronunciation</h5></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/proofread') ?>"> <h5>&nbsp;>&nbsp;&nbsp;&nbsp;Proofreading</h5></a>
                                </li>
                               
                            <!-- /.nav-second-level -->
                        
                       
                        <li>
                            <a href="#"><i class=""></i> <h4>Information</h4></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/userpage"><i class=""></i> <h4>Your Answer</h4></a>
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/payment"><i class=""></i><h4> Buy Point</h4></a>
                        </li>
                    
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Page Content -->
        <div class="container-fluid" id="page-wrapper">
             <div class="row" >
                 <div class="col-lg-12 page-header text-center">
                    <h1 style="font-size:50px">ACCOUNT SETTING</h1>
                </div>
            </div>
            <div class="row" >
             <form class="form-horizontal" role="form" method="post">


                  <div id="infoMessage"><?php echo $message;?></div>

                  <?php echo form_open("auth/change_password");?>


                  <div class="form-group">
                        <label for="name" class="col-sm-3 control-label"><?php echo lang('change_password_old_password_label', 'old_password');?></label>
                        <div class="col-sm-6">
                             
                             <?php echo form_input($old_password);?></div>
                    </div>

                  <div class="form-group">
                        <label for="new_password" class="col-sm-3 control-label"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>                         
                        <div class="col-sm-6">
                            
                              <?php echo form_input($new_password);?></div>
                    </div>
                   
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label"><?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> </label>
                        <div class="col-sm-6">
                              <?php echo form_input($new_password_confirm);?>
                        </div>
                    </div>
                   <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Points</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control" id="email" name="email" value="<?php echo @$points;?>">
                       <h1></h1>
                              
                            


                        <?php echo form_input($user_id);?>
                        <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>

                  <?php echo form_close();?>
                   </div>
                    </div>
                  </form>
            </div>
      </div>
  <script src="../css/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/bower_components/metisMenu/dist/metisMenu.min.js"></script>
  

    <!-- Custom Theme JavaScript -->
    <script src="../css/dist/js/sb-admin-2.js"></script>

</body>

</html>



      
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
            
           <div class="row">
                               
                <form class="form-horizontal" role="form" method="post" action="index.php">
                 <!--<h5>Profile</h5>
                    <hr/>
                    <div class="form-group">
                        <div class="col-sm-8 col-md-offset-1">
                            <div class="circle" style=" margin-top: 10px; background-image: url('../img/dfimage.png');  width:150px; height:149px">
                           <input type="file">

                            </div> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Email(User Name)</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Email" value=""></div>
                    </div>
                   
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Name" value="">
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-offset-1" >

                    <button type="button" class="btn btn-danger">SAVE</button> 
                
                    </div>
                </br>
                </br>-->
               
               
                
                
                <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Old Passwords</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="********" value=""></div>
                    </div>

                  <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">New Passwords</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Passwords" value=""></div>
                    </div>
                   
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Confirm</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Confirm" value="">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Points</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control" id="email" name="email" value="<?php echo @$points;?>">
                        </div>
                    </div>
					
                    <div class="col-lg-10 col-sm-offset-1" >

                    <button type="button" class="btn btn-danger">SAVE</button> 
                </form> 
                </div>
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

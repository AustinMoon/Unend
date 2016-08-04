<nav>
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class=""></i> <b>Tutor Page</b></a>
                        </li>
                        
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/tutor/tutor_history"><i class=""></i> <b>Tutor History</b></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/auth/change_password"><i class=""></i> <b>Password</b></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                    
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Page Content -->
       <div id= "page-wrapper"class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">Proofread</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
           
                    
           <?php //echo $error;?> 
      <?php echo form_open_multipart('upload/do_proofread_answer/'.$req_id);?> 
		
      
                <div class= "row">
                   
                    <div class="form-group col-md-8">
                        

                       <!-- <h4 ><i> <?php echo $error;?> </i></h4>-->
                      
                       <h4> Upload fixed file </h4>

                        <h4>Student comments: <i><?= $req_id; ?></i></h4>
                        
                         <textarea class="form-control"  id="text" rows="5" placeholder="Leave comments for student here..." name="tutor_comments" maxlength="750" autofocus></textarea>

                        <div class="panel panel-red">

                        <input style="display:inline" type = "file" name = "userfile" size = "20" /> 
                        
                        </div>
                        
                        <h4><hr/>Click Upload button</h4>
                        <input class="btn btn-danger " type = "submit" value = "Upload"  /> 
                    </div>
           </div>
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

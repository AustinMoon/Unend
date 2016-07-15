<<<<<<< HEAD


      
       <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class=""></i> <b>Services</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                
                                <li>
                                    <a href="<?= base_url('/user/sen_correct_student') ?>"><b>Sentence Correction</b></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/english_question') ?>"><b>Question about English</b></a>
                                </li>
                                
                                <li>
                                    <a href="<?= base_url('auth/proofread') ?>"> <b>Proofreading</b></a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/setting"><i class=""></i> <b>Password</b></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/userpage"><i class=""></i> <b>Your Answer</b></a>
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/payment"><i class=""></i><b> Buy Point</b></a>
                        </li>
                    
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

    <!-- Page Content -->
    <?php if (isset($_SESSION)) : ?>
      <div id= "page-wrapper"class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center" style="font-family:avenir">PRONUNCIATION</h1>
                    </div>
                </div>
                <div class= "row text-center">
                   <!-- <!--<div class="form-group col-md-8 ">
                        <img src="http://quickcorrections.com/qc/img/tempo.jpg">
                        <h1><b>Sorry about the inconvenience!</b></h1>  
                    </div>-->
                </div>
                
        
          
        <?php //echo $error;?> 
          
           <?php echo form_open_multipart('upload/do_pronunciation');?> 
         <form action="" method="">
          <div>              
              <h2>Record your voice</h2>
              
              <iframe src="http://vocaroo.com/?minimal" width="525" height="450" frameborder="0"></iframe><br>Powered by <a href="http://vocaroo.com" title="Voice Recorder">Vocaroo Voice Recorder</a>
              
            
         </div>

    
          
                <div class="row">
                    <div class="panel panel-red">
                        <input type = "file" name = "userfile" size = "20" /> 
                            
                        
                    </div>
                    
                    <div class="form-group">        
                    <input type ="submit" value="Upload" href="" class="btn btn-danger" />
                    </div>
                </div>

          </form>
            </form>

    </div>
    </body>
<?php endif; ?>

</html>

    <!-- jQuery -->
    <script src="../css/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/bower_components/metisMenu/dist/metisMenu.min.js"></script>
 
    <script src="../css/dist/js/sb-admin-2.js"></script>


=======


      
       <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class=""></i> <b>Services</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                
                                <li>
                                    <a href="<?= base_url('/user/sen_correct_student') ?>"><b>Sentence Correction</b></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/english_question') ?>"><b>Question about English</b></a>
                                </li>
                                
                                <li>
                                    <a href="<?= base_url('auth/proofread') ?>"> <b>Proofreading</b></a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/setting"><i class=""></i> <b>Password</b></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/userpage"><i class=""></i> <b>Your Answer</b></a>
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/payment"><i class=""></i><b> Buy Point</b></a>
                        </li>
                    
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

    <!-- Page Content -->
    <?php if (isset($_SESSION)) : ?>
      <div id= "page-wrapper"class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center" style="font-family:avenir">PRONUNCIATION</h1>
                    </div>
                </div>
                <div class= "row text-center">
                   <!-- <!--<div class="form-group col-md-8 ">
                        <img src="http://quickcorrections.com/qc/img/tempo.jpg">
                        <h1><b>Sorry about the inconvenience!</b></h1>  
                    </div>-->
                </div>
                
        
          
        <?php //echo $error;?> 
          
           <?php echo form_open_multipart('upload/do_upload');?> 
         <form action="" method="">
          <div>              
              <h2>Record your voice</h2>
              
              <iframe src="http://vocaroo.com/?minimal" width="525" height="450" frameborder="0"></iframe><br>Powered by <a href="http://vocaroo.com" title="Voice Recorder">Vocaroo Voice Recorder</a>
              
            
         </div>

    
          
                <div class="row">
                    <div class="panel panel-red">
                        <input type = "file" name = "userfile" size = "20" /> 
                            
                        
                    </div>
                    
                    <div class="form-group">        
                    <input type ="submit" value="Upload" href="" class="btn btn-danger" />
                    </div>
                </div>

          </form>
            </form>

    </div>
    </body>
<?php endif; ?>

</html>

    <!-- jQuery -->
    <script src="../css/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/bower_components/metisMenu/dist/metisMenu.min.js"></script>
 
    <script src="../css/dist/js/sb-admin-2.js"></script>


>>>>>>> 50835a23647ca9d33ca3431f823c46fa948261f3



      
       <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class=""></i> <b>Our Services</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                
                                <li>
                                    <a href="<?= base_url('/user/sen_correct_student') ?>"><b>Sentence Correction</b></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/english_question') ?>"><b>Question about English</b></a>
                                </li>
                                <li>
                                    <a href="http://quickcorrections.com/qc/login3/auth/pronunciation"><b>Pronunciation</b></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/proofread') ?>"> <b>Proofreading</b></a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/setting"><i class=""></i> <b>Setting</b></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=""><i class=""></i> <b>Notifications</b></a>
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
                    <!--<div class="form-group col-md-8 ">-->
                        <img src="http://quickcorrections.com/qc/img/tempo.jpg">
                        <h1><b>Sorry about the inconvenience!</b></h1>  
                    </div>
                </div>
                
        
          
           <?php //echo $error;?> 
          
           <?php echo form_open_multipart('upload/do_upload');?> 
         <!-- <form action="" method="">
          <div>              
              <h2>Record your voice</h2>
              <iframe src="https://webaudiodemos.appspot.com/AudioRecorder/index.html"  width="400" height="300"></iframe>
                </div>

    
          
                <div class="row">
                    <div class="panel panel-red">
                        <input type = "file" name = "userfile" size = "20" /> 
                           <input type = "submit" value = "upload" /> 
                        
                    </div>
                    
                    <div class="form-group">        
                    <a href="" class="btn btn-danger">Submit</a>
                    </div>
                </div>
<<<<<<< HEAD
          </form>
=======
            </form>-->
>>>>>>> b8c0840896891d75f3b274e80fb579620dd799e3

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



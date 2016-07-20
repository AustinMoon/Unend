

      
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
                                    <a href="#"><h5 >&nbsp;>&nbsp;&nbsp;&nbsp;Pronunciation</h5></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/proofread') ?>"> <h5>&nbsp;>&nbsp;&nbsp;&nbsp;Proofreading</h5></a>
                                </li>
                               
                            <!-- /.nav-second-level -->
                        
                       
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/setting"><i class=""></i> <h4>Information</h4></a>
                            
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
    <?php if (isset($_SESSION)) : ?>
      <div id= "page-wrapper"class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center" style="font-family:avenir">PRONUNCIATION</h1>
                    </div>
                </div>
                
                   <!-- <!--<div class="form-group col-md-8 ">
                        <img src="http://quickcorrections.com/qc/img/tempo.jpg">
                        <h1><b>Sorry about the inconvenience!</b></h1>  
                    </div>-->
               
                
        
          
      
          
           <?php echo form_open_multipart('upload/do_pronunciation');?> 
            <form action="pronunciation" method="post">
              <div class= "row">
                    <div class="form-group col-sm-12">
                    <div class="col-sm-8" style="position:relative">
                    <h4 ><i>Step 1. Please record your speaking with your laptop or desktop.<br/>
                    * You can record up to 45 seconds, and we will charge you 120 points.</i></h4>
              
              <iframe src="http://vocaroo.com/?minimal" width="525" height="450" frameborder="0"></iframe><br>Powered by <a href="http://vocaroo.com" title="Voice Recorder">Vocaroo Voice Recorder</a>
                    <h4 ><i><hr/>Step 2. Download file as mp3</i></h4>



             
        
                <h4 ><i><hr/> Step 3. Select your recorded file, and upload it on our system.</i></h4>
    
            <div class="panel panel-red">
                <input type = "file" name = "userfile" size = "20" /> 
                            
                   </div>     
                    
                  
                     <h4 ><i><hr/>Step 4. Press Upload button below.<br/>
              * We will respond to you as Quickly as possible.<br/> Please check your email as well. Thank you so much!</i></h4>      
                    <input type ="submit" value="Upload" href="" class="btn btn-danger" />

                </div>
                </div>
                </div>

                
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


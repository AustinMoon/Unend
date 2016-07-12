

      
       <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class=""></i> Study<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                
                                <li>
                                    <a href="<?= base_url('/user/sen_correct_student') ?>">Sentence Correction</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/english_question') ?>">English Question</a>
                                </li>
                                <li>
                                    <a href="http://quickcorrections.com/qc/login3/auth/pronunciation">Pronunciation</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/proofread') ?>"> Proofreading</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=""><i class=""></i> Account</a>
                        </li>
                        <li>
                            <a href=""><i class=""></i> Setting</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=""><i class=""></i> Notifications</a>
                        </li>
                        <li>
                            <a href=""><i class=""></i> Buy Point</a>
                        </li>
                    
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

	<main id="site-content" role="main">
        <?php if (isset($_SESSION)) : ?>

        <div id= "page-wrapper"class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center" style="font-family:avenir">Proofreading</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            
           <?php //echo $error;?> 
      <?php echo form_open_multipart('upload/do_upload');?> 
		
      <form action = "" method = "">
                <div class= "row">
                   
                    <div class="form-group col-md-8">
                        <label><h2>Submit your Papers! (MS Word Format)</h2></label>
                        <div class="panel panel-red">
                        <input type = "file" name = "userfile" size = "20" /> 
                           <input type = "submit" value = "upload" /> 
                        
                    </div>
                    <h5> 1 word = 1.5 or more point</h5>
                        
                    </div>
                    
                </div>
                <div class"row">
                    <div class="form-group col-md-8">
                        <h4>What do you need? Please let us know (Optional)</h4>
                        <textarea name="words" class="form-control" rows="5"placeholder="Type Sentence here..." ></textarea>
                        <h5> 1 word = free / Limit = 100 words</h5>
                    </br>
                                                                  
                         <button href="" class="btn btn-danger">Submit</button>
                    </div>
            </form>
        </div>
        </div>
    </div>
		<?php endif; ?>


    <script src="../css/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../css/dist/js/sb-admin-2.js"></script>

</body>

</html>

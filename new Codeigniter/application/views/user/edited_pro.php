

      
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
                                    <a href="http://quickcorrections.com/qc/login3/auth/pronunciation"><b>Pronunciation</b></a>
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
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center" style="font-family:avenir">PRONUNCIATION</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               
                <!-- /.col-lg-6 -->
               <div class="panel panel-default">
                     <div class="panel-heading"> Request # <?= $request->request_id; ?></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                Question 
            </div>
            <div class="col-md-9">
                    <?= $request->text; ?>
                    <br/>
                    <img src="http://quickcorrections.com/qc/img/arrow.png">
            </div>
            
        </div>
        
       
        <div class="row">
            <div class="col-md-3">
                Answer
            </div>
                <div class="col-md-9">
                    <?= $request->tutor_revision; ?>
                    
            </div>
            
        </div>
        
        
                   </div></div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
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
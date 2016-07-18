   
       <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class=""></i> <b>Services</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                
                               
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
        <div id= "page-wrapper"class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center" style="font-family:avenir">TUTOR PROFILE</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            
            <form action="sen_correct_student" method="post">
                <div class= "row">
                    <div class="form-group col-sm-12">
                    <div class="col-sm-8" style="position:relative">
                        <h3 ><i>Tutor email : </i></h3>
                        <h4 ><i><hr/>Tutor rate :</i></h4>
                        <h4 ><i><hr/>Tutor feedback :</i></h4>


                        
                    </div>
                    <!--<div class="col-sm-4 ">
                        <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4><b><i>How to use</i></b></h4>
                        </div>
                        <div class="panel-body">
                            <h5>Type Your English Sentence into TextBox.
                            For more, just add point credits to your account.</h5>
                        </div>
                        
                            </div>
                    </div>-->

                    </div>
                </div>

                <div class"row">
                    <div class="form-group col-sm-8"> 
                    <h4 ><i><hr/>Step 3. Are you done? Put the submit button below. Thank you!</i></h4>

                        <button href="" class="btn btn-danger">Submit</button>
                    </div>

                </div>
                
                </form>


              
                <!-- /.row -->
        </div>
            <!-- /.container-fluid -->
        
        <!-- /#page-wrapper -->

    </div>
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
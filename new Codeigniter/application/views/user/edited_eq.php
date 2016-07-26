

      
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
                            <a href="http://quickcorrections.com/qc/login3/auth/change_password"><i class=""></i> <h4>Information</h4></a>
                            
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
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center" style="font-family:avenir">ENGLISH QUESTION ANSWER</h1>
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
            <div class= "row">
                    
                <div class="col-lg-6 col-lg-offset-4">
                   <div class="rate">
                        <input type="radio" id="star1" name="rate" value="1" /><label for="star1" title="text">1 star</label>
                        <input type="radio" id="star2" name="rate" value="2" /><label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" /><label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" /><label for="star4" title="text">4 stars</label> 
                        <input type="radio" id="star5" name="rate" value="5" /><label for="star5" title="text">5 stars</label>
                    
                        
                        
                    </div>
                </div>
                <div  class="col-lg-8 col-lg-offset-2">
                       <h4><br/>Feedback</h4>
                         <textarea class="form-control"  id="text_feedback" rows="2"placeholder="Type feedback..." name="optional" maxlength="750" ></textarea>
                    <hr/>
                    <button href="" class="btn btn-danger btn-lg" >Submit</button>
                </div>   
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
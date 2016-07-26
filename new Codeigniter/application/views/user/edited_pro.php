

      
       <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a ><i class=""></i> <h5 style="margin-top:-2px; margin-bottom:-5px">Services</h5></a>
                        </li>
                                
                                <li>
                                    <a href="<?= base_url('/user/sen_correct_student') ?>"><h5 style="margin-top:-2px; margin-bottom:-5px">&nbsp;-&nbsp;&nbsp;&nbsp;Sentence Correction</h5></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/english_question') ?>"><h5 style="margin-top:-2px; margin-bottom:-5px">&nbsp;-&nbsp;&nbsp;&nbsp;Question about English</h5></a>
                                </li>
                                <li>
                                    <a href="http://quickcorrections.com/qc/login3/auth/pronunciation"><h5 style="margin-top:-2px; margin-bottom:-5px">&nbsp;-&nbsp;&nbsp;&nbsp;Pronunciation</h5></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/proofread') ?>"> <h5 style="margin-top:-2px; margin-bottom:-5px">&nbsp;-&nbsp;&nbsp;&nbsp;Proofreading</h5></a>
                                </li>
                               
                            <!-- /.nav-second-level -->
                        
                       
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/auth/change_password"><i class=""></i> <h5 style="margin-top:-2px; margin-bottom:-5px">Information</h5></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/userpage"><i class=""></i> <h5 style="margin-top:-2px; margin-bottom:-5px">Your Answer</h5></a>
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/payment"><i class=""></i><h5 style="margin-top:-2px; margin-bottom:-5px"> Buy Point</h5></a>
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
                Previous file 
            </div>
            <div class="col-md-9">
                    <a href="http://quickcorrections.com/qc/login3/uploads/<?php echo $request->text; ?>" download>Click here to download</a>
                    <br/>
                    <img src="http://quickcorrections.com/qc/img/arrow.png">
            </div>
            
        </div>
        
       
        <div class="row">
            <div class="col-md-3">
                Edited file
            </div>
                <div class="col-md-9">
                   
                    <a href="http://quickcorrections.com/qc/login3/uploads/<?php echo $request->tutor_revision; ?>" download>Click here to download</a>
            </div>
            
        </div>
        
        
                   </div></div>
                <!-- /.col-lg-6 -->
            </div>
            <div class= "row">
                    
                <div class="col-lg-6 col-lg-offset-4">
                   <div class="rate">
                       <div class="stars">
  <form action="http://quickcorrections.com/qc/login3/user/save_rating/<?= $request->request_id; ?>" method="post">
    <input class="star star-5" id="star-5" type="radio" value="5" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" value="4" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" value="3" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" value="2" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" value="1" name="star"/>
    <label class="star star-1" for="star-1"></label>
  
</div>
                        
                        
                    </div>
                </div>
                <div  class="col-lg-8 col-lg-offset-2">
                       <h4><br/>Feedback</h4>
                         <textarea class="form-control"  id="text_feedback" rows="2"placeholder="Type feedback..." name="feedback" maxlength="750" ></textarea>
                    <hr/>
                    <button type="submit" href="" class="btn btn-danger btn-lg" >Submit</button>
                </div>   
      </form>  </div>
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
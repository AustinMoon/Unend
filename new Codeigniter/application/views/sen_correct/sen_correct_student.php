

      
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
                        <h1 class="page-header text-center" style="font-family:avenir">SENTENCE CORRECTION</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            
            <form action="sen_correct_student" method="post">
                <div class= "row">
                    <div class="form-group col-sm-12">
                    <div class="col-sm-8" style="position:relative">
                        <h4 ><i>Step 1. Type your sentence(s) below (limit = 750)</i></h4>
                        <textarea class="form-control"  id="text" rows="5"placeholder="Type Sentence here..." name="sentence" maxlength="750" autofocus></textarea>
                        

                        
                        <h5 style="display:inline; color:#918C8C" >1 word = 1.5 point / Limit = 750 characters</h5>
                         <h5 class="pull-right" id="count_message"></h5>
                    
                
                        
                        <h4 ><i><hr/>Step 2. Let us know if you need anything! (optional)</i></h4>

<!-- <div id="textarea_feedback"></div>-->
                        <textarea class="form-control"  id="text_feedback" rows="2"placeholder="Type Sentence here..." name="optional" maxlength="750" ></textarea>
                        
                        <h5 style="display:inline;color:#918C8C"> 1 word = 1 point / Limit = 750 characters</h5>
                        <h5 class="pull-right" id="textarea_feedback"></h5>

                        
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
    <!-- /#wrapper -->
<script>
    $(document).ready(function() {
    var text_max = 750;
    $('#textarea_feedback').html(text_max + '/750');
    $('#textarea').keyup(function() {
        var text_length = $('#textarea').val().length;
        var text_remaining = text_max - text_length;
        $('#textarea_feedback').html(text_remaining + ' /750');
    });
});
</script>
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
<script>
var text_max = 750;
$('#count_message').html(text_max + ' /750');
$('#text').keyup(function() {
  var text_length = $('#text').val().length;
  var text_remaining = text_max - text_length;
  
  $('#count_message').html(text_remaining + ' /750');
});
</script>
<script>
var text_max = 750;
$('#textarea_feedback').html(text_max + '/750');
    $('#text_feedback').keyup(function() {
        var text_length = $('#text_feedback').val().length;
        var text_remaining = text_max - text_length;
        $('#textarea_feedback').html(text_remaining + ' /750');
    });
</script>
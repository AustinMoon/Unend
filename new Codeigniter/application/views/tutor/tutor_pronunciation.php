

      
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
	<main id="site-content" role="main">
        <?php if (isset($_SESSION)) : ?>

        <div id= "page-wrapper"class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       <h1 class="page-header text-center" style="font-family:avenir">Pronunciation Answer</h1>
                    </div>
                </div>
            
            <?php //echo $error;?> 
            <?php echo form_open_multipart('upload/do_pronunciation_answer/'.$req_id);?> 
            
            <div class= "row"> 
                <div class="form-group col-md-8">
                        <!-- <h4 ><i> <?php echo $error;?> </i></h4>-->

                     <iframe src="http://vocaroo.com/?minimal" width="525" height="450" frameborder="0"></iframe><br>Powered by <a href="http://vocaroo.com" title="Voice Recorder">Vocaroo Voice Recorder</a>
                    
                        <h4 ><i>Upload the revision</i></h4>
                       

                        <div class="panel panel-red">

                        <input style="display:inline" type = "file" name = "userfile" size = "20" /> 
                        
                        </div> 
                    </div>
                </div>
            <textarea class="form-control"  id="text" rows="5"placeholder="Type Sentence here..." name="sentence" maxlength="750" autofocus></textarea>
            
            <button href="" class="btn btn-danger">Submit</button>
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
<script>
var text_max = 750;
$('#count_message').html(text_max + ' /750');
$('#text').keyup(function() {
  var text_length = $('#text').val().length;
  var text_remaining = text_max - text_length;
  
  $('#count_message').html(text_remaining + ' /750');
});
</script>

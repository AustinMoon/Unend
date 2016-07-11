
    <!-- Page Content -->
    <?php if (isset($_SESSION)) : ?>
      <div id= "page-wrapper"class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center" style="font-family:avenir">PRONUNCIATION</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class= "row">
                    <div class="form-group col-md-8">
                        <label><h2>New Pronunciation</h2></label>    
                    </div>
                </div>
                
          <div class="row">
              <div class="form-group">
                  <a href="" class=""><img src="../img/voice.png" alt="recorder" ></a>
                     </div>
          </div>
          
           <?php //echo $error;?> 
          
           <?php echo form_open_multipart('upload/do_upload');?> 
          <form action="" method="">
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



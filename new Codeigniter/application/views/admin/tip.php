    <div class="container-fluid">

        <!-- Page Content -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i>Daily Tip</i></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               
                <!-- /.col-lg-6 -->
               <div class="panel panel-default">
                     <div class="panel-heading"> Tip# <?= $request->post_id; ?></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    Title
                                </div>
                            <div class="col-md-9">
                             <?= $request->title; ?>
                            <br/>
                   
                             </div>
            
                         </div>
        
       
          <div class="row">
                <div class="col-md-3">
                    Content
                </div>
                <div class="col-md-9">
                    <?= $request->content; ?>
                </div>
            
         </div>
        
        
                   </div></div>
                <!-- /.col-lg-6 -->
            </div>
            <?php $user = $this->ion_auth->user()->row();
            if($user->id==$request->user_id && $request->rating_stars== NULL ){ echo'
            <div class= "row">
                    
                <div class="col-lg-6 col-lg-offset-4">
                   <div class="rate">
                       <div class="stars">
  <form action="http://quickcorrections.com/qc/login3/user/save_rating/'. $request->request_id .'" method="post">
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
      </form>  </div>' ;}?>
        
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
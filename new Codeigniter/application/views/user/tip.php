    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center">Daily Tip</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2" >

                <!-- /.col-lg-6 -->
               <div class="panel panel-default">
                     <div class="panel-heading">
                        <h5 style="float:right">Day# <?= $request->post_id; ?></h5>
                      <h3><?= $request->title; ?></h3>
                      </div>
            <div class="panel-body">
                      
                <div class="row">
                    
                        <div class="col-md-9">
                            <h4><?= $request->content; ?></h4>
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

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center" style="font-family:avenir">USER PAGE</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               
                <!-- /.col-lg-6 -->
               <div class="panel panel-default">
                     <div class="panel-heading"> Request #</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                Student 
            </div>
                <div class="col-md-9">
                    <?= $request->text; ?>
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-md-3">
                Fixed
            </div>
                <div class="col-md-9">
                    <?= $outpot; ?>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-3">
                Tutor
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
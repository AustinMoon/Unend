<nav>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li> <a href="#"><i class=""></i> <b>Tutor Page</b></a> </li>
                        
                <li> <a href="http://quickcorrections.com/qc/login3/tutor/tutor_history"><i class=""></i> <b>Tutor History</b></a>
                </li>
                
                <li> <a href="http://quickcorrections.com/qc/login3/auth/change_password"><i class=""></i> <b>Password</b></a>
                <!-- /.nav-second-level -->
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
                        <h1 class="page-header text-center">SENTENCE CORRECTION</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class= "row">
                    <div class="form-group col-md-8">
                          <form action = "../add_revision" method = "POST">
                              
                              <label><h2>Edit student's sentence</h2></label>                              
                              
                              <textarea name="tutor_revision" class="form-control" rows="5" autofocus><?= $request->text; ?></textarea>
                              
                              <input type="hidden" name="request_id" value="<?= $request->request_id; ?>">
                              
                              <label><h2>Student's comment: <?= $request->additional; ?></h2></label>
                              <textarea name="tutor_comments" class="form-control" rows="5" autofocus></textarea>

                        
                    
                    </div>
                </div>
                <div class"row">
                    <div class="">
                    <button type="submit" class="btn btn-danger">Submit</button>
                    </div></form>

                </div>
                <!--
                <div class= "row">
                    <div class="form-group col-md-8">
                          <form action = "../add_revision" method = "POST">
                        <label><h2>Student Comments</h2></label>
                        <textarea name="tutor_revision" class="form-control" rows="5" autofocus disabled><?= $request->additional; ?></textarea>
                        <input type="hidden" name="request_id" value="<?= $request->request_id; ?>">

                    </div>
                </div>
                -->



              
                <!-- /.row -->
        </div>
            <!-- /.container-fluid -->
        
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

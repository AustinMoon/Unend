       <div class="container-fluid">
            <div class="row" >
                 <div class="col-lg-12 page-header text-center">
                    <h1>Posting</h1>
                </div>
            </div>
            
            <div class="row" >
                <div class="col-md-8 col-md-offset-2" ><form action="http://quickcorrections.com/qc/login3/admin/edit_english_tip/<?= $post_id ?>" method="post">
                    <h4 ><i>Title </i></h4>
                    <textarea class="form-control"  id="word_count" rows="1"  name="title" maxlength="150" autofocus><?= $title ?></textarea>

                    <h4 ><i>Type Daily English Tip below </i></h4>
                    <textarea class="form-control"  id="word_count" rows="5"  name="content" maxlength="750"><?= $content; ?></textarea>
                    <h4></h4>
                    <button href="" name="submit" value="submit" class="btn btn-danger">Submit</button>
                    <h1></h1>
        <!-- /#page-wrapper -->
                </div></form>
            </div>
         </div>
    
     <script src="../css/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../css/dist/js/sb-admin-2.js"></script>

</body>
</html>
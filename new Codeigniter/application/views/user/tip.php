    <?php
function make_links_clickable($text){
    return preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a href="$1">$1</a>', $text);
}
?>
        
        
        <!--<form class="navbar-form" role="search" action="http://quickcorrections.com/qc/login3/admin/list_of_posts/search/search_keyword" method = "post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name = "keyword"size="15px; ">
                <div class="input-group-btn">
                    <button class="btn btn-default " type="submit" value = "Search"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
        </form>-->
        
            <div class="row">
<<<<<<< HEAD
                <div class="col-lg-12">
                    <h3 class="page-header"><i>Daily Tip</i></h3>
                    <button type="button"><?= $next_tip->id; ?></button><button type="button">Next</button>
                </div>
=======
               
>>>>>>> 52d14b17de95cc1de6b0d8df677ba8dd3706038a
                <!-- /.col-lg-12 -->
            </div>
        
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-2" >
                    <img class="hidden-sm hidden-xs text-left" src="http://quickcorrections.com/qc/img/bg.png" style="height: 480px; float:left">
                </div>
                
                <div class="col-md-8" >


                <!-- /.col-lg-6 -->
               <div class="panel panel-default">
                     <div class="panel-heading">
                        <h5 style="float:right">Day# <?= $request->post_id; ?></h5>
                      <h4 style="margin-top:10px"><?= $request->title; ?></h4>
                      </div>
            <div class="panel-body">
                      
                <div class="row">
                    
                        <div class="col-md-9">

                            <p><?= make_links_clickable(nl2br($request->content)); ?></p>

                    </div>
                    
                </div>
                
        
                   </div></div>
                <!-- /.col-lg-6 -->
            </div>
            
        
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    
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
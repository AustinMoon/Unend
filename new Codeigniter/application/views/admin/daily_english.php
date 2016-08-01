       <div class="container-fluid">
            <div class="row" >
                 <div class="col-lg-12 page-header text-center">
                    <h1>Daily English Tip</h1>
                </div>
            </div>
            
            <div class="row text-center" >
                <div class="col-md-8 col-md-offset-2" >
                   <!-- table-->
                    <div class="text-center">
                        <div class="panel-body">
        <table class="table table-hover">
    <thead>
      <tr>
        <th>post ID</th>
        <th>Content</th>
        <th>Post Date</th>
      </tr>
    </thead>
    <tbody>

        <?php 
        
        foreach ($content->result() as $row)
{
            echo '<tr>';
            echo '<td>';
            echo $row->post_id;
            echo '</td><td>';
            echo $row->content;
            echo '</td><td>';
            echo date('m/d/Y', $row->request_date);
            echo '</td><td>';
        }
            ?>
    </tbody></table>
                    </div>
                        <a href="<?= base_url('auth/login') ?>"><button  class="btn btn-danger">Click Here! </button></a>
                        <h1></h1>
                    </div>
        <!-- /#page-wrapper -->
            </div>
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
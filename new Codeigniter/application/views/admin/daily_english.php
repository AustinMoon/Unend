       <div class="container-fluid">
            <div class="row" >
                 <div class="col-lg-12 page-header">

                    <h3><i>Daily Tip</i></h3>
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
          <th>No.</th>
          <th>Date</th>
          <th>Title</th>
          
          <?php if ($this->ion_auth->is_admin())
    echo'<th>Edit</th>';
          ?>
          
      </tr>
    </thead>
    <tbody>

        <?php 
        echo '<tr>';
        foreach ($title->result() as $row){
            echo '<tr>';
            echo '<td>';
            echo '<a href="http://quickcorrections.com/qc/login3/user/tip/'.$row->post_id.'" >';
            echo $row->post_id;
            echo '</td><td>';
            echo date('m/d/Y', $row->request_date);
            echo '</td><td>';
            echo '<a href="http://quickcorrections.com/qc/login3/user/tip/'.$row->post_id.'" >';
            echo $row->title;
            echo '</td><td>';
            
            if ($this->ion_auth->is_admin())
            {
                echo '<a href="http://quickcorrections.com/qc/login3/admin/edit_english_tip/'.$row->post_id.'"><button class="btn btn-danger" type="button">Edit</button></a>';
            }
            echo '</a></td><td>';
            }
        
        
        
        ?>
    </tbody></table>
                    </div>
                      <!--  <?php echo $this->pagination->create_links(); ?><br>
                        <h1></h1>
                    </div>
                    <form class="form-inline" role="form" action="<?php echo base_url().'admin/search_keyword'; ?>" method="post">
                    <div class="form-group">
                            <input type="text" class="form-control" name= "search" id="search">
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-info">Search</button>
                    </form></br>
                    -->
                
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

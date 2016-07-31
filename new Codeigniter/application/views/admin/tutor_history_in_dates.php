
 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/tutor/"><i class=""></i> <b>Tutor Page</b></a>
                        </li>
                        
                        <li>
                            <?php $user = $this->ion_auth->user()->row(); ?>
                            <a href="http://quickcorrections.com/qc/login3/tutor/tutor_history/<?= $user->id; ?>d"><i class=""></i> <b>Tutor History</b></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/auth/change_password"><i class=""></i> <b>Information</b></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                    
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
               <?php $user = $this->ion_auth->user($user_id)->row(); ?>
                <div class="col-lg-12">
                    <h1 class="page-header text-center" style="font-family:avenir">TUTOR HISTORY FOR <?= $user->first_name.' '.$user->last_name; ?></h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row"><form action="http://quickcorrections.com/qc/login3/admin/tutor_history_in_dates" method="post">
                <div class='col-md-3'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>Select Tutor
                <?php 
     echo '<select class="form-control" name="tutor_id">';
            foreach($tutors->result() as $row)
            { 
                $tutor = $this->ion_auth->user($row->user_id)->row();
              echo '<option value="'.$row->user_id.'">'.$tutor->email.'</option>';
            }
            
            echo '</select>';
    
    ?>
                </div></div></div>
       <div class='col-md-3'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                  from  <input type="datetime-local" name="from" id="datepicker" value="1999-08-08T12:00" class="form-control" />
                </div>
            </div>
           
        </div>
                <div class='col-md-3'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                   to <input type="datetime-local" name="to" id="datepicker" value="1999-08-08T12:00" class="form-control" />
                </div>
            </div>
        </div>
                <div class='col-md-3'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                  <button type="submit" name="submit" class="btn btn-danger" value="submit">submit</button>
                </div>
            </div>
        </div></form>
            </div>
            <div class="row">
               
                <div class="panel panel-default">
                     <div class="panel-heading">Previous Requests</div>
    <div class="panel-body">
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Request ID</th>
        <th>TEXT</th>
        <th>User</th>
        <th>Answer Date</th>
        <th>Request Type</th>
        <th>Points Earned</th>
        
      </tr>
    </thead>
    <tbody>
        <?php 
        $total_points=0;
        foreach ($content->result() as $row)
{
            echo '<tr>';
            echo '<td>';
            echo $row->request_id;
            echo '</td><td>';
            if($row->type=='Pronunciation'){echo'<a href="http://quickcorrections.com/qc/login3/uploads/'.$row->text.'" download>click here to download</a>';}
            else{
            if(strlen($row->text)>10){echo substr($row->text, 0, 10).'...';}
            else {echo $row->text;}}
            echo '</td><td>';
            $user = $this->ion_auth->user($row->user_id)->row();
            echo $user->email;
            echo '</td><td>';
            echo date('m/d/Y', $row->revision_finish_date);
            echo '</td><td>';
            echo $row->type;
            echo '</td><td>';
            echo $row->req_points/2;
            echo '</td></tr>';
            $total_points += $row->req_points;
       
}?>
             </tbody></table>
        
                    </div>
                    </div>
             
                
                Total Points Earned In This Period: <?php
                foreach($tutor_points as $row){ echo $row->req_points/2;}
               // echo print_r($tutor_points); ?>
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
   <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

</body>

</html>
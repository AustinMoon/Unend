<?php

function humanTiming ($time)
{

    $time = time() - $time; // to get the time since that moment
    $time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }

}
?>
<?php date_default_timezone_set("America/New_York"); ?>
 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/tutor/"><i class=""></i> <b>Tutor Page</b></a>
                        </li>
                        
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/tutor/tutor_history"><i class=""></i> <b>Tutor History</b></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/tutor/setting"><i class=""></i> <b>Password</b></a>
                            
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
                <div class="col-lg-12">
                    <h1 class="page-header text-center" style="font-family:avenir">TUTOR HISTORY</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               
                <div class="panel panel-default">
                     <div class="panel-heading">Previous Requests</div>
    <div class="panel-body">
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Tutor_id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Name</th>
        <th>Request Type</th>
        <th>Points Earned</th>
        
      </tr>
    </thead>
    <tbody>
        <?php 
        $total_points=0;
        foreach ($content->result() as $row)
{
            $user = $this->ion_auth->user($row->user_id)->row();
            
            echo '<form action="http://quickcorrections.com/qc/login3/tutor/tutor_history/'.$row->user_id.'" method="post">';
            echo '<input type="hidden" name ="user_id" value= "'. $row->user_id .'">';
            echo '<tr><td>';
            echo $row->user_id;
            echo '</td><td>';
            $q= $this->tutor_model->tutor_points($row->id);
            foreach ($q->result() as $row1){
                echo $row1->req_points;
            
            }
            echo '</td><td>';
            echo $user->email;
            echo '</td><td>';
            echo $user->first_name .' '. $user->last_name;
            echo '</td><td>';
            //echo $row->id;
            $earned_points=$this->tutor_model->tutor_points($row->user_id)->result();
            echo $earned_points[0]->req_points/2;
            echo '</td><td>';
            echo '<input type="submit" class="btn btn-danger" value="See Tutor Histury">';
            echo '</td></tr></form>';
            
       
}?>
             </tbody></table>
                    </div>
                    </div>
                Total Points Earned: <?= $total_points/2 ?>
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
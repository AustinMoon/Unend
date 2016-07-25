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
                            <a href="#"><i class=""></i> <b>Tutor Page</b></a>
                        </li>
                        
                        <li>
                            <?php $user = $this->ion_auth->user()->row(); ?>
                            <a href="http://quickcorrections.com/qc/login3/tutor/tutor_history/<?= $user->id; ?>d"><i class=""></i> <b>Tutor History</b></a>
                            
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
                    <h1 class="page-header text-center" style="font-family:avenir">ADMIN PAGE</h1>

                    <h1 class="page-header text-center" style="font-family:avenir">Proofread Assigning Page</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               
                <div class="panel panel-default">
                     <div class="panel-heading">Open requests</div>
    <div class="panel-body">
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Request ID</th>
        <th>FILE</th>
        <th>User</th>
        <th>Request Date</th>
        <th>points Count</th>
        <th>Select Tutor</th>
        <th>Select</th>
        
      </tr>
    </thead>
    <tbody>
        <?php 
        
        foreach ($content->result() as $row)
{
            echo '<form action="assign_proofread" method="post">';
            echo '<tr>';
            echo '<td>';
            echo $row->request_id;
            echo '<input type="hidden" name ="req_id" value= "'. $row->request_id .'">';
            echo '</td><td>';
            echo'<a href="http://quickcorrections.com/qc/login3/uploads/'.$row->text.'" download>click here to download</a>';
            echo '</td><td>';
            $user = $this->ion_auth->user($row->user_id)->row();
            echo $user->email;
            echo '</td><td>';
            echo humanTiming($row->request_date). ' ago';
            echo '</td><td>';
            
            echo'<input type="number" class="form-control" name="points">';
            echo '</td><td>';
             echo '<select class="form-control" name="tutor_id">';
            foreach($tutors->result() as $row)
            { 
                $tutor = $this->ion_auth->user($row->user_id)->row();
              echo '<option value="'.$row->user_id.'">'.$tutor->email.'</option>';
            }
            
            echo '</select>';
            echo '</td><td>';
            echo '<input type="submit" value="Submit">';
            echo '</td></tr></form>';
       
}?>
             </tbody></table>
                    </div>
                    </div>
            </div>
            <!-- /.row -->
             <!-- /.row -->
        
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
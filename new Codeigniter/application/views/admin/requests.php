<!DOCTYPE html>
<?php

function humanTiming ($time)
{
    date_default_timezone_set("America/New_York");
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

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center" style="font-family:avenir">Requests List</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               
                <div class="panel panel-default">
                     <div class="panel-heading">List of Requests</div>
    <div class="panel-body">
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Request ID</th>
        <th>TEXT</th>
        <th>User</th>
        <th>Is Assigned To Tutor?</th>
        <th>Assigned Tutor</th>
        <th> Time Since Assigned</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
        <?php 
        
        foreach ($all_requests->result() as $row)
{
            echo '<tr>';
            echo '<td>';
            echo $row->request_id;
            echo '</td><td>';
            echo $row->text;
            echo '</td><td>';
            $user = $this->ion_auth->user($row->user_id)->row();
            echo $user->email;
            echo '</td><td>';
            echo ($row->is_assigned==1)?'Yes':'No';
            echo '</td><td>';
            if(!empty($row->tutor_id))
            {$user = $this->ion_auth->user($row->tutor_id)->row();
            echo $user->email;}
            else{
            echo 'Not Assigned Yet';}
            echo '</td><td>';
            if ($row->assign_date >0){
            echo humanTiming($row->assign_date). ' ago';}
            else { echo '---';}
            echo '</td><td>';
            echo '<a href="send_email/'.$row->request_id .'"><button type="submit" value="Send Email">Send Email</button></a>';
            echo '</td></tr>';
       
}?>
             </tbody></table>
                    </div>
                    </div>
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
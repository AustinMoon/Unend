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
                    <h1 class="page-header text-center" style="font-family:avenir">TUTOR PAGE</h1>
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
        <th>TEXT</th>
        <th>User</th>
        <th>Request Date</th>
        <th>Request Type</th>
        <th>Points Count</th>
        <th>Select</th>
        
      </tr>
    </thead>
    <tbody>
        <?php 
        
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
            echo date('m/d/Y', $row->request_date);
            echo '</td><td>';
            echo $row->type;
            echo '</td><td>';
            echo $row->req_points/2;
            echo '</td><td>';
            $tutor = $this->ion_auth->user()->row();
            echo '<a href="http://quickcorrections.com/qc/login3/tutor/assign/'. $tutor->id .'/'. $row->request_id .'"><button class="btn btn-primary" type="button">Assign this request</button></a>';
            echo '</td></tr>';
       
}?>
             </tbody></table>
                    </div>
                    </div>
            </div>
            <!-- /.row -->
             <!-- /.row -->
            <div class="row">
               
                <div class="panel panel-default">
                     <div class="panel-heading">Assigned requests to you</div>
    <div class="panel-body">
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Request ID</th>
        <th>TEXT</th>
        <th>User</th>
        <th>Assign time</th>
        <th>Request Type</th>
        <th>Points Count</th>
        <th>Select</th>
        
      </tr>
    </thead>
    <tbody>
        <?php 
        
        foreach ($assigned_requests->result() as $row)
{
            echo '<tr>';
            echo '<td>';
            echo $row->request_id;
            echo '</td><td>';
            if($row->type=='Pronunciation'){echo'<a href="http://quickcorrections.com/qc/login3/uploads/'.$row->text.'" download>click here to download</a>';}
            else if ($row->type=='Proofread'){echo'<a href="http://quickcorrections.com/qc/login3/uploads/'.$row->text.'" download>click here to download</a>';}
            else{
            if(strlen($row->text)>10){echo substr($row->text, 0, 10).'...';}
            else {echo $row->text;}}
            echo '</td><td>';
            $user = $this->ion_auth->user($row->user_id)->row();
            echo $user->email;
            echo '</td><td>';
            if ($row->assign_date >0){
            echo date('m/d/Y', $row->assign_date);}
            else { echo '---';}
            echo '</td><td>';
            echo $row->type;
            echo '</td><td>';
            echo $row->req_points/2;
            echo '</td><td>';
            $a='';
            if($row->type=='English Question')
            {$a='tutor_english_question';}
            else if ($row->type=='Sentence Correction' || $row->type==NULL)
            {$a='edit';}
            else if ($row->type=='Uploded File')
             {$a='uploaded';}
            else if($row->type=='Pronunciation')
            {$a='tutor_pronunciation';}
            else if($row->type=='Proofread')
            {$a='proofread_answer';}
            echo '<a href="http://quickcorrections.com/qc/login3/tutor/'. $a .'/'. $row->request_id .'"><button class="btn btn-primary" type="button">Answer</button></a>';
            echo '</td></tr>';
       
}?>
             </tbody></table>
                    </div>
                     <?php echo $this->pagination->create_links(); ?><br>
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


      
       <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a ><i class=""></i> <h5 style="margin-top:-2px; margin-bottom:-5px">Services</h5></a>
                        </li>
                                
                                <li>
                                    <a href="<?= base_url('/user/sen_correct_student') ?>"><h5 style="margin-top:-2px; margin-bottom:-5px">&nbsp;-&nbsp;&nbsp;&nbsp;Sentence Correction</h5></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/english_question') ?>"><h5 style="margin-top:-2px; margin-bottom:-5px">&nbsp;-&nbsp;&nbsp;&nbsp;Question about English</h5></a>
                                </li>
                                <li>
                                    <a href="http://quickcorrections.com/qc/login3/auth/pronunciation"><h5 style="margin-top:-2px; margin-bottom:-5px">&nbsp;-&nbsp;&nbsp;&nbsp;Pronunciation</h5></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/proofread') ?>"> <h5 style="margin-top:-2px; margin-bottom:-5px">&nbsp;-&nbsp;&nbsp;&nbsp;Proofreading</h5></a>
                                </li>
                               
                            <!-- /.nav-second-level -->
                        
                       
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/auth/change_password"><i class=""></i> <h5 style="margin-top:-2px; margin-bottom:-5px">Information</h5></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li style="background-color:#EDF1F2">
                            <a href="#"><i class=""></i> <h5 style="margin-top:-2px; margin-bottom:-5px">Your Answer</h5></a>
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/payment"><i class=""></i><h5 style="margin-top:-2px; margin-bottom:-5px"> Buy Point</h5></a>
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
                    <h3 class="page-header"><i>USER HISTORY PAGE</i></h3>
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
        <th>Tutor</th>
        <th>Request Date</th>
        <th>Request Type</th>
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
            echo $row->text;
            echo '</td><td>';
            if(!empty($row->tutor_id)){
            $user = $this->ion_auth->user($row->tutor_id)->row();
            echo '<a href="http://quickcorrections.com/qc/login3/tutor/tutor_profile/'.$user->id.'">'.$user->email.'</a>';}
            else {echo 'not assigned yet';}
            echo '</td><td>';
            echo date('m/d/Y', $row->request_date);
            echo '</td><td>';
            echo $row->type;
            echo '</td><td>';
            if(!empty($row->tutor_revision)){
            $a='';
            if($row->type=='English Question')
            {$a='edited_eq';}
            else if ($row->type=='Sentence Correction' || $row->type==NULL)
            {$a='edited_request';}
            else if ($row->type=='Uploded File')
             {$a='uploaded';}
            else if($row->type=='Pronunciation')
            {$a='edited_pro';}
            else if($row->type=='Proofread')
            {$a='edited_proof';}
            echo '<a href="http://quickcorrections.com/qc/login3/user/'. $a .'/'. $row->request_id .'"><button class="btn btn-primary" type="button">open</button></a>';}
            else{ echo 'In progress..';}
            echo '</td><td>';
        }
            ?>
    </tbody></table>
                    </div>
                    </div>
                 <?php echo $this->pagination->create_links(); ?><br>
            </div>
            <!-- /.row -->
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
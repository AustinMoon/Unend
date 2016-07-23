

      
       <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a ><i class=""></i> <h4>Services</h4></a>
                        </li>
                                
                                <li>
                                    <a href="<?= base_url('/user/sen_correct_student') ?>"><h5>&nbsp;>&nbsp;&nbsp;&nbsp;Sentence Correction</h5></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/english_question') ?>"><h5>&nbsp;>&nbsp;&nbsp;&nbsp;Question about English</h5></a>
                                </li>
                                <li>
                                    <a href="http://quickcorrections.com/qc/login3/auth/pronunciation"><h5 >&nbsp;>&nbsp;&nbsp;&nbsp;Pronunciation</h5></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/proofread') ?>"> <h5>&nbsp;>&nbsp;&nbsp;&nbsp;Proofreading</h5></a>
                                </li>
                               
                            <!-- /.nav-second-level -->
                        
                       
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/auth/change_password"><i class=""></i> <h4>Information</h4></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class=""></i> <h4>Your Answer</h4></a>
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/payment"><i class=""></i><h4> Buy Point</h4></a>
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
                    <h1 class="page-header text-center">USER PAGE</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               
                <div class="panel panel-default">
                     <div class="panel-heading">Sentence Correction</div>
    <div class="panel-body">
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Request ID</th>
        <th>TEXT</th>
        <th>User</th>
        <th>Request Date</th>
        <th>Select</th>
        
      </tr>
    </thead>
    <tbody>

        <?php 
        
        foreach ($sc->result() as $row)
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
            echo date('m/d/Y', $row->request_date);
            echo '</td><td>';
            if(!empty($row->tutor_revision)){
            echo '<a href="http://quickcorrections.com/qc/login3/user/edited_request/'. $row->request_id .'"><button class="btn btn-primary" type="button">open</button></a>';}
            else{ echo 'In progress..';}
            echo '</td><td>';
        }
            ?>
    </tbody></table>
                    </div>
                    </div>
            </div>
            <!-- /.row -->
             <!-- /.row -->
            <div class="row">
               
                <div class="panel panel-default">
                     <div class="panel-heading">Question about English</div>
                    <div class="panel-body">
                        <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Request ID</th>
                        <th>TEXT</th>
                        <th>User</th>
                        <th>Assign time</th>
                        <th>Select</th>
                        
                      </tr>
                    </thead>
                <tbody>
       <?php 
        
        foreach ($eq->result() as $row)
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
            echo date('m/d/Y', $row->request_date);
            echo '</td><td>';
            if(!empty($row->tutor_revision)){
            echo '<a href="http://quickcorrections.com/qc/login3/user/edited_eq/'. $row->request_id .'"><button class="btn btn-primary" type="button">open</button></a>';}
            else{ echo 'in progress..';}
            echo '</td><td>';
        }
            ?>
            </tbody></table>
                    </div>
                    </div>
            </div>
            <!-- /.row -->
             <!-- /.row -->
            <div class="row">
               
                <div class="panel panel-default">
                     <div class="panel-heading">Pronunciation</div>
                    <div class="panel-body">
                        <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Request ID</th>
                        <th>TEXT</th>
                        <th>User</th>
                        <th>Assign time</th>
                        <th>Select</th>
                      </tr>
                         <?php foreach ($pronoun->result() as $row)
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
            echo date('m/d/Y', $row->request_date);
            echo '</td><td>';
            if(!empty($row->tutor_revision))
            {
            echo '<a href="http://quickcorrections.com/qc/login3/user/edited_pro/'. $row->request_id .'">
            <button class="btn btn-primary" type="button">open</button></a>';
            }
            else{ echo 'in progress..';}
            echo '</td><td>';
        } ?>
                    </thead>
                <tbody>
      
            </tbody></table>
                    </div>
                    </div>
            </div>
            <!-- /.row -->
             <!-- /.row -->
            <div class="row">
               
                <div class="panel panel-default">
                     <div class="panel-heading">Proofreading</div>
                    <div class="panel-body">
                        <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Request ID</th>
                        <th>TEXT</th>
                        <th>User</th>
                        <th>Assign time</th>
                        <th>Select</th>
                      </tr>
                           <?php foreach ($proof->result() as $row)
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
            echo date('m/d/Y', $row->request_date);
            echo '</td><td>';
            if(!empty($row->tutor_revision)){
            echo '<a href="http://quickcorrections.com/qc/login3/user/edited_proof/'. $row->request_id .'"><button class="btn btn-primary" type="button">open</button></a>';}
            else{ echo 'in progress..';}
            echo '</td><td>';
        } ?>
                    </thead>
                <tbody>
     
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
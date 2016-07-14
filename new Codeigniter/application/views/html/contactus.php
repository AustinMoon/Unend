<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form'; 
        $to = 'quickcorrections@gmail.com'; 
        $subject = 'Message from Contact Demo ';
        
        $body ="From: $name\n E-Mail: $email\n Message:\n $message";
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
    }
}
    }
?>
        <!-- Page Content -->

 <div class="container-fluid">
    <div class="row" >
        <div class="col-lg-12 page-header text-center">
            <h1>Contact Us</h1>
            
        </div>
    </div>
    <div class="row" >
        <form class="form-horizontal" role="form" method="post" action="contactus.php">
            <div class="col-sm-12 text-center">   
                    <div class="form-group">
                      <label for="name" class="col-sm-4 control-label">Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                        </div>
                    </div>
                    <div class="form-group">

                        <label for="email" class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-4">
                            
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-sm-4 control-label">Message</label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="4" name="message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="human" class="col-sm-4 control-label">2 + 3 = ?</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-danger">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <! Will be used to display an alert to the user>
                        </div>  
                    </div>
                
            </div>
        </form>

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




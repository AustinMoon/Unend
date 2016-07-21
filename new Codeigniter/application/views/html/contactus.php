<?php 
if(isset($_POST['submit'])){
    $to = "quickcorrections@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "QuickCorrection:Contact Us";
    $subject2 = "QuickCorrection: Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
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
        

        <form action="" method="post" class="form-horizontal">
            <div class="col-sm-12">   
            <div class="col-sm-6 col-sm-offset-3">

                First Name: <input class="form-control" type="text" name="first_name"><br>
                Last Name: <input class="form-control" type="text" name="last_name"><br>
                Email: <input class="form-control" type="text" name="email"><br>
                Message:<br><textarea class="form-control" rows="5" name="message" cols="30"></textarea><br>
            <input class="btn btn-danger" type="submit" name="submit" value="Submit">
            <h1></h1>
            </div>
            </div>
        </form>

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




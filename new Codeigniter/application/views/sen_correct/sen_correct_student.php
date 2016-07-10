<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>QuickCorrections</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    

          
       <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <div class="circle" style="margin-top: 10px; background-image: url('http://quickcorrections.com/qc/img/dfimage.png'); width:150px; height:150px"></div> 
                                <h3 class="text-center">unend</h3>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class=""></i> Study<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                
                                <li>
                                    <a href="#">Sentence Correction</a>
                                </li>
                                <li>
                                    <a href="#">English Question</a>
                                </li>
                                <li>
                                    <a href="#">Pronunciation</a>
                                </li>
                                <li>
                                    <a href="#"> Proofreading</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=""><i class=""></i> Account</a>
                        </li>
                        <li>
                            <a href=""><i class=""></i> Setting</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=""><i class=""></i> Notifications</a>
                        </li>
                        <li>
                            <a href=""><i class=""></i> Buy Point</a>
                        </li>
                    
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id= "page-wrapper"class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center" style="font-family:avenir">SENTENCE CORRECTION</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            
            <form action="sen_correct_student" method="post">
                <div class= "row">
                    <div class="form-group col-md-8">
                        <label><h2>Check your Sentence!</h2></label>
                             <textarea class="form-control"  id="text" rows="5"placeholder="Type your question..." name="sentence" maxlength="750" autofocus></textarea>
                        <h6 class="pull-right" id="count_message"></h6>
                        <br/>
                        <h5>1 word = 1.5 point / Limit = 750 characters</h5>
                    </div>
                </div>

                <div class"row">
                    <div class="form-group col-md-8">
                        <h4>What do you need? Please let us know (Optional)</h4>
                        <textarea class="form-control"  id="textarea" rows="2"placeholder="Type Sentence here..." name="optional" maxlength="750" ></textarea>
                        <div id="textarea_feedback"></div>
                        <br/>
                        <h5> 1 word = free / Limit = 750 characters</h5>
                    </div>
                </div>

                <div class"row">
                    <div class="form-group col-md-8"> 
                        <button href="" class="btn btn-danger">Submit</button>
                    </div>

                </div>
                
                </form>


              
                <!-- /.row -->
        </div>
            <!-- /.container-fluid -->
        
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<script>
    $(document).ready(function() {
    var text_max = 99;
    $('#textarea_feedback').html(text_max + '/750');

    $('#textarea').keyup(function() {
        var text_length = $('#textarea').val().length;
        var text_remaining = text_max - text_length;

        $('#textarea_feedback').html(text_remaining + ' characters remaining');
    });
});
</script>
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
<script>
var text_max = 750;
$('#count_message').html(text_max + ' remaining');

$('#text').keyup(function() {
  var text_length = $('#text').val().length;
  var text_remaining = text_max - text_length;
  
  $('#count_message').html(text_remaining + ' remaining');
});
</script>
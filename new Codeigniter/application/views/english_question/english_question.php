
    <main id="site-content" role="main">

    <?php if (isset($_SESSION)) : ?>
        <!-- Page Content -->
       <div id= "page-wrapper"class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">English Question</h1>
                    </div>
                </div>
           
           <form action="english_question" method="post">
                <div class= "row"> 
                    <div class="form-group col-md-8">
                        <label><h2>Do you have any questions about using English in your daily lives?</h2></label>
                        <p>We only answer questions about using English in your daily lives. We are not responsible for our responses.</p>
                        <textarea class="form-control" id="textarea" rows="5" name="words" placeholder="Type your question..." maxlength="750" autofocus></textarea>
                        <div id="textarea_feedback"></div>

                        <h5>1 word = 2.5 point / Limit = 750 words</h5>
                    </div>
                </div>
                <div class"row">
                    <div class="">
                    <button href="" class="btn btn-danger">Submit</a>
                    </div>

                </div>
           </form>

        </div>

    </div>
   <?php endif; ?>
    <script>
    $(document).ready(function() {
    var text_max = 750;
    $('#textarea_feedback').html(text_max + '/750');

    $('#textarea').keyup(function() {
        var text_length = $('#textarea').val().length;
        var text_remaining = text_max - text_length;

        $('#textarea_feedback').html(text_remaining + ' characters remaining');
    });
    });
    </script>
  
    <script src="../css/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../css/dist/js/sb-admin-2.js"></script>

</body>

</html>

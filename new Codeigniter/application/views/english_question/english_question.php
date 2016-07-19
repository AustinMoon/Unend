

      
       <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class=""></i> <b>Services</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                
                                <li>
                                    <a href="<?= base_url('/user/sen_correct_student') ?>"><b>Sentence Correction</b></a>
                                </li>
                              
                                <li>
                                    <a href="http://quickcorrections.com/qc/login3/auth/pronunciation"><b>Pronunciation</b></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/proofread') ?>"> <b>Proofreading</b></a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/setting"><i class=""></i> <b>Password</b></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/userpage"><i class=""></i> <b>Your Answer</b></a>
                        </li>
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/payment"><i class=""></i><b> Buy Point</b></a>
                        </li>
                    
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

    <main id="site-content" role="main">

    <?php if (isset($_SESSION)) : ?>
        <!-- Page Content -->
       <div id= "page-wrapper"class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">QUESTION ABOUT ENGLISH</h1>
                    </div>
                </div>
           
           <form action="english_question" method="post">
                <div class= "row"> 
                    <div class="form-group col-md-8">

                        
                        <h4 ><i>Step 1. Do you have any questions about using English in your daily lives? If so, type your question below.</h4>
                        <h5>(Please don&#39;t forget! We only answer questions about using English in your daily lives. Additionally, we are not responsible for our responses. This is only for your reference.)<br/></i></h5>
                        
                        <textarea class="form-control"  id="word_count" rows="5"placeholder="Type Your Question..." name="sentence" maxlength="750" autofocus></textarea>

                        <h5 style="display:inline; color:#918C8C">Basic Service Charge 80 points + 1 word with 2 point</h5>
                        <h5 class="pull-right" >Total word count: <span id="display_count">0</span></h5>

                    </div>
                </div>
                <div class"row">
                    <div class="">
                    <h4 ><i><hr/>Step 2. Are you done? Put the submit button below. Thank you!</i></h4>

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
<script>
$(document).ready(function() {
  $("#word_count").on('keyup', function() {
    var text = this.value;
    var regex = [/DAV/g, /MAC/g];

    function countWords() {
      var count = [];
      regex.forEach(function(reg) {
        var m = text.match(reg);

        if (m) {
          count = count.concat(m);
        }
      });
      var acronyms = count.length;
      var wordsFromAcronyms = count.join().replace(/,/g,'').length;
      var rawWords = text.match(/\S+/g).length;
      
      return rawWords - acronyms + wordsFromAcronyms;
    }


    var words = countWords();
    if (words > 200) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 200).join(" ");
      // Add a space at the end to keep new typing making new words
      $(this).val(trimmed + " ");
    } else {
      $('#display_count').text(words);
      $('#word_left').text(200 - words);
    }
  });
});
</script>
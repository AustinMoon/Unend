

      
       <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a ><i class=""></i> <h5 style="margin-top:-2px; margin-bottom:-5px">Services</h5></a>
                        </li>
                                
                                <li style="background-color:#EDF1F2">
                                    <a href="#"><h5 style="margin-top:-2px; margin-bottom:-5px">&nbsp;-&nbsp;&nbsp;&nbsp;Sentence Correction</h5></a>
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
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/userpage"><i class=""></i> <h5 style="margin-top:-2px; margin-bottom:-5px">Your Answer</h5></a>
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
        <div id= "page-wrapper"class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header" ><i>SENTENCE CORRECTION</i></h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            
            <form action="sen_correct_student" method="post">
                <div class= "row">
                    <div class="form-group col-sm-12">
                    <div class="col-sm-8" style="position:relative">
                        <h4 ><i>Step 1. Type your sentence(s) below </i></h4>
                        <textarea class="form-control"  id="word_count" rows="5" placeholder="Type Sentence here..." name="sentence" maxlength="750" autofocus></textarea>
                        

                        
                        <h5 style="display:inline; color:#918C8C" >1 word = 1.5 points</h5>
                         <h5 class="pull-right" >Total word count: <span id="display_count">0</span></h5>

                    
                        <h4 ><i><hr/>Step 2. Let us know if you need anything! (optional)</i></h4>
                        <h5><i>(Ex. "for my homework", "for my email", "for my resume", "for my English test", and more)<br/></i></h5>
                        
                        <!-- <div id="textarea_feedback"></div>-->
                        <textarea class="form-control"  id="c" rows="2"placeholder="Leave comment here..." maxlength="200" name="comment"></textarea>
                        <h5 style="display:inline; color:#918C8C" >1 word = free</h5>
                       
                        
                      

                        
                    </div>
                    <!--<div class="col-sm-4 ">
                        <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4><b><i>How to use</i></b></h4>
                        </div>
                        <div class="panel-body">
                            <h5>Type Your English Sentence into TextBox.
                            For more, just add point credits to your account.</h5>
                        </div>
                        
                            </div>
                    </div>-->

                    </div>
                </div>

                <div class"row">
                    <div class="form-group col-sm-8"> 
                    <h4 ><i><hr/>Step 3. Are you done? Put the submit button below. Thank you!</i></h4>

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
    var text_max = 750;
    $('#textarea_feedback').html(text_max + '/750');
    $('#textarea').keyup(function() {
        var text_length = $('#textarea').val().length;
        var text_remaining = text_max - text_length;
        $('#textarea_feedback').html(text_remaining + ' /750');
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
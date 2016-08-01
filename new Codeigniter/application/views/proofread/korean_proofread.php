

      
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
                                <li style="background-color:#EDF1F2">
                                    <a href="#"> <h5 style="margin-top:-2px; margin-bottom:-5px">&nbsp;-&nbsp;&nbsp;&nbsp;Proofreading</h5></a>
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
                        <li>
                            <a href="http://quickcorrections.com/qc/login3/user/payment"><i class=""></i><h5 style="margin-top:-2px; margin-bottom:-5px">논설</h5></a>
                        </li>
                    
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

	<main id="site-content" role="main">
        <?php if (isset($_SESSION)) : ?>

        <div id= "page-wrapper"class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i>논설문</i></h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            
           <?php //echo $error;?> 
      <?php echo form_open_multipart('upload/do_upload');?> 
		
      
                <div class= "row">
                   
                    <div class="form-group col-md-8">
                        

                       <!-- <h4 ><i> <?php echo $error;?> </i></h4>-->

                      
                        <h4 ><i>Step 1. Word 파일로 된 논설문을 준비하세요.</i></h4>
                        <h4 ><i><hr/>Step 2. 선택하신 파일을 저희 시스템에 보내주세요.</i></h4>

                        <div class="panel panel-red">

                        <input style="display:inline" type = "file" name = "userfile" size = "20" /> 
                        
                        </div>
                        


                    <h5 style="color:#918C8C"> </h5>
                        
                         <h4><i><hr/>Step 3. Let us know if you need anything! (e.g. due date etc.)</i></h4>
                        <form action="do_upload" method="post">
                       
                            <textarea class="form-control"  id="text" rows="5" placeholder="Type Sentence here..." name="comment" maxlength="750" autofocus></textarea>
                        
                           <h5 style="display:inline; color:#918C8C" >1 word = free</h5>

                        <h4 ><i><hr/>Step 4. Great! You done! Please click on the upload button!</i></h4>

                         <input class="btn btn-danger " type = "submit" value = "Upload"  /> 
                    </div>
        </div>
        </div>
    </div>
		<?php endif; ?>


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
$('#count_message').html(text_max + ' /750');
$('#text').keyup(function() {
  var text_length = $('#text').val().length;
  var text_remaining = text_max - text_length;
  
  $('#count_message').html(text_remaining + ' /750');
});
</script>

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

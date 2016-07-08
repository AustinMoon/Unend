<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>QuickCorrections</title>
    <link href="../css/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../css/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../css/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



	<script src="http://quickcorrections.com/qc/login3/css/js/display_recorder.js"></script>
	<script src="http://quickcorrections.com/qc/login3/css/js/main_recorder.js"></script>
	<script src="http://quickcorrections.com/qc/login3/css/js/recorder.js"></script>
    
    <iframe src="https://webaudiodemos.appspot.com/AudioRecorder/index.html" width="200" height="200"></iframe>

	<style>
        
	html { overflow: hidden; }
	body { 
		font: 14pt Arial, sans-serif; 
		background: lightgrey;
		display: flex;
		flex-direction: column;
		height: 100vh;
		width: 100%;
		margin: 0 0;
	}
	canvas { 
		display: inline-block; 
		background: #202020; 
		width: 95%;
		height: 45%;
		box-shadow: 0px 0px 10px blue;
	}
	#controls {
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: space-around;
		height: 20%;
		width: 100%;
	}
	#record { height: 15vh; }
	#record.recording { 
		background: red;
		background: -webkit-radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%); 
		background: -moz-radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%); 
		background: radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%); 
	}
	#save, #save img { height: 10vh; }
	#save { opacity: 0.25;}
	#save[download] { opacity: 1;}
	#viz {
		height: 80%;
		width: 100%;
		display: flex;
		flex-direction: column;
		justify-content: space-around;
		align-items: center;
	}
	@media (orientation: landscape) {
		body { flex-direction: row;}
		#controls { flex-direction: column; height: 100%; width: 10%;}
		#viz { height: 100%; width: 90%;}
	}

	</style>
</head>
<body>
	<div id="viz">
		<canvas id="analyser" width="1024" height="500"></canvas>
		<canvas id="wavedisplay" width="1024" height="500"></canvas>
	</div>
	<div id="controls">
		<img id="record" src="img/mic128.png" onclick="toggleRecording(this);">
		<a id="save" href="#"><img src="img/save.svg"></a>
	</div>
</body>
</html>

    <!-- jQuery -->
    <script src="../css/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    
    <!--- Recorder---->
  	<script src="http://quickcorrections.com/qc/login3/css/js/display_recorder.js"></script>
	<script src="http://quickcorrections.com/qc/login3/css/js/main_recorder.js"></script>
	<script src="http://quickcorrections.com/qc/login3/css/js/recorder.js"></script>
    
    <script src="../css/dist/js/sb-admin-2.js"></script>

</body>


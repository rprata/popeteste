<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<!-- BASICS -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>POPETeste</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
		<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/style.css">
		<!-- skin -->
		<link rel="stylesheet" href="skin/default.css">

		<style>
/*			html { overflow: hidden; }
*/			canvas {
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

          ul { list-style: none; }
          #recordingslist audio { display: block; margin-bottom: 10px; }

		</style>
    </head>
	<body>
		<section id="header" class="appear"></section>
		<section id="section-test1" class="section appear clearfix">
			<div class="container">
				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp">Teste - Parte 2</h2>
							<p>Grave o que está acontecendo na cena abaixo. Para iniciar, conecte um microfone ao seu computador e aperte o ícone de gravação. Para terminar aperte novamente no ícone.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-1" style="width: 100%; margin-left: 0;">
						<!-- <img src="img/tests/teste1.jpg" alt="teste 1" height="1200" width="1000"> -->
						<div id="imagens">
							<img src="img/tests/teste1/img1.jpg">
							<img src="img/tests/teste1/img2.jpg">
							<img src="img/tests/teste1/img3.jpg">
							<img src="img/tests/teste1/img4.jpg">
							<img src="img/tests/teste1/img5.jpg">
							<img src="img/tests/teste1/img6.jpg">
							<img src="img/tests/teste1/img7.jpg">
							<img src="img/tests/teste1/img8.jpg">
							<img src="img/tests/teste1/img9.jpg">
							<img src="img/tests/teste1/img10.jpg">
							<img src="img/tests/teste1/img11.jpg">
							<img src="img/tests/teste1/img12.jpg">
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="col-md-8" id="viz">
						<canvas id="analyser" width="400" height="100"></canvas>
					</div>
					<div class="col-md-4" id="controls">
						<br><br><br>
						<img id="record" src="img/recorder/mic128.png" onclick="startRecording(this);"><!--toggleRecording(this);-->
            <ul id="recordingslist"></ul>
            <pre id="log"></pre>
					</div>
				</div>
				<br>
				<br>
				<br>
				<div class="row">
					<div class="col-md-12 col-md-offset-5">
						<input type="hidden" name="cod" value="11">
						<button type="button" id="test2_bt" class="btn btn-primary btn-lg">PROSSEGUIR</button>
					</div>
				</div>
			</div>
		</section>
		<br>
		<br>
		<section id="footer" class="section footer">
		<!-- <div class="container">
			<div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
				<div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
				</div>
			</div> -->

			<div class="row align-center copyright">
					<div class="col-sm-12"><p>Copyright &copy; 2014 Amoeba - by <a href="http://bootstraptaste.com">Bootstraptaste</a></p></div>
			</div>
		</div>

		</section>
		<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>




		<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
	    <script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/jquery.nicescroll.min.js"></script>
		<script src="js/fancybox/jquery.fancybox.pack.js"></script>
		<script src="js/skrollr.min.js"></script>
		<script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
		<script src="js/jquery.localscroll-1.2.7-min.js"></script>
		<script src="js/stellar.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/validate.js"></script>

		<script src="js/audiodisplay.js"></script>
		<script src="js/recorderjs/recorder.js"></script>
		<script src="js/main-recorder.js"></script>

		<script type="text/javascript">
		  $('#test2_bt').click(function() {
		    	var win = window.open('teste3.html', '_self');
	  			win.focus();
		  });
      function __log(e, data) {
    log.innerHTML += "\n" + e + " " + (data || '');
  }

  var audio_context;
  var recorder;

  function startUserMedia(stream) {
    var input = audio_context.createMediaStreamSource(stream);
    __log('Media stream created.' );
	__log("input sample rate " +input.context.sampleRate);

    input.connect(audio_context.destination);
    __log('Input connected to audio context destination.');

    recorder = new Recorder(input);
    __log('Recorder initialised.');
  }

  function startRecording(button) {
    $('#record').removeAttr('onclick');
    $('#record').attr('onclick', 'stopRecording(this);');
    $('#record').attr('class', 'recording');
    recorder && recorder.record();
    button.disabled = true;
    button.nextElementSibling.disabled = false;
    __log('Recording...');
  }

  function stopRecording(button) {
    $('#record').removeAttr('onclick');
    $('#record').attr('onclick', 'startRecording(this);');
    $('#record').removeAttr('class');
    recorder && recorder.stop();
    button.disabled = true;
    button.previousElementSibling.disabled = false;
    __log('Stopped recording.');

    // create WAV download link using audio data blob
    createDownloadLink();

    recorder.clear();
  }

  function createDownloadLink() {
    recorder && recorder.exportWAV(function(blob) {
      /*var url = URL.createObjectURL(blob);
      var li = document.createElement('li');
      var au = document.createElement('audio');
      var hf = document.createElement('a');

      au.controls = true;
      au.src = url;
      hf.href = url;
      hf.download = new Date().toISOString() + '.wav';
      hf.innerHTML = hf.download;
      li.appendChild(au);
      li.appendChild(hf);
      recordingslist.appendChild(li);*/
    });
  }

  window.onload = function init() {
    try {
      // webkit shim
      window.AudioContext = window.AudioContext || window.webkitAudioContext;
      navigator.getUserMedia = ( navigator.getUserMedia ||
                       navigator.webkitGetUserMedia ||
                       navigator.mozGetUserMedia ||
                       navigator.msGetUserMedia);
      window.URL = window.URL || window.webkitURL;

      audio_context = new AudioContext;
      __log('Audio context set up.');
      __log('navigator.getUserMedia ' + (navigator.getUserMedia ? 'available.' : 'not present!'));
    } catch (e) {
      alert('No web audio support in this browser!');
    }

    navigator.getUserMedia({audio: true}, startUserMedia, function(e) {
      __log('No live audio input: ' + e);
    });
  };
		</script>
    <script src="recordmp3.js"></script>
	</body>

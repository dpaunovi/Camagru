<html>
	<head>
		<meta content="Display Webcam Stream" name="title">
		<title>Camagru</title>
	</head>
	<body>
		<div class="box">
			<div class="container">

				<h2>Take or upload a Picture</h2>
				<div class="app">
					<a href="#" id="start-camera" class="visible">Touch here to start the app.</a>
<!--					<a href="#"><input id="start-upload" class="visible" type="file" name="image" onchange="readURL(this)">Touch here to upload a picture.</input></a>-->
					<a href="#" id="start-upload" class="visible">Touch here to upload a picture.<input type="file" name="image" onchange="readURL(this)" />
</a>
					<video id="camera-stream"></video>
					<img id="snap"></img>
					<p id="error-message"></p>
					<div id="webcam-form" class="controls">
						<button id="delete-photo" title="Delete Photo" class="disabled"><i class="material-icons">delete</i></button>
						<button id="take-photo" name="image" title="Take Photo"><i class="material-icons">camera_alt</i></button>
						<button id="upload-photo" name="submit" title="Save Photo" class="disabled"><i class="material-icons">file_download</i></button>
					</div>
					<canvas></canvas>
				</div>
				<form method="POST" id="upload-form" action="./modeles/images/upload.php" enctype="multipart/form-data">
					<input type="file" name="image"> <!--onchange="readURL(this)" />-->
					<input type="submit" name="submit" value="upload">
				</form>
			</div>
			<hr>
			<div class="container">
				<h2>History of Pictures</h2>
				<div class="gallery">
				<?php get_user_img(); ?>
				</div>
			</div>
		</div>
		<script src="./js/webcam.js"></script>
		<script src="./js/like.js"></script>
	</body>
</html>

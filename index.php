<html>
	<head>
		<link rel="stylesheet" type="text/css" href="./bootstrap-3.3.5-dist/css/bootstrap.css" />
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="sidebar-nav-fixed affix">
						<div class="well">
							<ul class="nav nav-list">
								<li class="nav-header">Categories</li>
								<li><a href="">Dairy</a></li>
								<li><a href="">Meats</a></li>
								<li><a href="">Vegetables</a></li>
								<li><a href="">Deli</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px;">
						<!-- Slides Container -->
						<div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height: 300px;">
							<div><img u="image" src="slider\img\1920\blue.jpg" /></div>
							<div><img u="image" src="slider\img\1920\red.jpg" /></div>
							<div><img u="image" src="slider\img\1920\purple.jpg" /></div>
						</div>
					</div>
				
					<script src="jquery-2.1.4.min.js"></script>
					<script src="slider\js\jssor.slider.mini.js"></script>
					<script>
					jQuery(document).ready(function ($) {
						var options = { $AutoPlay: true };
						var jssor_slider1 = new $JssorSlider$('slider1_container', options);
					});
					</script>
				</div>
			</div>
		</div>
	</body>
</html>
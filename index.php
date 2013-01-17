<html>
<head>
	<script type="text/javascript" src="//use.typekit.net/cuc6ksk.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<link rel="stylesheet" href="stylesheets/screen.css" />
</head>
	<body>
		<header class="wrapper">
			<h1>We've got your back Collin</h1>
			<p>Our buddy Collin is battling cancer, so we're battling it with him. Let Collin and those fighting know you're praying and thinking of him, while getting updates on his progress.</p>
<!-- 			<div id="facebook" class="fb-button">Login w/facebook to join in</div>
 -->		</header><br /><br />
		<div class="wrapper">
			<div id="updates">

				<div id="section">
					<h3>Headed to Chemo</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vehicula congue scelerisque. Proin a quam a mi pretium mollis. Maecenas viverra tincidunt ipsum, non porta ipsum egestas ac. In ac ligula vel sem rhoncus lobortis. Quisque dignissim arcu non arcu tempor tincidunt. Aenean dui dui, tempus eu ultrices et, dignissim id libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut convallis scelerisque nunc, vel rutrum odio luctus et. Praesent sodales, leo eget dictum porttitor, nisi diam imperdiet metus, non lobortis odio eros lobortis arcu. Maecenas pulvinar ornare viverra. Pellentesque in malesuada velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla sollicitudin laoreet molestie. Etiam facilisis risus et velit placerat ornare. Integer ac neque ante.</p>
					<span class="quote">"This is going to be rough, but Collin is a fighter we're going to come out on the other side." - Matt Graham</span>

					<div id="fb-root"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=252447711526668";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
					<div class="fb-comments" data-href="http://madebygraham.com" data-width="440" data-num-posts="1"></div>
				</div>

			</div>

			<div id="supporters">
				<h3>"Tops Off" Supporters</h3>
				<p>Several have wanted to show their support by taking off their top (hair people, we're talking about their hair). Tweet me your photo at <a href="#">@michigangraham</a> if you'd like to join the list.</p>
				<img src="http://distilleryimage0.s3.amazonaws.com/7c8b3e6c595111e29a2a22000a1fb02b_7.jpg">
				<img src="images/dom_trevino61.png" class="window">
				<img src="images/rickalles.png" class="window">
				<br /><br />
			</div>
			<div id="supporters">
				<h3>Instagram Supporters</h3>
				<p>Join the Instagram supporters by using the hash tag <a href="#">#courageforcollin</a> in your photos that you're sharing for his support.</p>
				<?php
				    // Get class for Instagram
				    // More examples here: https://github.com/cosenary/Instagram-PHP-API
				    require_once 'instagram.class.php';

				    // Initialize class with client_id
				    // Register at http://instagram.com/developer/ and replace client_id with your own
				    $instagram = new Instagram('457f784dbf5b4580a4c256f84911cbc6');

				    // Set keyword for #hashtag
				    $tag = 'github';

				    // Get latest photos according to #hashtag keyword
				    $media = $instagram->getTagMedia($tag);

				    // Set number of photos to show
				    $limit = 21;

				    // Show results
				    // Using for loop will cause error if there are less photos than the limit
				    foreach(array_slice($media->data, 0, $limit) as $data)
				    {
				        // Show photo
				        echo '<img src="'.$data->images->thumbnail->url.'">';
				    }
				?>
					<span id="more">View More</span>
			</div>
			<div id="footer"></div>
		</div>
	</body>
</html>
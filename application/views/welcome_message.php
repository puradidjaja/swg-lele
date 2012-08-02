<?php include 'template/header.php';?>
<h1>Bootstrap Template</h1>
<p>Place The content here</p>
<?php include 'template/footer.php';?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="http://localhost/kerupuk_lele/index.php/welcome" data-send="true" data-width="450" data-show-faces="true"></div>
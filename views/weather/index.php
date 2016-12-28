<div class="container">
<div class="row">
	<div class="col-md-12 flex-center">
	<div>
		<img src="<?php echo $data[0]['pic'] ?>" width="200" height="200">
		<h4 class="weathercenter"><?php echo $data[0]['title'] ?></h4>				
		<p><?php echo $data[0]['desc'] ?></p>
		<h4 class="weathercenter"><?php echo $data[1]['title'] ?></h4>
		<p><?php echo $data[1]['desc'] ?></p>
		<h4 class="weathercenter"><?php echo $data[2]['title'] ?></h4>
		<p><?php echo $data[2]['desc'] ?></p>
		<h4 class="weathercenter"><?php echo $data[3]['title'] ?></h4>
		<p><?php echo $data[3]['desc'] ?></p>
		<a href="<?php echo $data[0]['link'] ?>">link</a>
	</div>
</div>
</div>
</div>
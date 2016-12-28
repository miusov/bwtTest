<div class="container">
<div class="row">
	<div class="col-md-12 flex-center">
	<div>
	<h1 class="vcenter"><?php echo $cityx  ?></h1><br>
		<h4 class="vcenter"><?php echo $data[0]['title'] ?></h4>				
		<p class="weatherText"><img src="<?php echo $data[0]['pic'] ?>"> <?php echo $data[0]['desc'] ?></p>
		<hr>
		<h4 class="vcenter"><?php echo $data[1]['title'] ?></h4>
		<p class="weatherText"><img src="<?php echo $data[1]['pic'] ?>"> <?php echo $data[1]['desc'] ?></p>
		<hr>
		<h4 class="vcenter"><?php echo $data[2]['title'] ?></h4>
		<p class="weatherText"><img src="<?php echo $data[1]['pic'] ?>"><?php echo $data[2]['desc'] ?></p>
		<hr>
		<h4 class="vcenter"><?php echo $data[3]['title'] ?></h4>
		<p class="weatherText"><img src="<?php echo $data[3]['pic'] ?>"> <?php echo $data[3]['desc'] ?></p>
		<hr>
		<a href="<?php echo $data[0]['link'] ?>" target="_blanc">gismeteo.ua</a><br>
	</div>

</div>
</div>
</div>
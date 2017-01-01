<?php 
var_dump($feeds);
 ?>

<div class="container">
	<div class="row">

		<div class="col-md-12 comment-row">
			<div class="col-md-2">
				<div>
					<p class="text-center usnm"><?php echo $array['name']; ?></p>
					<p class="text-center usem"><?php echo $array['email']; ?></p>
				</div>
			</div>
			<div class="col-md-10 block">
				<span><?php echo $array['message'] ?></span>
			</div>	
		</div>
		<div class="col-md-12 text-right" style="color:#9a9a9a">
			<p><?php echo $array['datein'] ?></p>
		</div>
	</div>
</div>

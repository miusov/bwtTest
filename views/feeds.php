<?php 
for ($i=0; $i < count($feedbacks) ; $i++) { 
 ?>

<div class="container">
	<div class="row">

		<div class="col-md-12 comment-row">
			<div class="col-md-2">
				<div>
					<p class="text-center usnm"><?php echo $feedbacks[$i]['name']; ?></p>
					<p class="text-center usem"><?php echo $feedbacks[$i]['email']; ?></p>
				</div>
			</div>
			<div class="col-md-10 block">
				<span><?php echo $feedbacks[$i]['message'] ?></span>
			</div>	
		</div>
		<div class="col-md-12 text-right" style="color:#9a9a9a">
			<p><?php echo $feedbacks[$i]['datein'] ?></p>
		</div>
	</div>
</div>

<?php 
}
 ?>
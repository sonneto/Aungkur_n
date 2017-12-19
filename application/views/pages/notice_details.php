<div class="w3-row">	
	<?php foreach ($notice as $n) {?>	
	<h2 class="w3-center"><?php echo $n['name']?></h2>
	<div style="max-width:900px;margin:0px auto">
		<p><?php echo $n['body']?></p>
	</div>
	
	<?php }?>
</div>
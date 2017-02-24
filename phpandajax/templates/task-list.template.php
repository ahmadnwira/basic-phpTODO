
<div class="col-md-5 col-md-offset-1">
	
	<?php foreach ($tasks as $task): ?>

	<li class="list-group-item" data-state="<?=$task->completed?>">
		<?= $task->task; ?><span class="badge"><?= $task->importance ?></span>
	<p>	

		<form action="done.php" method="POST"  class="ajax inline">
			<input type="hidden" name="id" value="<?= $task->id ?>">
			 <input type="submit" value="&#10004;" class="btn btn-xs btn-default">
		</form>

		<form action="delete.php" method="POST" class="ajax inline">
			<input type="hidden" name="id" value="<?= $task->id ?>">			
			<button type="submit" class="btn btn-xs btn-default">&#10006;</button>
		</form>
	</p>
	</li>

	<?php endforeach; ?>



</div>
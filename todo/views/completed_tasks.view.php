<?php require_once 'header.view.php' ; ?>

<?php require '../controllers/completed_tasks.controller.php' ?>

<div class="col-md-6">
		<h1 style="text-align:center;">Completed</h1>
		
		<div class="list-group">
			<ul class="list">
				<?php foreach ($completed_tasks as $task): ?>
		  		<li class="list-group-item "> 
		  			<a href="?task=<?= $task['id'] ?>" class="completed">
		  				
		  				<?= $task['task'] ?> 
		  			</a>
		  		</li>

				<?php endforeach; ?>
	  		</ul> 		
		</div>
	</div>
</div>
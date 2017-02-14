<?php require_once 'header.view.php' ; ?>

<?php require '../controllers/inprogress_tasks.controller.php' ?>

<div class="row">
	<div class="col-md-6">
		<h1 style="text-align:center;">In Progress</h1>
		
		<div class="list-group list">

	  		
		  	<?php foreach ($inprogress_tasks as $task): ?>	

				<li class="list-group-item">

	  			<form action="../controllers/inprogress_tasks.controller.php" method="POST">

         		   	<input type="hidden" name="id" value="<?= $task['id']?>"/>	
					<a class="pull-left"> <?= $task['task'] ?> </a> 
					
					<button name="action" value="done" type="submit" 
							class="btn btn-edit btn-xs">&#x2713;</button>
					
					<button name="action" value="edit" type="submit" 
							class="btn btn-edit btn-xs">&#10002;</button>
					
					<button name="action" value="delete" type="submit" 
							class="btn btn-edit btn-xs">&#x2715;</button>

					<span class="badge pull-right">importance <?= $task['importance'] ?></span>
				</form>
				
				</li>
				
			<?php endforeach ; ?>


		</div>
	</div>


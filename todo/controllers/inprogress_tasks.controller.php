<?php
	
		require_once '../model/query.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		

		
		switch ($_POST['action']) {
					case 'delete':
						delete('tasks','id',$_POST['id']);
						header('Location: ../views/index.view.php');
						break;
					
					case 'done':
						update('tasks','completed','1','id='.$_POST['id']);
						header('Location: ../views/index.view.php');
						break;

					case 'edit':
						header('Location: ../controllers/edite_task.controller.php');
						break;

					default:
						echo "oops! didn't catch that try again";
						break;
				}		
	}

	else{

		$inprogress_tasks = select('select id,task,importance from tasks where completed=0');
	}
?>

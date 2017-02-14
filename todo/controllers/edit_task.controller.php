<?php 
	
	if ($_SERVER['REQUEST_METHOD'] == "GET"){

		require '../views/edit_task.view.php' ;
	}

	else{

		require '../model/query.php';

		update('tasks','task',$_POST['task'],'id='.$_POST['id']);

		update('tasks','importance',$_POST['importance'],'id='.$_POST['id']);
		
		header('Location: ../views/index.view.php');
	}

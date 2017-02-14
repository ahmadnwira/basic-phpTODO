<?php 
	
	if ($_SERVER['REQUEST_METHOD'] == "GET"){

		require '../views/add_task.view.php' ;
	}

	else{
		
		require_once '../model/query.php';

		insert('tasks',['task','importance'],$_POST);
	}

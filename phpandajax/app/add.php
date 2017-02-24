<?php

	require_once 'db/connect.php' ;

	require_once 'db/task.php';

	$task = new Task(Connect::start());


	$tasks = $task->createTask($_POST);
	
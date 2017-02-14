<?php

	require_once '../model/query.php';

	$completed_tasks = select('select id,task from tasks where completed=1');

?>

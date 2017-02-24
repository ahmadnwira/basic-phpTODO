<?php

class Task{

	private $pdo;
	
	public function __construct($pdo){

		$this->pdo = $pdo;
	}

	/* slect all tasks */
	public function getTasks(){
		try{
			$statement = $this->pdo->prepare('select * from tasks');
			$statement->execute();

			return $statement->fetchAll(PDO::FETCH_CLASS);
		}catch(Exception $e){
			die('failed to find tasks');
		}

	}
	
	/* create task */
	public function createTask($input){
		$query = sprintf(

			"insert into tasks (%s) values (%s) ",
			implode(", ", array_keys($input)) ,
			":".implode(", :", array_keys($input) ) 
		);
	
		try{
			$statement = $this->pdo->prepare($query);

			$statement->execute($input);

		}catch(Exception $e){
			die("failed to create task");
		}		
	}

	/* update task */
		public function updateTask($input,$id){
		$query = sprintf(

			"update tasks set %s = %s where id = %s",
			implode(", ", array_keys($input)) ,
			":".implode(", :", array_keys($input) )
			,$id
		);
	
		try{
			$statement = $this->pdo->prepare($query);

			$statement->execute($input);

		}catch(Exception $e){
			die("failed to update task");
		}	
	}

	/* delete task */
	public function deleteTask($id){
		try{
			$statement = $this->pdo->prepare("delete from  tasks where id = {$id}");
			$statement->execute();
		}catch(Exception $e){
			die("failed to delete task");
		}
	} 

}
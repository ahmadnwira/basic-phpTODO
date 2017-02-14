<?php
	require 'config.php' ;
	
	function connection(){
		
		$conn  = sprintf('%s:host=%s;dbname=%s', DB_TYPE, HOST, DB_NAME);

		
		try {
			return new PDO($conn, DB_USR, DB_KEY);
		}

		catch(Exception $e){
			die('connection failure');
		}
	}
	


	function select($query){

			$statement = connection()->prepare($query);
					
			$statement->execute();

		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results;

	}

	function insert($table,$columns,$values){

		$query = sprintf('insert into %s (%s) values(%s)',
			
				$table, implode(', ', $columns) , ':'.implode(', :',$columns)
			);

		try{
			$statement = connection()->prepare($query);
		
            $statement->execute(array_combine($columns,$values));

            header('Location: add_task.controller.php');
		}
        catch (Exception $e) {
            die('failed');
        }
	}


	function runSql($query){

		try{
			$statement = connection()->prepare($query);
	
        	$statement->execute();
		}
        catch (Exception $e) {
            die('failed');
        }
	}

	function update($table,$column,$value,$condtion){

		$query = sprintf('update  %s set %s = %s where %s ',
			
				$table, $column , $value , $condtion
			);

		runSql($query);
	}

	function delete($table,$column,$value){

		$query = sprintf('delete from %s where %s = %s ',
		
			$table, $column , $value 
		);

		runSql($query);
	}
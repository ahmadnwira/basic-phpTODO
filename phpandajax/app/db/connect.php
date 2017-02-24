<?php
	

class Connect{

	public static function start(){
		
		try{
			return new PDO('mysql:host=localhost;dbname=todo', 'root','e.n.g.123');
		}		

		catch(PDOException $e){

			die('connection failed');
		}	
	}

	
}

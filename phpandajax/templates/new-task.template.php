
<div id="new-task-form-container">
	
	<form action="add.php" id="new-task-form" class="ajax" method="POST">	

	 <h3>Create New Task <span id="close" class="pull-right">X</span></h3>
	  <div class="col-md-4 form-group">	
	    <input type="text" class="form-control" name="task" placeholder="Task..">
	  </div>

	  <div class="col-md-2 form-group">
	    <select name="importance" class="form-control col-md-4">
	    	<option value="1">1</option>
	    	<option value="2">2</option>
	    	<option value="3">3</option>
	    </select>
	
	  </div>
	
	  <button type="submit" class="btn btn-success">Submit</button>
	
	</form>
</div>
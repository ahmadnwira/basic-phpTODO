

// dsiplay new-task-form-modal
$("#new").on("click",function(){
	$("#new-task-form-container").css("display","block");
});

// closes the new-task-form-modal
$("#close").on("click",function(){
	$("#new-task-form-container").css("display","none");
});

// sumbiting ajax form
$(document).on('submit', '.ajax', function(e) {
	var form = $(this);
	$.ajax({
		url:"../app/"+form.attr('action'),
		type :form.attr('method'),
		data:form.serialize(),
		success:function () {
			$("#task-list").load("../app/list.php");
			$("#new-task-form-container").fadeOut();
		}
	});
	
	e.preventDefault(); // stops form from sumbiting tradtionaly
});


// loads the tasks
$("#task-list").load("../app/list.php");

$(function(){
	if($("li").data("state")==1){
		$("p").addClass("completed");
	}	
});
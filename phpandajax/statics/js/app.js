$("#new").on("click",function(){
	$("#new-task-form-container").css("display","block");
});

$("#NewTask").on("click",function(){
	console.log("ok");
	$("#new-task-form-container").css("display","none");
});

$("#close").on("click",function(){
	console.log("ok");
	$("#new-task-form-container").css("display","none");
});